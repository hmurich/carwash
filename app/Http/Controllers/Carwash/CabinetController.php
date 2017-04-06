<?php
namespace App\Http\Controllers\Carwash;
use App\Http\Controllers\Controller;

class CabinetController extends Controller{
    function getIndex(){

        $ar = array();
        $ar['title'] = 'Автомойки Астаны';

        return view('front.index.index', $ar);
    }

    function postIndex(){

    }
}
