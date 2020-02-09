<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->group(['middleware' => 'api.auth'], function ($api) {
        $api->get('/me', function(){
            $data = [
                "name" => "Indra Hehe Aja",
                "nickname" => "goeroeku",
                "gender" => "Male",
                "class" => "Pro Akut",
            ];
            return ['status' => 200, 'data' =>  $data];
        });
        $api->delete('/logout' , 'App\Http\Controllers\AuthController@logout');
        $api->get('/user/{id}', 'App\Http\Controllers\AuthController@show');
        $api->put('/user/{id}', 'App\Http\Controllers\AuthController@update');
    });
    $api->post('/login' , 'App\Http\Controllers\AuthController@login');
    $api->post('/register' , 'App\Http\Controllers\AuthController@register');

    $api->post('/quiz/create','App\Http\Controllers\quizController@create');
    Route::put('/quiz/{id}', 'quizController@soal');
    Route::get('/quiz/result', 'quizController@grandResult');
    
});
