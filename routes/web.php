<?php

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\CommandeVoitureController;
use App\Http\Controllers\CommandeController as CommandeController_client;
use App\Http\Controllers\Admin\ContactController as ContactController_admin;
use App\Http\Controllers\Admin\CommandeController as CommandeController_admin;

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

Route::get('WelcomeEmail', function(){
    Mail::to("mouhebabderrahim@gmail.com")->send(new SendMail());
    return new SendMail();
}); 
Route::get('home_admin', function(){
    return view('admin.home');

});
Route::get('services', function(){
    if(Auth::user()->grade == "admin"){
        return redirect('home_admin');
    }
    return view('services');
});
Route::resource('contacts', ContactController::class); 

Route::resource('profile', ProfileController::class); 
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::resource('clients', ClientController::class)->only('index', 'destroy');
    Route::resource('catalogues', CatalogueController::class);
    Route::resource('contacts', ContactController_admin::class);
    Route::resource('services', ServiceController::class);
    Route::get('commandes', [CommandeController_admin::class, 'index']);
    Route::get('commandesVoiture', [CommandeController_admin::class, 'voiture']);
    Route::get('commandes/{commande_id}/accepter', [CommandeController_admin::class, 'accepter']);
    Route::get('commandes/{commande_id}/refuser', [CommandeController_admin::class, 'refuser']);
    Route::get('commandes/{commande_id}/accepterVoiture', [CommandeController_admin::class, 'accepterVoiture']);
    Route::get('commandes/{commande_id}/refuserVoiture', [CommandeController_admin::class, 'refuserVoiture']);
});
Route::get('service/{service_id}/commande', [CommandeController_client::class, 'index']);
Route::get('service/{service_id}/commande_voiture', [CommandeController_client::class, 'voiture']);
Route::post('commande', [CommandeController_client::class, 'store']);
Route::get('commandes/{id}/edit', [CommandeController_client::class, 'edit']);
Route::put('commandes/{id}', [CommandeController_client::class, 'update']);

// Commande voiture 

Route::get('commandes_voiture/{id}/edit', [CommandeVoitureController::class, 'edit']);
Route::put('commandes_voiture/{id}', [CommandeVoitureController::class, 'update']);
Route::post('commande_voiture', [CommandeController_client::class, 'storeVoiture']);
Route::get('commandes', [CommandeController_client::class, 'list']);
Route::get('commandes_voitures', [CommandeController_client::class, 'list_voitures']);
Route::get('commande_choisir', [CommandeController_client::class, 'choose']);
Route::get('commandes_voiture', [CommandeController_client::class, 'list']);
Route::post('add_photo', function(Request $request){
    // return $request->image->store('images');
    return $request->date;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
