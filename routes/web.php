<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CuponController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Frontend\NewsletterController;
use App\Http\Controllers\Setting\AdminSetiingController;
use App\Models\Frontend\Newsletter;

Route::get('/', function () {
    return view('frontend.index');
});

// Logout Route
Route::get('/logout', [AdminSetiingController::class, 'Logout'])->name('logout');


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
    Route::get('/product/store',[ProductController::class,'ProductStore'])->name('product.store');

    // auto load subcategory route
    Route::get('get/subcategory/{category_id}',[ProductController::class,'GetSubCategory']);



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
