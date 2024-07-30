<!-- resources/views/success.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement Réussi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="alert alert-success mt-5">
            <h1 class="display-4">Paiement Réussi</h1>
            <p class="lead">Merci pour votre achat. Votre commande a été passée avec succès.</p>
            <hr>
            <p>Vous pouvez voir les détails de votre commande dans votre <a href="{{ route('orders') }}">historique de commandes</a>.</p>
            <a class="btn btn-primary" href="{{ route('home') }}">Retour à l'accueil</a>
        </div>
    </div>
</body>
</html>
