<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\CustomerOrderController;
use App\Http\Controllers\CountdownBannerController;

Route::get('/', [WebsiteController::class, 'index'])->name('website.home');
Route::get('/product-category', [WebsiteController::class, 'category'])->name('website.category');
Route::get('/category-product/{id}', [WebsiteController::class, 'categoryProduct'])->name('website.category-product');
Route::get('/sub-category-product/{id}', [WebsiteController::class, 'subCategoryProduct'])->name('website.sub-category-product');
Route::get('/product-sub-category/{id}', [WebsiteController::class, 'subCategory'])->name('website.sub-category');
Route::get('/product-detail/{id}', [WebsiteController::class, 'productDetail'])->name('website.product-detail');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('/service', [WebsiteController::class, 'service'])->name('website.service');
Route::get('/faq', [WebsiteController::class, 'faq'])->name('website.faq');
Route::get('/wishlist', [WebsiteController::class, 'wishlist'])->name('website.wishlist');
Route::get('/collection', [WebsiteController::class, 'collection'])->name('website.collection');

Route::get('/cart', [CartController::class, 'index'])->name('website.cart');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/add-two/{id}', [CartController::class, 'addToCartTwo'])->name('cart.add-two');
Route::post('/cart/update-all', [CartController::class, 'update'])->name('cart.update.all');
Route::get('/cart/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/destroy', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('website.checkout');
Route::post('/checkout/new-customer', [CheckoutController::class, 'newCustomer'])->name('checkout.new-customer');
Route::post('/checkout/customer-login', [CheckoutController::class, 'customerLogin'])->name('checkout.customer-login');
Route::get('/checkout/billing-info', [CheckoutController::class, 'billingInfo'])->name('checkout.billing-info');
Route::post('/checkout/new-order', [CheckoutController::class, 'newOrder'])->name('checkout.new-order');
Route::get('/checkout/complete-order', [CheckoutController::class, 'completeOrder'])->name('checkout.complete-order');
Route::get('/checkout-complete/{order}', [CheckoutController::class, 'completeOrder'])->name('checkout.complete');

Route::get('/customer/login', [CustomerAuthController::class, 'login'])->name('customer.login');
Route::post('/customer/login', [CustomerAuthController::class, 'loginCheck'])->name('customer.login');
Route::get('/customer/register', [CustomerAuthController::class, 'register'])->name('customer.register');
Route::post('/customer/register', [CustomerAuthController::class, 'registerCheck'])->name('customer.register');
Route::get('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');

Route::middleware(['customer'])->group(function (){
    Route::get('/customer/dashboard', [CustomerDashboardController::class, 'index'])->name('customer.dashboard');
    Route::get('/customer/profile', [CustomerDashboardController::class, 'profile'])->name('customer.profile');
    Route::get('/customer/order', [CustomerDashboardController::class, 'order'])->name('customer.order');
    Route::get('/customer/order-detail', [CustomerDashboardController::class, 'orderDetail'])->name('customer.order-detail');
    Route::get('/customer/profile/edit/{id}', [CustomerDashboardController::class, 'editProfile'])->name('customer.profile.edit');
    Route::post('/customer/profile/update/{id}', [CustomerDashboardController::class, 'update'])->name('customer.profile.update');
    Route::get('/customer/password/change', [CustomerDashboardController::class, 'changePassword'])->name('customer.password.change');
    Route::post('/customer/password/update', [CustomerDashboardController::class, 'updatePassword'])->name('customer.password.update');

    Route::get('/customer/orders', [CustomerOrderController::class, 'index'])->name('customer.orders');
    Route::get('/customer/order/detail/{id}', [CustomerOrderController::class, 'orderDetail'])->name('customer.order.detail');
    Route::get('/customer/order/invoice/{id}', [CustomerOrderController::class, 'invoice'])->name('customer.order.invoice');
    Route::get('/customer/order/download-invoice/{id}', [CustomerOrderController::class, 'downloadInvoice'])->name('customer.order.download-invoice');

});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/sub-category/index', [SubCategoryController::class, 'index'])->name('sub-category.index');
    Route::get('/sub-category/create', [SubCategoryController::class, 'create'])->name('sub-category.create');
    Route::post('/sub-category/store', [SubCategoryController::class, 'store'])->name('sub-category.store');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::get('/sub-category/delete/{id}', [SubCategoryController::class, 'delete'])->name('sub-category.delete');

    Route::get('/brand/index', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/unit/index', [UnitController::class, 'index'])->name('unit.index');
    Route::get('/unit/create', [UnitController::class, 'create'])->name('unit.create');
    Route::post('/unit/store', [UnitController::class, 'store'])->name('unit.store');
    Route::get('/unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}', [UnitController::class, 'update'])->name('unit.update');
    Route::get('/unit/delete/{id}', [UnitController::class, 'delete'])->name('unit.delete');

    Route::get('/courier/index', [CourierController::class, 'index'])->name('courier.index');
    Route::get('/courier/create', [CourierController::class, 'create'])->name('courier.create');
    Route::post('/courier/store', [CourierController::class, 'store'])->name('courier.store');
    Route::get('/courier/edit/{id}', [CourierController::class, 'edit'])->name('courier.edit');
    Route::post('/courier/update/{id}', [CourierController::class, 'update'])->name('courier.update');
    Route::get('/courier/delete/{id}', [CourierController::class, 'delete'])->name('courier.delete');

    Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/get-sub-category-by-category', [ProductController::class, 'getSubCategoryByCategory'])->name('get-sub-category-by-category');
    Route::get('/get-sub-category', [ProductController::class, ''])->name('get-sub-category');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/products/filter/{subcategory_id}', [ProductController::class, 'filterBySubCategory'])->name('website.filter-by-subcategory');

    Route::get('/banner/index', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('/banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('/banner/delete/{id}', [BannerController::class, 'delete'])->name('banner.delete');

    Route::get('/countdown-banner/index', [CountdownBannerController::class, 'index'])->name('countdown-banner.index');
    Route::get('/countdown-banner/create', [CountdownBannerController::class, 'create'])->name('countdown-banner.create');
    Route::post('/countdown-banner/store', [CountdownBannerController::class, 'store'])->name('countdown-banner.store');
    Route::get('/countdown-banner/edit/{id}', [CountdownBannerController::class, 'edit'])->name('countdown-banner.edit');
    Route::post('/countdown-banner/update/{id}', [CountdownBannerController::class, 'update'])->name('countdown-banner.update');
    Route::get('/countdown-banner/delete/{id}', [CountdownBannerController::class, 'delete'])->name('countdown-banner.delete');

    Route::get('/admin/all-order', [AdminOrderController::class, 'index'])->name('admin.all-order');
    Route::get('/admin/order-detail/{id}', [AdminOrderController::class, 'orderDetail'])->name('admin.order-detail');
    Route::get('/admin/order-edit/{id}', [AdminOrderController::class, 'edit'])->name('admin.order-edit');
    Route::post('/admin/order-update/{id}', [AdminOrderController::class, 'update'])->name('admin.order-update');
    Route::get('/admin/order-invoice/{id}', [AdminOrderController::class, 'invoice'])->name('admin.order-invoice');
    Route::get('/admin/download-invoice/{id}', [AdminOrderController::class, 'downloadInvoice'])->name('admin.download-invoice');
    Route::get('/admin/order-delete/{id}', [AdminOrderController::class, 'deleteOrder'])->name('admin.order-delete');
});
