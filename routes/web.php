<?php



use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;

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



Route::get('/',[MainController::class,'home'] );
    



 Route::get('/articles', [ MainController::class,'index'])->name('articles');
 Route::get('/articles/{id}', [ MainController::class,'show'])->name('article');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/articles',[ArticleController::class,'index'])->Middleware('admin')->name('articles.index');
Route::get('/admin/articles/create',[ArticleController::class,'create'])->Middleware('admin')->name('articles.create');
Route::post('/admin/articles/store',[ArticleController::class,'store'])->Middleware('admin')->name('articles.store');
Route::delete('/admin/articles/{article}/destroy',[ArticleController::class,'destroy'])->Middleware('admin')->name('articles.destroy');
Route::get('/admin/articles/{article}/edit',[ArticleController::class,'edit'])->Middleware('admin')->name('articles.edit');
Route::put('/admin/articles/{id}/update',[ArticleController::class,'update'])->Middleware('admin')->name('articles.update');

Route::get('/send-email',[MailController::class,'SendMail']);