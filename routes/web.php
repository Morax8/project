<?php

use App\Policies\GalleryPolicy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KerjasamaController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DescriptionController;

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
//Page UTAMA
Route::get('/', [HomeController::class, 'index',]);
Route::get('/contact', function () {
    return view('home.contact', [
        "title" => "Contact"
    ]);
});
Route::post('/contact', [ContactFormController::class, 'submitForm'])->name('contact.submit');

//gallery
Route::get('/gallery', [GalleryController::class, 'show']);

//kegiatan
Route::get('/keg', [KegiatanController::class, 'Index']);


//profile
Route::get('/sejarah', [ProfileController::class, 'sejarah']);
Route::get('/visimisi', [ProfileController::class, 'visimisi']);
Route::get('/logo', [ProfileController::class, 'logo']);


//jurusan
Route::get('/tsm', [JurusanController::class, 'indexTsm']);
Route::get('/tm', [JurusanController::class, 'indexTm']);
Route::get('/tip', [JurusanController::class, 'indexTip']);
Route::get('/tp', [JurusanController::class, 'indexTp']);


//fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'fasIndex']);
Route::get('/sarana', [FasilitasController::class, 'saranaIndex']);
Route::get('/prasarana', [FasilitasController::class, 'prasaranaIndex']);
Route::get('/lab', [FasilitasController::class, 'labIndex']);
Route::get('/perpus', [FasilitasController::class, 'perpusIndex']);

//news
Route::get('/news', [PostController::class, 'index',]);
Route::get('/news/{post:slug}', [PostController::class, 'show',]);


//kerjasama
Route::get('/kerjasama', [KerjasamaController::class, 'Index']);


//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);




//CMS
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
//sliders
Route::resource('sliders', SlideController::class)->middleware('auth');
Route::put('/sliders/{id}', 'SlideController@update');
//newsCMS
Route::put('/postscms/{post}', 'App\Http\Controllers\PostController@update');
Route::resource('postscms', PostController::class)->except(['index', 'destroy'])->middleware('auth');
Route::get('/postscms', [PostController::class, 'cmsIndex'])->name('postscms.cmsIndex');
Route::delete('/postscms/{post}', [PostController::class, 'destroy'])->name('postscms.destroy');

//jurusanCMS
// For index page of each type
Route::get('/tsmcms', [JurusanController::class, 'tsm'])->name('tsm.index');
Route::get('/tipcms', [JurusanController::class, 'tip'])->name('tip.index');
Route::get('/tpcms', [JurusanController::class, 'tp'])->name('tp.index');
Route::get('/tmcms', [JurusanController::class, 'tm'])->name('tm.index');
// For edit page of each type
Route::get('/tsm/edit/{id}', [JurusanController::class, 'editTsm'])->name('tsm.edit');
Route::get('/tip/edit/{id}', [JurusanController::class, 'editTip'])->name('tip.edit');
Route::get('/tp/edit/{id}', [JurusanController::class, 'editTp'])->name('tp.edit');
Route::get('/tm/edit/{id}', [JurusanController::class, 'editTm'])->name('tm.edit');
//update
Route::match(['PUT', 'PATCH'], '/jurusan/{type}/update/{id}', 'App\Http\Controllers\JurusanController@update')->name('jurusan.update');

//profileCMS
// For index page of each type
Route::get('/sejcms', [ProfileController::class, 'Indexsejarah'])->name('sejarah.index');
Route::get('/vmcms', [ProfileController::class, 'Indexvisimisi'])->name('visimisi.index');
Route::get('/logocms', [ProfileController::class, 'Indexlogo'])->name('logo.index');
//For edit page of each type
Route::get('/sejarah/edit/{id}', [ProfileController::class, 'sejarahEdit'])->name('sejarah.edit');
Route::get('/visimisi/edit/{id}', [ProfileController::class, 'visimisiEdit'])->name('visimisi.edit');
Route::get('/logo/edit/{id}', [ProfileController::class, 'logoEdit'])->name('logo.edit');
//update
Route::match(['PUT', 'PATCH'], '/profile/{type}/update/{id}', 'App\Http\Controllers\ProfileController@update')->name('profile.update');

//Gallery CMS
//index for each type
Route::get('/gallery/type/{type}', [GalleryController::class, 'cmsIndex'])->name('gallery.cmsIndex');
//edit
Route::get('/gallery/{type}/edit/{id}', 'App\Http\Controllers\GalleryController@edit')->name('gallery.edit');
//create
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
//update
Route::match(['PUT', 'PATCH'], '/gallery/{type}/update/{id}', 'App\Http\Controllers\GalleryController@update')->name('gallery.update');
//store
Route::post('/gallery/store', 'App\Http\Controllers\GalleryController@store')->name('gallery.store');
Route::delete('/gallery/{type}/{id}', 'App\Http\Controllers\GalleryController@destroy')->name('gallery.destroy');


//Fasilitas CMS
//index for each type
Route::get('/fascms', [FasilitasController::class, 'fascms'])->name('fasilitas.index');
Route::get('/sarcms', [FasilitasController::class, 'sarcms'])->name('sarana.index');
Route::get('/prascms', [FasilitasController::class, 'prascms'])->name('prasarana.index');
Route::get('/perpuscms', [FasilitasController::class, 'perpuscms'])->name('perpus.index');
Route::get('/labcms', [FasilitasController::class, 'labcms'])->name('lab.index');
//edit for each type
Route::get('/fas/edit/{id}', [FasilitasController::class, 'fasEdit'])->name('fas.edit');
Route::get('/sar/edit/{id}', [FasilitasController::class, 'sarEdit'])->name('sarana.edit');
Route::get('/pra/edit/{id}', [FasilitasController::class, 'praEdit'])->name('pras.edit');
Route::get('/per/edit/{id}', [FasilitasController::class, 'perEdit'])->name('perpus.edit');
Route::get('/lab/edit/{id}', [FasilitasController::class, 'labEdit'])->name('lab.edit');
//update
Route::match(['PUT', 'PATCH'], '/fasilitas/{type}/update/{id}', 'App\Http\Controllers\FasilitasController@update')->name('fasilitas.update');


//kerjasamaCMS
//index
Route::get('/kscms', [KerjasamaController::class, 'cmsIndex'])->name('kerjasama.index');
//edit
Route::get('/kerjasama/edit/{id}', [KerjasamaController::class, 'cmsEdit'])->name('kerjasama.edit');
//update
Route::match(['PUT', 'PATCH'], '/kerjasama/update/{id}', 'App\Http\Controllers\KerjasamaController@update')->name('kerjasama.update');

//footer
Route::get('/footercms', [FooterController::class, 'cmsIndex'])->name('footer.index');
Route::get('/footer/edit/', [FooterController::class, 'edit'])->name('footer.edit');
Route::put('/footer/update', [FooterController::class, 'update'])->name('footer.update');
//desc cms
Route::get('/desc', [DescriptionController::class, 'descIndex'])->name('desc.index');
Route::get('/desc/edit/', [DescriptionController::class, 'edit'])->name('desc.edit');
Route::put('/desc/update', [DescriptionController::class, 'update'])->name('desc.update');

//kegiatanCMS
Route::get('/kegcms', [kegiatanController::class, 'show'])->name('kegiatan.show');
Route::get('/kegcms/edit/', [kegiatanController::class, 'edit'])->name('kegiatan.edit');
Route::put('/kegcms/update', [kegiatanController::class, 'update'])->name('kegiatan.update');
