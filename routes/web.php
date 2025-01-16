<?php

use Psy\Command\EditCommand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\CustomizeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FixRuningController;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\tambahmodulController;
use App\Http\Controllers\gantipasswordController;
use App\Http\Controllers\JadwalwebinarController;
use App\Http\Controllers\JadwalcustomizeController;
use App\Http\Controllers\JadwalfixruningController;
use App\Http\Controllers\tambahsertifikatController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postLogin', [AuthController::class, 'postlogin'])->name('postLogin');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', function () {
    Auth::logout(); 
    return redirect('/'); 
})->name('logout');
Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
// User
Route::group(['middleware' => 'admin'], function () {
    Route::get('/pengguna', [PenggunaController::class, 'index'])->name('Pengguna');
    
});
// ini bagian Program
Route::group(['middleware' => ['auth']], function () {
    Route::get('/program', [ProgramController::class, 'index'])->name('Program');
    Route::get('/Program', [ProgramController::class, 'index'])->middleware('auth');
});
Route::group(['middleware' => ['admin']], function () {
    // Program
    Route::get('/edit/{id}', [ProgramController::class, 'edit'])->name('auth.tambah_jadwal.edit');
    Route::get('tambah_jadwal', [ProgramController::class, 'tambahjadwal'])->name('auth.tambah_jadwal');
    Route::post('tambah_jadwal', [ProgramController::class, 'simpan'])->name('auth.tambah_jadwal.simpan');
    Route::post('edit/{id}', [ProgramController::class, 'update'])->name('auth.tambah_jadwal.update');
    Route::get('hapus/{id}', [ProgramController::class, 'hapus'])->name('auth.hapus');
    Route::delete('hapus/{id}', [ProgramController::class, 'hapus'])->name('auth.tambah_jadwal.hapus');
    // jadwal ke program
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
    Route::post('/jadwal', [JadwalController::class, 'store'])->name('jadwal.create');
    Route::get('/jadwal/{program}/edit', [JadwalController::class, 'edit'])->name('jadwal.edit');
    Route::put('/jadwal/{program}', [JadwalController::class, 'update'])->name('jadwal.update');
});

// ini bagian Webinar
Route::group(['middleware' => ['auth']], function () {
    Route::get('/Webinar', [WebinarController::class, 'index'])->name('Webinar');
});
Route::group(['middleware' => ['admin']], function () {
    // Webinar
    Route::get('/webinar', [WebinarController::class, 'index'])->name('webinar.index');
    Route::get('/webinar/{id}/edit', [WebinarController::class, 'edit'])->name('webinar.edit');
    Route::post('update_webinar/{id}', [WebinarController::class, 'update'])->name('auth.tambah_webinar.update');
    Route::post('tambah_webinar', [WebinarController::class, 'simpan'])->name('auth.tambah_webinar.simpan');
    Route::delete('/webinar_hapus/{id}', [WebinarController::class, 'hapus'])->name('webinar.hapus');
    // jadwal webinar
    Route::get('/jadwalwebinar', [JadwalwebinarController::class, 'index'])->name('webinar.index');
    Route::post('/jadwal/webinar', [JadwalwebinarController::class, 'store'])->name('webinar.jadwal.store');
});

// ini bagian Fix Runing
Route::group(['middleware' => ['auth']], function () {
    Route::get('/FixRuning', [FixRuningController::class, 'index'])->name('FixRuning');
});
Route::group(['middleware' => ['admin']], function () {
    // fix Runing
    Route::get('/fixruning', [FixRuningController::class, 'index'])->name('fixruning.index');
    Route::get('/fixruning/{id}/edit', [FixRuningController::class, 'edit'])->name('fixruning.edit');
    Route::delete('/fixruning_hapus/{id}', [FixruningController::class, 'hapus'])->name('fixruning.hapus');
    Route::post('update_fixruning/{id}', [FixRuningController::class, 'update'])->name('auth.tambah_fixruning.update');
    Route::post('/auth/tambah_fixruning/simpan', [FixRuningController::class, 'simpan'])->name('auth.tambah_fixruning.simpan');
    Route::post('tambah_fixruning', [FixRuningController::class, 'simpan'])->name('auth.tambah_fixruning.simpan');
    // jadwal fix runing
    Route::get('/jadwalfixruning', [JadwalfixruningController::class, 'index'])->name('fixruning.index');
    Route::post('/jadwal/fixruning', [JadwalfixruningController::class, 'store'])->name('fixruning.jadwal.store');
});

//ini bagian Customize
Route::group(['middleware' => ['auth']], function () {
    Route::get('/Customize', [CustomizeController::class, 'index'])->name('Customize');
});
Route::group(['middleware' => ['admin']], function () {
    // customize
    Route::get('/edit/{id}', [CustomizeController::class, 'edit'])->name('auth.tambah_customize.edit');
    Route::post('edit_customize/{id}', [CustomizeController::class, 'update'])->name('auth.tambah_customize.update');
    Route::delete('/customize_hapus/{id}', [CustomizeController::class, 'hapus'])->name('customize.hapus');
    Route::post('tambah_customize', [CustomizeController::class, 'simpan'])->name('auth.tambah_customize.simpan');
    Route::match(['GET', 'DELETE'], '/customize_hapus/{id}', [CustomizeController::class, 'hapus'])->name('customize.hapus'); 
    // jadwal customize
    Route::get('/jadwalcustomize', [JadwalcustomizeController::class, 'index'])->name('customize.index');
    Route::post('/jadwal/customize', [JadwalcustomizeController::class, 'store'])->name('customize.jadwal.store'); 
});

// ini bagian Modul
Route::group(['middleware' => ['auth']], function () {
    // Modul
    Route::get('/Modul', [ModulController::class, 'index'])->name('Modul');
});
Route::group(['middleware' => ['admin']], function () {
    // tambah modul
    Route::get('/tambahmodul', [tambahmodulController::class, 'index'])->name('tambah.modul.index');
    Route::post('/moduls/upload', [ModulController::class, 'upload'])->name('moduls.upload'); 
    Route::delete('/modul/delete/{id}', [ModulController::class, 'destroy'])->name('modul.delete');
    Route::post('tambah_fixruning', [ModulController::class, 'simpan'])->name('auth.tambah.tambah_modul.simpan');
});
// ini bagian Sertifikat //
Route::group(['middleware' => ['auth']], function () {
    // Sertifikat
    Route::get('/Sertifikat', [SertifikatController::class, 'index'])->name('Sertifikat');
});
Route::group(['middleware' => ['admin']], function () {
    // tambah Sertifikat //
    Route::post('/sertifikats/upload', [SertifikatController::class, 'upload'])->name('sertifikats.upload'); 
    Route::get('/tambahsertifikat', [tambahsertifikatController::class, 'index'])->name('tambah.sertifikat.index');
    Route::delete('/sertifikat/delete/{id}', [SertifikatController::class, 'destroy'])->name('sertifikat.delete');
});

Route::group(['middleware' => ['admin']], function () {
    //dropdown Tanggal
    Route::get('/tanggal-form', [DateController::class, 'showForm'])->name('tanggal.form');
    Route::post('/update-tanggal', [DateController::class, 'updateTanggal'])->name('updateTanggal');
    Route::post('/delete-tanggal', [DateController::class, 'deleteTanggal'])->name('deleteTanggal');
    // dorpdown instruktur
    Route::post('/update-instruktur', [InstrukturController::class, 'updateInstruktur']);
    // dropdown souvenir
    Route::post('/update-souvenir', [SouvenirController::class, 'updateSouvenir']);
    Route::get('/souvenir-form', [SouvenirController::class, 'showForm']);
});


// profile
Route::get('/Profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->middleware('auth')->name('edit_profile.index');
Route::post('/profile/update', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');





Route::delete('/tambah-jadwal/{id}', [ProgramController::class, 'hapus'])->name('auth.tambah_jadwal.hapus');
Route::get('/notifications/{id}/read', [JadwalController::class, 'markAsRead'])->name('notifications.read');




























// ganti password
Route::get('/gantipassword', [gantipasswordController::class, 'index'])->name('gantipassword');
Route::get('/gantipassword', [gantipasswordController::class, 'update'])->name('change-password.update');

























// edit profile




// percobaan
















