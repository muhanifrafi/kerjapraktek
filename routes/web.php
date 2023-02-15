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

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('TmgeneralPackage', 'TmgeneralPackageController@index');


Route::get('certificate', 'CertificateController@index')
    ->name('layouts.certificate.certificate');

Route::get('fleet', 'FleetController@index')
    ->name('layouts.status.fleet');

Route::get('project', 'ProjectController@index')
    ->name('layouts.status.project');


Route::get('customer', 'CustomerController@index')
    ->name('layouts.customer.customer');


Route::get('statisfaction', 'StatisfactionController@index')
    ->name('layouts.customer.statisfaction');    


Route::get('gallery', 'GalleryController@index')
    ->name('layouts.topbar.gallery');      

Route::get('sb_index', 'ServiceBulletinController@index')
    ->name('layouts.services.sb');    

Route::get('loap_index', 'LoapIndexController@index')
    ->name('layouts.services.loap');    

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        route::get('/', 'DashboardController@index')
            ->name('dashboard');
    });
