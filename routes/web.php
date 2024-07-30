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

use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ResetPasswordController;

use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\CartController;

use App\Http\Controllers\DomainController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test-role', function () {
//     $user = User::find(4);
//     $user->assignRole('admin');
//     return 'Role assigned!';
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [DomainController::class, 'search'])->name('search.domain');

Route::get('/contact', [ContactController::class, 'view'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendmessage'])->name('contact.post');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginpost'])->name('login.post');
Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

   });


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Route::put('/admin/users/{user}/role', [AdminController::class, 'updateRole'])->name('admin.users.updateRole');
    Route::put('/admin/users/{user}/permissions', [AdminController::class, 'updatePermissions'])->name('admin.users.updatePermissions');
});

Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
    Route::put('/superadmin/users/{user}/role', [SuperAdminController::class, 'updateRole'])->name('superadmin.users.updateRole');
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
