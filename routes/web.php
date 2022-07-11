<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CuponController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\WishlistController;
use App\Http\Controllers\Frontend\NewsletterController;
use App\Http\Controllers\Setting\AdminSetiingController;
use App\Http\Controllers\UserBackend\IndexController;
use App\Models\Admin\Wishlist;
use App\Models\Frontend\Newsletter;

Route::get('/', function () {
    return view('frontend.index');
});

// User Profile all Route
Route::get('/password/change',[IndexController::class,'UserPassChange'])->name('userpassword.change');
Route::post('/password/update',[IndexController::class,'UserPassUpdate'])->name('userpassword.update');

// Wishlist all Route
Route::get('/wishlist/add/{id}',[WishlistController::class,'WishlistAdd'])->name('wishlist.add');

// Logout Route
Route::get('/logout', [AdminSetiingController::class, 'Logout'])->name('logout');

// Admin group all route
Route::prefix('admin')->group(function () {

    // Reset password for admin route
    Route::get('/password/change', [AdminSetiingController::class, 'ChangePassword'])->name('admin.password.change');
    Route::post('/password/update/', [AdminSetiingController::class, 'ChangePassStore'])->name('admin.password.update');

    // Category all route
    Route::get('/category/view', [CategoryController::class, 'CategoryView'])->name('category.view');
    Route::post('/category/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');

    // Sub Category all route
    Route::get('/subcategory/view',[SubCategoryController::class,'SubCategoryView'])->name('subcategory.view');
    Route::post('/subcategory/store',[SubCategoryController::class,'SubCategoryStore'])->name('subcategory.store');
    Route::get('/subcategory/edit/{id}',[SubCategoryController::class,'SubCategoryEdit'])->name('subcategory.edit');
    Route::post('/subcategory/update/{id}',[SubCategoryController::class,'SubCategoryUpdate'])->name('subcategory.update');
    Route::get('/subcategory/delete/{id}',[SubCategoryController::class,'SubCategoryDelete'])->name('subcategory.delete');


//    Brand all route
    Route::get('/brand/view',[BrandController::class,'BrandView'])->name('brand.view');
    Route::post('/brand/store',[BrandController::class,'BrandStore'])->name('brand.store');
    Route::get('/brand/edit/{id}',[BrandController::class,'BrandEdit'])->name('brand.edit');
    Route::post('/brand/update/{id}',[BrandController::class,'BrandUpdate'])->name('brand.update');
    Route::get('/brand/delete/{id}',[BrandController::class,'BrandUDelete'])->name('brand.delete');

    // Cupon all route
    Route::get('/cupon/view',[CuponController::class,'CuponView'])->name('cupon.view');
    Route::post('/cupon/store',[CuponController::class,'CuponStore'])->name('cupon.store');
    Route::get('/cupon/edit/{id}',[CuponController::class,'CuponEdit'])->name('cupon.edit');
    Route::post('/cupon/update/{id}',[CuponController::class,'CuponUpdate'])->name('cupon.update');
    Route::get('/cupon/delete/{id}',[CuponController::class,'CuponDelete'])->name('cupon.delete');


    // Newsletter all route
    Route::get('/newsletter/view',[NewsletterController::class,'NewsLetterView'])->name('newsletter.view');
    Route::post('/newsletter/store',[NewsletterController::class,'NewsletterStore'])->name('newsletter.store');
    Route::get('/newsletter/delete/{id}',[NewsletterController::class,'NewsletterDelete'])->name('newsletter.delete');

    // Product all route
    Route::get('/product/view',[ProductController::class,'ProductView'])->name('product.view');
    Route::get('/product/add',[ProductController::class,'ProductAdd'])->name('product.add');
    Route::post('/product/store',[ProductController::class,'ProductStore'])->name('product.store');
    Route::get('/product/delete/{id}',[ProductController::class,'ProductDelete'])->name('product.delete');
    Route::get('/product/details/{id}',[ProductController::class,'ProductDetails'])->name('product.details');
    Route::get('/product/edit/{id}',[ProductController::class,'ProductEdit'])->name('product.edit');
    Route::post('/product/update/{id}',[ProductController::class,'ProductUpdate'])->name('product.update');


    // auto load subcategory route
    Route::get('/get/subcategory/{category_id}',[ProductController::class,'GetSubCategory']);

    // Product active inactive all Route
    Route::get('/product/inactive/{id}',[ProductController::class,'ProductInactive'])->name('product.inactive');
    Route::get('/product/active/{id}',[ProductController::class,'ProductActive'])->name('product.active');

    // post category all Route
    Route::get('/post/category',[PostController::class,'PostCategoryView'])->name('postcategory.view');
    Route::post('/post/category/store',[PostController::class,'PostCategoryStore'])->name('postcategory.store');
    Route::get('/post/category/edit/{id}',[PostController::class,'PostCategoryEdit'])->name('postcategory.edit');
    Route::post('/post/category/update/{id}',[PostController::class,'PostCategoryUpdate'])->name('postcategory.update');
    Route::get('/post/category/delete/{id}',[PostController::class,'PostCategoryDelete'])->name('postcategory.delete');

    // Blog all route
    Route::get('/blog/view',[PostController::class,'BlogView'])->name('blog.view');
    Route::get('/blog/add',[PostController::class,'BlogAdd'])->name('blog.add');
    Route::post('/blog/store',[PostController::class,'BlogStore'])->name('blog.store');
    Route::get('/blog/edit/{id}',[PostController::class,'BlogEdit'])->name('blog.edit');
    Route::post('/blog/update/{id}',[PostController::class,'BlogUpdate'])->name('blog.update');
    Route::get('/blog/delete/{id}',[PostController::class,'BlogDelete'])->name('blog.delete');



});



























































Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});


Route::middleware(['auth:sanctum,web', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
