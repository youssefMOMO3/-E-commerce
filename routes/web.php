<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashbord as Admin;
use App\Http\Controllers\Client\ClientController as Client;
use App\Http\Controllers\Product\productController;
use App\Http\Controllers\comptes\ComptesControler;

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

Route::get('/', function () {
    return view('index');
});
//=========================== START ORDERS ROUTE ============================================//
Route::controller(\App\Http\Controllers\commande\commande::class)->name('Commond.')->prefix('Commond')
    ->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/statuscomend', 'index')->name('statuscomend');
        Route::get('/livree', 'captenlog')->name('livree');
        Route::get('/softDelet', 'softDelet')->name('softDelet');
        Route::get('{id}/delete', 'destroy')->name('delete');

        Route::get('{id}/Forcedestroy', 'Forcedestroy')->name('Forcedestroy');
        Route::get('{id}/rolleback', 'rolleback')->name('rolleback');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::post('{id}/update', 'update')->name('update');
        Route::get('{id}/display', 'display')->name('display');
    });
//=========================== END  ORDERS ROUTE ============================================//


//=========================== START Admin dashboards ROUTE ============================================//
Route::controller(Admin::class)
    ->prefix("/admin")
    ->name("admin.")
    ->middleware(["auth","user-role:admin"])
    ->group(function () {
        Route::get("/dashbord","index")->name("index");
        Route::get("/myProfile","profile")->name("profile");
        Route::get("/myProfile/edite","edite")->name("profile.edite");
        Route::post("/myProfile","store")->name("profile.store");
        Route::get('/listC','listclient')->name('list');
        Route::get('/serarchclient','serchclinet')->name('sClient');
        Route::get('/listnoir/{id}','listnoir')->name('listnoir');
        Route::get('/listnC','listnC')->name('listnoirC');
        Route::get('/searchC','clientlistnoir')->name('listnoirse');
        Route::get('deletelist/{id}','listC')->name('listblanch');
        Route::get('message','getmessage')->name('message');
        Route::get('toutmessage','toutmessage')->name('toutmessage');
        Route::get('/clientDetails/{id}', 'clientDetails')->name('clientDetails');
      
    });
//=========================== END Admin dashboards ROUTE ============================================//


//=========================== START Client dashboards ROUTE ============================================//
Route::controller(\App\Http\Controllers\ClientSide::class)->prefix("/client")->name("client.")->group(function () {
        Route::get("/dashbord","product")->name("index");
        Route::post('contact','message')->name('contact-nous');
        Route::get('/voirPlus/{id}',"voirProduit")->name("produits");
        Route::get('/rechercher','rechercher')->name("rechercher");
        Route::get('/card','card_data')->name('card')->middleware(["auth","user-role:client,admin"]);
        Route::get('/supprimer/{id}','deleteitem')->name('delete')->middleware(["auth","user-role:client,admin"]);
        Route::get('/modifer/{id}','modifyItem')->name('modifer')->middleware(["auth","user-role:client,admin"]);
        Route::post('/confirme','confirme')->name('confirme')->middleware(["auth","user-role:client,admin"]);
        Route::get('/moncommande','consult')->name('monCmd')->middleware(["auth","user-role:client,admin"]);
        Route::get('/suivicmd',"showcmd")->name('showcmd')->middleware(["auth","user-role:client,admin"]);
        Route::get('/moncard','show')->name('show')->middleware(["auth","user-role:client,admin"]);
        Route::get('/ristorique','recherchehis')->name('historiqueserch')->middleware(["auth","user-role:client,admin"]);
        Route::get('/rechercheCMD','recherchecmd')->name('cmdsearch')->middleware(["auth","user-role:client,admin"]);
        Route::get('/historiqueCMD','historiquecmd')->name('historique')->middleware(["auth","user-role:client,admin"]);
        Route::post('/addcart/{id}','addcart')->name('addcart')->middleware(["auth","user-role:client,admin"]);
        Route::post('/update/{id}','updateItem')->name('updateitem')->middleware(["auth","user-role:client,admin"]);

    });
//=========================== END Client dashboards ROUTE ============================================//

Route::controller(Client::class)
    ->prefix("/client")
    ->name("client.")
    ->group(function () {
        Route::get("/dashbord","index")->name("index");
        Route::get("/myProfile","profile")->name("profile")->middleware(["auth","user-role:client,admin"]);
    });

//=========================== START  Comptes ROUTE ============================================//

Route::name('comptes.')
    ->prefix('comptes')
    ->controller(ComptesControler::class)
    ->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/listnoire','listnoire')->name("listnoire");
        Route::get('/{id}/delete', 'delete')->name('delete');
        Route::get('/create/compte', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}/update', 'update')->name('update');
        Route::post('/{id}/update', 'storeup')->name('storeup');

    });




//=========================== END  Comptes ROUTE ============================================//
//=========================== START  Produits ROUTE ============================================//

Route::name('Produits.')->prefix('Produits')->controller(productController::class)
    ->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/softDelet', 'softDelet')->name('softDelet');
        Route::get('{id}/delete', 'destroy')->name('delete');
        Route::get('{id}/Forcedestroy', 'Forcedestroy')->name('Forcedestroy');
        Route::get('{id}/rolleback', 'rolleback')->name('rolleback');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::post('{id}/update', 'update')->name('update');
        Route::get('{id}/display', 'display')->name('display');
});


//=========================== END  Produits ROUTE ============================================//




//=========================== START  Auth ROUTE ============================================//

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//=========================== END  Auth ROUTE ============================================//
