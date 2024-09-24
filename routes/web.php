<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthenticatedSessionController;

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ResetPasswordController;

use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\CartController;

use App\Http\Controllers\DomainController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PriceController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DomainSearchApiController;

Route::GET('/fetch-domains', [DomainSearchApiController::class, 'fetchDomains'])->name('domain.fetch');

// Route pour renouveler un domaine
Route::POST('/renew-domains', [DomainSearchApiController::class, 'renewDomain'])->name('domain.Renew');

// Route pour l'enregistrement du domaine
// Route pour l'enregistrement du domaine
Route::POST('/register-domains', [DomainSearchApiController::class, 'registerDomains'])->name('domain.register');

// Route pour transférer un domaine
Route::post('/transfer', [DomainSearchApiController::class, 'transferDomain'])->name('domain.Transfer');
Route::GET('/transfer/{domainId}', [DomainController::class, 'indexTransfer'])->name('domain.Transfer.view');
Route::GET('/renew/{domainId}', [DomainController::class, 'indexRenew'])->name('domain.Renew.view');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test-role', function () {
//     $user = User::find(4);
//     $user->assignRole('admin');
//     return 'Role assigned!';
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/Politique', [HomeController::class, 'Politique'])->name('politique');
Route::get('/Condition', [HomeController::class, 'Condition'])->name('condition');

Route::get('/User/Dashbaord', [UserController::class, 'userCompte'])->name('user.Dashbaord');

Route::get('/Userprofil', [UserController::class, 'profil'])->name('Userprofil');

Route::get('/pricing', [PriceController::class, 'index'])->name('pricing');

Route::GET('/DomainSearch', [DomainController::class, 'search'])->name('search.domain');

Route::GET('/User/domain_list', [DomainController::class, 'User_domains_list'])->name('User.domain.list');

Route::get('/contact', [ContactController::class, 'view'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendmessage'])->name('contact.post');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginpost'])->name('login.post');
Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/process', [CheckoutController::class, 'checkoutprocess'])->name('checkout.process');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/transaction-history', [AdminController::class, 'transactionHistory'])->name('admin.transaction.history');
    Route::get('/admin/transaction/{id}', [AdminController::class, 'transactionDetails'])->name('admin.transaction.details');
    Route::delete('/admin/transaction/{id}', [AdminController::class, 'destroyTransaction'])->name('admin.transaction.destroy');
    // Route pour afficher le formulaire de création d'utilisateur
    Route::get('admin/user_list/create', [AdminController::class, 'create'])->name('admin.users.create');

    // Route pour stocker un nouvel utilisateur
    Route::post('admin/user_list', [AdminController::class, 'store'])->name('admin.users.store');

    // Route pour afficher le formulaire d'édition d'un utilisateur
    Route::get('admin/user_list/{id}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');

    // Route pour mettre à jour un utilisateur
    Route::put('admin/user_list/{id}', [AdminController::class, 'update'])->name('admin.users.update');

    // Route pour supprimer un utilisateur
    Route::delete('admin/user_list/{id}', [AdminController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('/admin/dashboard', [AdminController::class, 'Dashbaord'])->name('admin.dashboard');
 Route::get('/admin/profil', [AdminController::class, 'profil_Admin'])->name('admin.profil');


    Route::put('/superadmin/users/{user}/role', [SuperAdminController::class, 'updateRole'])->name('superadmin.users.updateRole');
    Route::get('/admin/user_list', [UserController::class, 'index'])->name('admin.user.list');
    Route::GET('/admin/domain_list', [AdminController::class, 'admin_domains_list'])->name('admin.domain.list');

    Route::get('/admin/user_role_permission', [AdminController::class, 'rolepermission'])->name('admin.user.role.permission');

    Route::put('/admin/users/{user}/role', [AdminController::class, 'updateRole'])->name('admin.users.updateRole');
   
});

Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');

    Route::put('/superadmin/users/{user}/permissions', [SuperAdminController::class, 'updatePermissions'])->name('superadmin.users.updatePermissions');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'userDashboard'])->name('user.dashboard');
    Route::put('/user/update-info', [UserController::class, 'updateInfo'])->name('user.updateInfo');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'registerpost'])->name('register.post');

Route::get('/cart', [CartController::class, 'view'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{domainId}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');

// Route pour afficher le formulaire de réinitialisation du mot de passe
Route::get('/passwordforget', [PasswordController::class, 'showResetForm'])->name('password.forget');
// Route pour traiter la demande de réinitialisation du mot de passe
Route::post('/passwordforget', [PasswordController::class, 'sendResetLink'])->name('password.email');

// Route pour réinitialiser le mot de passe (généralement gérée par Laravel)
Route::get('/password/reset/{token}', [\App\Http\Controllers\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [\App\Http\Controllers\ResetPasswordController::class, 'reset'])->name('password.update');

// web.php ou un autre fichier de routes
Route::get('/paiement/success/{order}', [PaymentController::class, 'makePaymentSuccess'])->name('payment.success');
Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

Route::get('paiement/echec', [CheckoutController::class, 'makePaymentEchec'])->name('checkout.error');
Route::get('paiement/cancel', [CheckoutController::class, 'makePaymentCancel'])->name('payment.cancel');
