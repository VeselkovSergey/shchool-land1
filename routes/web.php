<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::group(['prefix' => 'github'], function () {

    Route::post('/push', function () {
        // sudo -u www-data ssh-keygen - генерим ssh ключи под www-data
        // chmod 600 /var/www/.ssh/id_rsa - для работы git pull под www-data
        echo 'git pull start' . PHP_EOL;
        echo shell_exec('git pull');
        echo 'git pull complete' . PHP_EOL;

        echo 'php artisan migrate start' . PHP_EOL;
        \Illuminate\Support\Facades\Artisan::call('migrate');
        echo 'php artisan migrate complete' . PHP_EOL;
    })->name('github-push');

});
