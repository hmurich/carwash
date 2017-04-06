<?php
Route::get('/', 'Front\IndexController@getIndex');

// Test Controllers
Route::controller('test', 'TestController');
