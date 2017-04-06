<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\CarWashe;

class IndexController extends Controller{
    function getIndex(){
        $items = CarWashe::orderBy('id', 'desc')->get();

        $ar = array();
        $ar['title'] = 'Автомойки Астаны';
        $ar['items'] = $items;

        return view('front.index.index', $ar);
    }

}
