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

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::resource('tasks', 'TasksController');

Route::get('/task/faker', function () {
    $faker = Faker\Factory::create();

    for ($i = 0; $i < 10; $i++) {
        echo $faker->title;
        echo $faker->text;
    }
});