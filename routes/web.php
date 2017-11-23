<?php

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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

    Route::view('/passport-tokens','passport-tokens');

    Route::view('/home','acacha-forge::home');


});

$server = new stdClass();
$server->name = "name";
$server->forge_id = "15289";
$server->user = "sergiturbadenas";
Route::view('/prova','acacha-forge::server_permission_approved',[ 'server' => $server ]);
