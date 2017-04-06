<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class TestController extends Controller{
    function getIndex(){
        return view('test.index');
    }

}
