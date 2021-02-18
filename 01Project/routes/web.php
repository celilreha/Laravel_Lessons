<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\ValidationDersi;
use App\Http\Middleware\kotuKelime;

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


Route::view("/","welcome");

Route::get("/kayit",[ValidationDersi::class,"index"]);
Route::post("/kayit-ol",[ValidationDersi::class,"post"])->middleware("kotu")->name("kayit.post");
/*
Route::get("/iletisim",[App::class,"iletisim"]);
Route::post("/iletisim/post",[App::class,"post"])->name("iletisim.post");

Route::get('/', [App::class,"index"]);
Route::get('/anasayfa', [Deneme::class,"index"]);
Route::get('/kitap/{slug}/{yil?}/{yazar?}',[Deneme::class,"kitap"]);//soru işareti ile kullanıldığında olmasa da olur demek
//Route::get("/yas/{year}",function ($age){
//    return date('Y')-$age." yaşındasınız";
//})->where('year',"[0-9]+");
Route::get('/uye/{ad}/{yas?}',function ($ad,$yas=null){
    return "Merhaba ".$ad.". Yaşınız: ".$yas;
})->where(["ad"=>"[a-zA-Z]+","yas"=>"[0-9]+"]);//parametrenin nasıl bir parametre olacağını bildirmek için bu şekilde kullanılabilir.

Route::view("welcome","welcome");//view döndürülecekse bu şekilde kullanılabilir.
Route::view("/profilim","pages.iletisim",["ad"=>"celil"]);//view içerisine parametre ekleme

Route::prefix("elektronik")->group(function (){//elektronik'ten sonra olacak sayfalamaları grup içinde de tanımlayabiliriz.
    Route::get("telefon",function (){ return "telefon";});
    Route::get("laptop",function (){ return "laptop";});
    Route::get("kamera",function (){ return "kamera";});
});
*/
