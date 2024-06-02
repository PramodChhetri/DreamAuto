<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminNotificationController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserProfileContoller;
use App\Models\Product;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $topproducts = Product::orderBy('totalsells', 'desc')->paginate(6);

    if (auth()->check()) {
        return redirect('/user');
    }

    return view('home', compact('topproducts'));
});

Route::post('/', [ContactController::class, 'send'])->name('send.email');

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/user', [FrontendController::class, 'index'])->name('user.index');
    Route::get('/user/products', [FrontendController::class, 'products'])->name('user.products');
    Route::get('/user/productslive', [FrontendController::class, 'productslive'])->name('user.productslive');
    Route::get('/user/{id}/productdetail', [FrontendController::class, 'productdetail'])->name('user.productdetail');
    Route::get('/user/buyersell', [FrontendController::class, 'buyersell'])->name('user.buyersell');
    Route::post('/user/buyersell/{id}/update', [FrontendController::class, 'updatepan'])->name('user.buyersell.update');
    Route::get('/user/checkout', [FrontendController::class, 'checkout'])->name('user.checkout');

    //Orders
    Route::get('/user/orders/', [OrderController::class, 'index'])->name('user.orders.index');
    Route::post('/user/orders/store', [OrderController::class, 'store'])->name('user.orders.store');
    Route::post('/user/orders/destroy', [OrderController::class, 'ordersdestroy'])->name('user.orders.destroy');
    Route::get('/user/orders/orderhistory', [OrderController::class, 'orderhistory'])->name('user.orders.orderhistory');

    // Cart
    Route::get('/user/orders/cart', [CartController::class, 'index'])->name('user.orders.cart');
    Route::post('/user/orders/cart/store', [CartController::class, 'store'])->name('user.orders.cart.store');
    Route::post('/user/orders/cart/{id}/updatestock', [CartController::class, 'updateStock'])->name('user.orders.cart.updatestock');
    Route::post('/user/orders/cart/destroy', [CartController::class, 'destroy'])->name('user.orders.cart.destroy');

    //Feedback
    Route::post('/user/feedbacks/store', [FeedbackController::class, 'store'])->name('user.feedbacks.store');

    //User Profile
    Route::get('/user/profile/', [UserProfileContoller::class, 'index'])->name('user.profile.index');
    Route::post('/user/profile/changeprofileimage', [UserProfileContoller::class, 'changeprofileimage'])->name('user.profile.changeprofileimage');
    Route::post('/user/profile/changeprofileinformation', [UserProfileContoller::class, 'changeprofileinfo'])->name('user.profile.changeprofileinfo');
    Route::post('/user/profile/changebusinessinformation', [UserProfileContoller::class, 'changebusinessinfo'])->name('user.profile.changebusinessinfo');
    Route::post('/user/profile/changeprofilepassword', [UserProfileContoller::class, 'changeprofilepassword'])->name('user.profile.changeprofilepassword');
    Route::post('/user/profile/destroy', [UserProfileContoller::class, 'destroy'])->name('user.profile.destroy');

    // User Notification
    Route::get('/user/notifications', [FrontendController::class, 'notificationspage'])->name('user.notifications');
    Route::get('/user/notifications/{id}/redirect', [FrontendController::class, 'notificationredireact'])->name('user.notification.redireact');
    Route::get('/user/notifications/markasread', [FrontendController::class, 'markallasread'])->name('user.notifications.markallasread');
    Route::get('/user/notifications/markasunread', [FrontendController::class, 'markallasunread'])->name('user.notifications.markallasunread');

    //about Us Page
    Route::get('/user/aboutus', [FrontendController::class, 'aboutuspage'])->name('user.aboutus');


    //Contact Us Page
    Route::get('/user/contactus', [FrontendController::class, 'contactuspage'])->name('user.contactus');
});

// Role and Permission
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles/store', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::post('/roles/{id}/update', [RoleController::class, 'update'])->name('roles.update');
    Route::get('/roles/{id}/assignpermission', [RoleController::class, 'assignpermission'])->name('roles.assignpermission');
    Route::post('/roles/{id}/updatepermission', [RoleController::class, 'updatepermission'])->name('roles.updatepermission');
    Route::post('/roles/destroy', [RoleController::class, 'destroy'])->name('roles.destroy');

    Route::get('/permissons', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('/permissions/store', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('/permissions/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::post('/permissions/{id}/update', [PermissionController::class, 'update'])->name('permissions.update');
    Route::post('/permissions/destroy', [PermissionController::class, 'destroy'])->name('permissions.destroy');
});

// Profile
Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/{id}/updatePP', [AllUserController::class, 'updatePP'])->name('profile.updatePP');
});

// Check Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});


Route::middleware('auth', 'role:admin')->group(function () {

    // All Users
    Route::get('/allusers', [AllUserController::class, 'index'])->name('allusers.index');
    Route::get('/allusers/create', [AllUserController::class, 'create'])->name('allusers.create');
    Route::post('/allusers/store', [AllUserController::class, 'store'])->name('allusers.store');
    Route::get('/allusers/{id}/edit', [AllUserController::class, 'edit'])->name('allusers.edit');
    Route::post('/allusers/{id}/update', [AllUserController::class, 'update'])->name('allusers.update');
    Route::post('/allusers/destroy', [AllUserController::class, 'destroy'])->name('allusers.destroy');

    // Product
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
    Route::post('/products/destroy', [ProductController::class, 'destroy'])->name('products.destroy');

    // Stock
    Route::get('/stock', [ProductController::class, 'stockindex'])->name('stock.index');
    Route::post('/stock/{id}/update', [ProductController::class, 'stockupdate'])->name('stock.update');

    // Orders
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
    Route::post('/orders/destroy', [AdminOrderController::class, 'destroy'])->name('orders.destroy');

    // Feedbacks
    Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks.index');
    Route::post('/feedbacks/destroy', [FeedbackController::class, 'destroy'])->name('feedbacks.destroy');

    // Feedbacks
    Route::get('/messages', [ContactController::class, 'index'])->name('messages.index');
    Route::post('/messages/destroy', [ContactController::class, 'destroy'])->name('messages.destroy');

    // Admin Notifications
    Route::get('/adminnotifications', [AdminNotificationController::class, 'index'])->name('adminnotifications.index');
    Route::post('/adminnotifications/destroy', [AdminNotificationController::class, 'destroy'])->name('adminnotifications.destroy');
});

// Khalti Veriy
Route::post('khalti/verify', [FrontendController::class, 'verifykhalti'])->name('ajax.khalti.verify_order');



require __DIR__ . '/auth.php';
