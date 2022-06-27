<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\ProductController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/', [UserController::class, 'index'])->name('homepage');

Route::get('/welcome', function(){
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', [UserController::class, 'test']);

Route::get('/checkout', [ProductController::class, 'kupi'])->name('checkout');
Route::get('/checkout/pdf', function(){
    return view('pages.pdf');});

/*
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('login/check', [LoginController::class, 'login_check'])->name('check');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
*/
/*
Route::get('/cms', [CmsController::class, 'index'])->middleware('auth');
*/
Route::post('upload', [CmsController::class, 'upload']);

/*
Route::middleware('auth')->group(function(){
    Route::get('/cms', [CmsController::class, 'index']);
    Route::post('upload', [CmsController::class, 'upload']);
});
*/


Route::get('/{id}', [ProductController::class, 'dodaj']);
Route::patch('update-cart', [ProductController::class, 'update']);
Route::delete('remove-from-cart', [ProductController::class, 'remove']);
Route::get('details/{id}', [ProductController::class, 'product']);
Route::post('details/dodaj/{id}', [ProductController::class, 'dodaj'])->name('view.add');


