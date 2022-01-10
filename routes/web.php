<?php
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PagesController;
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

 // Route::group(['middleware'=> ['web']], function ()  {

        
      
        Route::get('/contact', [PagesController::class, 'contact']);
        Route::get('/about', [PagesController::class, 'about']);

        Route::post('/videos',[ItemsController::class,'store']);

        Route::get('/videos',[ItemsController::class,'index']);

        Route::get('/videos/create',[ItemsController::class,'create']);

        Route::get('/videos/{id}',[ItemsController::class,'show']);
       
        
     
     //Route::resource('videos', 'ItemsController');
     Route::get('/', [ItemsController::class, 'index']);
     Route::get('/contact', [PagesController::class, 'contact']);
     Route::get('/about', [PagesController::class, 'about']);
    
     Route::get('/logout', 'Auth\LoginController@logout');
     
      
Auth::routes();

//});





