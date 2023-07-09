<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Datasensorcontroller;
use App\Http\Controllers\Sensordatacontroller;
use App\Http\Controllers\Algomcdmcontroller;
// use App\Http\Controllers\Suhutanahcontroller;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Sensorcontroller;

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
    return view('beranda');
});

Route::get('/beranda', [homecontroller::class, 'beranda'])->name('beranda');
Route::get('/dashboard', [homecontroller::class, 'dashboard'])->name('dashboard');
Route::get('/hasil', [Sensordatacontroller::class, 'index'])->name('hasil');
Route::get('/sensordata', [Datasensorcontroller::class, 'index'])->name('data-sensor');
Route::get('/delete/{id_sensor_data}', [Datasensorcontroller::class, 'delete'])->name('delete');
Route::post('/delete/deleteAll', [Datasensorcontroller::class, 'deleteAll'])->name('data-sensor.deleteAll');
// Route::delete('/sensor/{id_sensor_data}', [Datasensorcontroller::class, 'destroy'])->name('sensor.destroy');
// Route::get('/data-sensor/delete-all', 'Datasensorcontroller@deleteAll')->name('delete-all');
Route::get('/hasil', [Algomcdmcontroller::class, 'showresults'])->name('hasil');
Route::get('/grafik', [homecontroller::class, 'grafik'])->name('grafik');



// Route::get('/hasil', [homecontroller::class, 'hasil'])->name('hasil');
// Route::get('/data-sensor', 'Sensorcontroller@index');
// Route::get('/data-sensor', 'homecontroller@index');
// Route::get('/soiltemp', [Suhutanahcontroller::class, 'soiltemp'])->name('data-sensor');

