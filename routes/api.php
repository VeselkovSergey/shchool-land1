<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'github'], function () {

    Route::any('/push', function () {
        // sudo -u www-data ssh-keygen - генерим ssh ключи под www-data
        // chmod 600 /var/www/.ssh/id_rsa - для работы git pull под www-data
        echo 'git pull start' . PHP_EOL;
        echo shell_exec('git pull');
        echo 'git pull complete' . PHP_EOL;

//        echo 'php artisan migrate start' . PHP_EOL;
//        \Illuminate\Support\Facades\Artisan::call('migrate');
//        echo 'php artisan migrate complete' . PHP_EOL;
//    })->name('github-push');

});
