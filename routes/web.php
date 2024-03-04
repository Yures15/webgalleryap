<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\PostinganController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [AuthController::class, 'register']);

Route::post('/registered', [AuthController::class, 'registered']);
Route::get('/login', function(){
    return view('login');
})->name('login');

Route::middleware('auth')->group(function(){
    Route::get('/explore', function(){
        $user = auth()->user();
        return view('page.explore', compact('user'));
    });

    Route::get('/getDataExplore', [ExploreController::class, 'getdata']);

    Route::post('/likes', [ExploreController::class, 'likes']);


    Route::get('/upload', [UploadController::class, 'upload']);
    Route::post('/uploadfoto', [UploadController::class, 'uploadfoto']);

    Route::get('/album', [ViewController::class, 'album']);
    Route::post('/buat-album', [AlbumController::class, 'storeAlbum']);
    Route::get('/detailalbum/{id}', [AlbumController::class, 'detail']);
    Route::get('/createalbum', [ViewController::class, 'buatalbum']);
    Route::get('/deletalbum/{id}', [AlbumController::class, 'deletalbum']);
    Route::get('/updateAlbum/{id}', [AlbumController::class, 'updateAlbum']);


    Route::get('/edit/{id}', [ViewController::class, 'editfoto']);
    Route::post('/edit-postingan/{id}', [FotoController::class, 'editpostingan']);
    Route::get('/hapus/{id}', [FotoController::class, 'hapuspostingan']);

    Route::get('/exploredetail/{id}', function () {
        $user = auth()->user();
        return view('page.exploredetail', compact('user'));
    });
    Route::get('/exploredetail/{id}/getdatadetail', [ExploreController::class, 'getdatadetail']);
    Route::get('/ubahpassword', function () {
        $user = auth()->user();
        return view('page.ubahpassword', compact('user'));
    });
    Route::post('/update-password', [ProfilController::class, 'ubahpassword']);

    Route::get('/exploredetail/getKomentar/{id}', [ExploreController::class, 'ambildatakomentar']);
    Route::post('/exploredetail/kirimkomentar', [ExploreController::class, 'kirimkomentar']);
    Route::get('/profil', function () {
        $user = auth()->user();
        return view('page.profil', compact('user'));
    });
    Route::get('/otherpin/{id}', function () {
        $user = auth()->user();
        return view('page.otherpin', compact('user'));
    });
    Route::post('/update', [ProfilController::class,'update']);
    Route::get('/otherpin/getDataPin/{id}', [PinController::class, 'getDataPin']);
    Route::get('/getdataotherpinexplore/', [PinController::class, 'getdata']);

    Route::get('/mypinprofil', function(){
        $user = auth()->user();
        return view('page.mypinprofil', compact('user'));
    });
    Route::get('/dataprofile/', [ProfilController::class, 'getdataprofile']);
    Route::get('/getdataprofile/', [ProfilController::class, 'getdata']);

    Route::get('/logout', [AuthController::class, 'logout']);
});



Route::post('/auth', [AuthController::class, 'auth']);
