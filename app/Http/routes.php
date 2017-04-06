<?php
Route::get('/', 'Front\IndexController@getIndex');
Route::controller('auth', 'Front\AuthController');

// Test Controllers
Route::controller('test', 'TestController');

Route::group(['middleware' => ['auth.carwash']], function () {
    Route::get('carwash/cabinet', 'Carwash\CabinetController@getIndex');
});
