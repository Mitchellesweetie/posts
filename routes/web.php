<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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


Route::get ('/about',function(){
    return view ('about');
});
Route::get ('/about/{id}',function($id){
    return ('about'.$id);
});
//controllers
// Route::get ('/about',[PageController::class, 'app']);
// Route::get ('/',[PageController::class, 'index']);
// Route::get ('/main',[PageController::class, 'main']);
Route::get('/services',[PageController::class,'services']);

//resources

// Route::resource('posts', 'PostController@post.index');
Route::get('/create-post', [PostController::class, 'create'])->name('createPost');
Route::get('/posts', [PostController::class, 'index'])->name('viewPosts');//->middleware('auth');
Route::post('/store', [PostController::class, 'store'])->name('StorePosts');//->middleware('auth');
Route::get('/show/{id}', [PostController::class, 'show'])->name('showPost');//->middleware('auth');
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('StoreEdit');//->middleware('auth');
Route::get('/update/{id}', [PostController::class, 'update'])->name('StoreUpdate');//->middleware('auth');
Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('Delete');//->middleware('auth');

//login page
Route::get('/',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class,'postLogin'])->name('postLogin');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/postregister',[AuthController::class,'postRegister'])->name('postRegister');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/myposts',[PageController::class,'mydashboard'])->name('mydashboard')->middleware('auth');;



