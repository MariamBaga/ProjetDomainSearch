<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Country;
use Illuminate\Support\Facades\Http;
use App\Models\Domain;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;

class CheckoutController extends Controller
{
    /**
     * Affiche la page de paiement.
     */
    public function index()
    {
        // Vérifier si l'utilisateur est authentifié
        if (!Auth::check()) {
            // Stocker l'URL de la page actuelle dans la session
            session()->put('url.intended', url()->current());

            // Rediriger vers la page de connexion avec un message
            return redirect()->route('login')->with('error', 'Veuillez vous connecter pour accéder à votre panier.');
        }

        // Récupérer le panier depuis la session
        $cart = session()->get('cart', []);

        // Vérifier si le panier est vide
        if (empty($cart)) {
            // Rediriger vers la page du panier avec un message d'erreur si le panier est vide
            return redirect()->route('cart')->with('error', 'Votre panier est vide.');
        }

        // Récupérer la liste des pays (pour une fonctionnalité future)
        $countries = Country::all();

        // Passer les données à la vue `Checkout.view`
        return view('Checkout.view', compact('cart', 'countries'));
    }

    /**
     * Traite la commande et le paiement.
     */


     public function checkoutprocess(Request $request)
     {
         // Validation des données
         $request->validate([
             'email' => 'required|email',
             'phone' => 'required|string',
             'first_name' => 'required|string',
             'last_name' => 'required|string',
             'country' => 'required|exists:countries,id',
             'address' => 'required|string',
             'city' => 'required|string',
             'payment_method' => 'required|in:orange_money',
         ]);

         // Récupérer le panier depuis la session
         $cart = session()->get('cart', []);
         $totalAmount = array_sum(array_map(fn($item) => $item['price'] * $item['duration'], $cart));



         // Créer une nouvelle commande
         $order = Order::create([
             'user_id' => Auth::id(),
             'email' => $request->input('email'),
             'phone' => $request->input('phone'),
             'first_name' => $request->input('first_name'),
             'last_name' => $request->input('last_name'),
             'country_id' => $request->input('country'),
             'address' => $request->input('address'),
             'city' => $request->input('city'),
             'total_amount' => $totalAmount,
             'payment_method' => $request->input('payment_method'),
             'status' => 'pending',
         ]);

         // Enregistrer les éléments de la commande
         foreach ($cart as $domainName => $domain) {
            // Créer l'élément de commande sans utiliser `domain_id`
            $orderItem = OrderItem::create([
                'order_id' => $order->id,
                'domain_name' => $domain['name'], // Utiliser le nom du domaine
                'domain_extension' => $domain['extension'], // Utiliser l'extension du domaine
                'price' => $domain['price'],
                'duration' => $domain['duration'],
            ]);


        }

        // Optionnel : Vous pouvez vider le panier après la commande
        session()->forget('cart');

        session()->forget('user');
        // Appeler la méthode pour initier le paiement
        return $this->makePayment($order);
    }

     private function makePayment(Order $order)
{
    $api_key = 'd7KvHyrHN6rg2A';
    $api_secret = '93f0003d4dc2a6a8eb1de3b331133b29';
    $amount_100 = $order->total_amount * 100;
    $order_id = 'ORD' . $order->id;
    $callback_url = 'https://abcd1234.ngrok.io/api/paiement/callback'; // Remplacez par l'URL publique

    $upped = strtoupper("$order_id;$amount_100;XOF;$callback_url;$api_secret");
    $hash = sha1($upped);


    $payload = [
        'api_key' => $api_key,
        'hash' => $hash,
        'username' => '',
        'api_version' => '1',
        'payment[language_code]' => 'fr',
        'payment[currency_code]' => 'XOF',
        'payment[country_code]' => 'ML',
        'payment[order_id]' => $order_id,
        'payment[description]' => "Achat de domaine",
        'payment[amount_100]' => $amount_100,
        'payment[return_url]' => url('/paiement/success'),
        'payment[decline_url]' => url('/paiement/echec'),
        'payment[cancel_url]' => url('/paiement/echec'),
        'payment[callback_url]' => $callback_url,
        'payment[email]' => $order->email,
        'payment[api_key]' => $api_key,
        'payment[p_type]' => 'orange_money',
    ];

    $client = new \GuzzleHttp\Client();
    try {
        $response = $client->request('POST', 'https://api.vitepay.com/v1/prod/payments', [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'api_key' => $api_key,
                'api_secret' => $api_secret,
            ],
            'body' => http_build_query($payload),
            'timeout' => 90,
            'verify' => true,
        ]);
        $url = $response->getBody()->getContents();
        return redirect()->away($url);
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        Log::error('Erreur lors de la demande de paiement : ' . $e->getMessage());
        return redirect()->route('checkout.error')->with('error', 'Une erreur est survenue lors du traitement du paiement.');
    }
}


public function makePaymentEchec()
{
    return view('Checkout.error')->with('message', 'Une erreur est survenue lors du traitement du paiement.');
}



        public function success()
        {
            return view('Checkout.success');
        }





    public function showErrors()
    {
        $logFile = storage_path('logs/laravel.log');

        if (File::exists($logFile)) {
            $logContent = File::get($logFile);
            $logErrors = explode("\n", $logContent);

            // Vous pouvez filtrer ou limiter les erreurs si nécessaire
            $logErrors = array_slice(array_filter($logErrors), -10); // Dernières 10 erreurs

            return view('Checkout.error', compact('logErrors'));
        } else {
            return view('Checkout.error')->with('logErrors', ['Aucun fichier de log trouvé.']);
        }
    }


}
