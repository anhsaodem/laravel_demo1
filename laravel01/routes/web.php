<?php

use App\Http\Controllers\Admin\UseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\HomeController;
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


//admin
//admin/products
//admin//posts
//admin//users
//admin//users/add
//admin//users/edit/{id}
//admin//users/delete/{id}

// Route::prefix('/admin')->name('admin.')->group(function () {
//     Route::get('/', function () {
//         return '<h1>Dashboard</h1>';
//     })->name('dashboard');
//     Route::get('/products', function () {
//         return '<h1>Products</h1>';
//     })->name('products');
//     Route::get('/posts', function () {
//         return '<h1>Posts</h1>';
//     })->name('posts');
//     Route::prefix('/users')->middleware(['role','test'])->name('users.')->group(function () {
//         Route::get('/', function () {
//             return '<h1>Users list</h1>';
//         })->name('index');
//         Route::get('/add', function ($id) {
//             return '<h1>Add user ' . $id . '</h1>';
//         })->name('add');
//         Route::get('/edit/{id}', function ($id) {
//             return '<h1>Edit user ' . $id . '</h1>';
//         })->name('edit');
//         Route::get('/delete/{id}', function ($id) {
//             return '<h1>Delete user ' . $id . '</h1>';
//         })->name('delete');
//     });
// });


// Route::get('/san-pham/{slug}-{id}.html', function ($slug, $id) {
//     return '<h1>san pham: ' . $slug . '-' . $id . '</h1>';
// })->where([
//     'slug' => '.+',
//     'id' => '\d+'
// ]);

// Route::get('san-pham/{id?}', function ($id = 0) { //Khoong bat buoc gia tri cua id
//     return '<h1> San pham ' . $id . '</h1>';
// });

// Route::get('/show', function () {
//     // return route('dashboard');
//     echo '<br/>';
//     echo route('admin.dashboard') . '<br/>';
//     echo route('admin.products') . '<br/>';
//     echo route('admin.posts') . '<br/>';
//     echo route('admin.users.index') . '<br/>';
//     echo route('admin.users.add') . '<br/>';
//     echo route('admin.users.edit', ['id' => 1]) . '<br/>';
// })->middleware('test');

// Route::get('/',[HomeController::class,'index']);

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
});
