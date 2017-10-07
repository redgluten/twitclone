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
    return ["Meaning of life", 42];
});

Route::get('/a-propos', function () {
    return 'Ce clone de Twitter vous est proposé par Laravel et Open School Design';
});

Route::get('/contact', function () {
    return 'Écrivez nous à exemple@exemple.org';
});

Route::post('/contact', function () {
    return 'Désolé le formulaire de contact n’est pas encore prêt';
});
