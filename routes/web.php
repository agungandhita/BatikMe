<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\KeranjangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\admin\SizeController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\auth\LoginController;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\BeritaController;
use App\Http\Controllers\admin\FroalaController;
use App\Http\Controllers\admin\ProdukController;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\client\DetailController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboarController;
use App\Http\Controllers\client\DashboardController;
use App\Http\Controllers\ProdukController as Produk;
use App\Http\Controllers\admin\ProdukImageController;
use App\Http\Controllers\admin\BeritaKategoriController;
use App\Http\Controllers\ProdukController as ControllersProdukController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\PemesananController;
use App\Http\Controllers\BeritaController as ControllersBeritaController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/pos', function () {
//     return view('auth.index');
// });
Route::get('/', [DashboardController::class, 'index']);
Route::get('/produk/{id}', [DetailController::class, 'index']);




Route::get('/cek', function () {
    return view('client.berita.index');
});


// Route::get('/tes', action: function () {
// return view('client.profile.index');
// });

// Route::get('/coba', function () {
//     return view('client.home.index');
// });





Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register/akun', [RegisterController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::middleware('admin')->group(function () {

    Route::post('/froala-upload-image', [FroalaController::class, 'uploadImageFroala']);
    Route::post('/froala-delete-image', [FroalaController::class, 'deleteImage']);

    //produk
    Route::get('/admin', [DashboarController::class, 'index']);

    Route::get('/admin/produk', [ProdukController::class, 'index']);
    Route::post('/admin/produk/add', [ProdukController::class, 'store']);
    Route::post('/admin/produk/update/{id}', [ProdukController::class, 'update']);
    Route::post('/admin/produk/delete/{id}', [ProdukController::class, 'destroy']);

    //size and stock
    Route::get('/admin/size/{id}', [SizeController::class, 'create']);
    Route::post('/admin/size/add/{id}', [SizeController::class, 'store']);
    Route::post('/admin/size/update/{id}', [SizeController::class, 'update']);
    Route::post('/admin/size/delete/{id}', [SizeController::class, 'destroy']);

    //produk image update
    Route::post('/admin/produk-image/create/{id}', [ProdukImageController::class, 'store']);
    Route::get('/admin/produk-image/update/{id}', [ProdukImageController::class, 'create']);
    Route::post('/admin/produk-image/update/{id}', [ProdukImageController::class, 'update']);
    Route::post('/admin/produk-image/delete/{id}', [ProdukImageController::class, 'destroy']);

    //kategori
    Route::get('/admin/kategori', [CategoryController::class, 'index']);
    Route::post('/produk/kategori/add', [CategoryController::class, 'store']);
    Route::post('/produk/kategori/update/{id}', [CategoryController::class, 'update']);
    Route::post('/produk/kategori/delete/{id}', [CategoryController::class, 'destroy']);

    //user
    Route::get('/profile', [UserController::class, 'index']);
    Route::post('/profile/create', [UserController::class, 'store']);
    Route::post('/profile/update/{id}', [UserController::class, 'update']);
    Route::post('/profile/delete/{id}', [UserController::class, 'destroy']);

    //about
    Route::get('/about', [AboutController::class, 'index']);
    Route::post('/about/create', [AboutController::class, 'store']);
    Route::post('/about/create/update/{id}', [AboutController::class, 'update']);
    Route::post('/about/delete/{id}', [AboutController::class, 'destroy']);

    Route::get('/team', [TeamController::class, 'index']);
    Route::post('/team/create', [TeamController::class, 'store']);
    Route::post('/team/create/update/{id}', [TeamController::class, 'update']);
    Route::post('/team/delete/{id}', [TeamController::class, 'destroy']);

    //berita
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::get('/berita/tambah', [BeritaController::class, 'create']);
    Route::post('/berita/tambah/add', [BeritaController::class, 'store']);
    Route::get('/admin/berita/edit/{id}', [BeritaController::class, 'edit']);
    Route::post('/admin/berita/update/{id}', [BeritaController::class, 'update']);
    Route::post('/admin/berita/delete/{id}', [BeritaController::class, 'destroy']);
    Route::get('/admin/berita/read/{id}', [BeritaController::class, 'read']);

    // dashboard
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index']);
    Route::post('/admin/post', [AdminDashboardController::class, 'store']);
    Route::post('/admin/update/{id}', [AdminDashboardController::class, 'update']);

    //gambar produk
    Route::get('/gambar/produk', [ProdukImageController::class, 'index']);

    // data penjualan
    Route::get('/data-pesanan', [PemesananController::class, 'index']);


    // pembayaran dan kelola pesanan
    Route::get('/pembayaran', [PemesananController::class, 'pembayaran']);
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'index']);

    Route::get('/blog/{id}', [ControllersBeritaController::class, 'index']);


    Route::get('/produks', [ClientProdukController::class, 'index']);
    Route::get('/produks/detail/{id}', [ClientProdukController::class, 'detail']);

    // user
    Route::get('/user', [ProfileController::class, 'index']);
    Route::post('/user/update/{id}', [ProfileController::class, 'update']);
    Route::get('/user/pesanan', [ProfileController::class, 'bayar']);


    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::get('/detail-pesanan/{id}', [DetailController::class, 'detailPesanan']);
    Route::post('pesanan/bayar/{id}', [DetailController::class, 'payment'])->name('bayar');
});


Route::get('/home', [DashboardController::class, 'index']);

Route::get('/produks', [ClientProdukController::class, 'index']);
Route::get('/tentang', [AboutUsController::class, 'index']);
Route::get('/produks/detail/{id}', [ClientProdukController::class, 'detail']);


Route::get('/blog/{id}', [ControllersBeritaController::class, 'index']);

Route::post('callback/xendit',[DetailController::class, 'callback']);
