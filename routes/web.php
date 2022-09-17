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
Route::get('/admin/job_openings/create', 'App\Http\Controllers\Admin\AdminJobOpeningsController@create')->name("admin.job_openings.create");
Route::post('/admin/job_openings/store', 'App\Http\Controllers\Admin\AdminJobOpeningsController@store')->name("admin.job_openings.store");
Route::post('/admin/job_openings/{id}/delete', 'App\Http\Controllers\Admin\AdminJobOpeningsController@delete')->name("admin.job_openings.delete");
Route::get('/admin/job_openings/{id}/edit', 'App\Http\Controllers\Admin\AdminJobOpeningsController@edit')->name("admin.job_openings.edit");
Route::post('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminJobOpeningsController@update')->name("admin.job_openings.update");

Route::get('/managers', 'App\Http\Controllers\ManagersController@index')->name("managers.index");

Route::get('/admin/managers', 'App\Http\Controllers\Admin\AdminManagersController@index')->name("admin.managers.index");
Route::post('/admin/managers/store', 'App\Http\Controllers\Admin\AdminManagersController@store')->name("admin.managers.store");
Route::post('/admin/managers/{id}/delete', 'App\Http\Controllers\Admin\AdminManagersController@delete')->name("admin.managers.delete");
Route::get('/admin/managers/{id}/edit', 'App\Http\Controllers\Admin\AdminManagersController@edit')->name("admin.managers.edit");
Route::post('/admin/managers/{id}/update', 'App\Http\Controllers\Admin\AdminManagersController@update')->name("admin.managers.update");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();


Auth::routes();
