<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/job_openings', 'App\Http\Controllers\JobOpeningsController@index')->name("job_openings.index");
Route::get('/job_openings/show/{id}', 'App\Http\Controllers\JobOpeningsController@show')->name("job_openings.show");
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/job_openings', 'App\Http\Controllers\Admin\AdminJobOpeningsController@index')->name("admin.job_openings.index");
Route::post('/admin/job_openings/store', 'App\Http\Controllers\Admin\AdminJobOpeningsController@store')->name("admin.job_openings.store");

Route::get('/managers', 'App\Http\Controllers\ManagersController@index')->name("managers.index");
Route::get('/admin/managers', 'App\Http\Controllers\Admin\AdminManagersController@index')->name("admin.managers.index");
Route::post('/admin/managers/store', 'App\Http\Controllers\Admin\AdminManagersController@store')->name("admin.managers.store");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
