<?php
Route::get('/', 'Front\IndexController@getIndex');
Route::controller('auth', 'Front\AuthController');
Route::controller('item', 'Front\CarWashController');

// Test Controllers
Route::controller('test', 'TestController');

Route::group(['middleware' => ['auth.carwash']], function () {
    Route::controller('carwash/cabinet', 'Carwash\CabinetController');
    Route::controller('carwash/price', 'Carwash\PriceController');
    Route::controller('carwash/reserve', 'Carwash\ReserveController');
});
