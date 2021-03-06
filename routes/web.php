<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::/*middleware('role.admin')->*/get('/', [App\Http\Controllers\SiteController::class, 'index']);



Auth::routes();

Route::get('catalog', [App\Http\Controllers\CatalogController::class, 'index']);

Route::post('/add-to-cart', [App\Http\Controllers\CartController::class, 'add']);



// Route::get('login', [App\Http\Controllers\AutController::class, 'login']);

// Route::post('auth', [App\Http\Controllers\AutController::class, 'auth']);

// Route::get('logout', [App\Http\Controllers\AutController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('admin', [App\Http\Controllers\Admin\AdminController::class, 'dashboard']);

//Article

Route::get('admin/articles', [App\Http\Controllers\Admin\ArticleController::class, 'index'])->name('admin.article.index');

Route::get('admin/articles/create', [App\Http\Controllers\Admin\ArticleController::class, 'create']);

Route::post('admin/articles/store', [App\Http\Controllers\Admin\ArticleController::class, 'store'])->name('admin.store_article');

Route::get('admin/articles/{id}/edit', [App\Http\Controllers\Admin\ArticleController::class, 'edit'])->name('admin.edit_article');

Route::put('admin/articles/edit/{id}/update', [App\Http\Controllers\Admin\ArticleController::class, 'update'])
->name('admin.update_article');

Route::delete('admin/articles/edit/{id}/delete', [App\Http\Controllers\Admin\ArticleController::class, 'delete'])
->name('admin.delete_article');


//Country

// Route::get('admin/countries', [App\Http\Controllers\Admin\CountryController::class, 'index']);

// Route::get('admin/countries/create', [App\Http\Controllers\Admin\CountryController::class, 'create']);

// Route::post('admin/countries/store', [App\Http\Controllers\Admin\CountryController::class, 'store'])->name('admin.store_country');

// Route::get('admin/countries/{country}/edit', [App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('admin.edit_country');

// Route::put('admin/countries/edit/{id}/update', [App\Http\Controllers\Admin\CountryController::class, 'update'])
// ->name('admin.update_country');

// Route::delete('admin/countries/edit/{id}/delete', [App\Http\Controllers\Admin\CountryController::class, 'delete'])
// ->name('admin.delete_country');

// Route::prefix('admin')->name('admin.')->group(function (){
// Route::resource('country', \App\Http\Controllers\Admin\CountryController::class)
// ->except(['show']);
// //names
// });
Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);

Route::resource('product', \App\Http\Controllers\Admin\ProductController::class);



Route::get('converter', [App\Http\Controllers\Api\ConverterController::class, 'index']);
Route::post('converter/result', [App\Http\Controllers\Api\ConverterController::class, 'exchange'])->name('converter.result');

