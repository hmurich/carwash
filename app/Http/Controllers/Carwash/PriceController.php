<?php
namespace App\Http\Controllers\Carwash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Model\CarWashe;
use App\Model\Price;

class PriceController extends Controller{
    function getIndex(){
        $user = Auth::user();
        $car_wash = CarWashe::where('user_id', $user->id)->first();
        $price = Price::where('car_wash_id', $car_wash->id)->first();
        if (!$price){
            $price = new Price();
            $price->car_wash_id = $car_wash->id;
            $price->save();
        }

        $ar = array();
        $ar['title'] = 'Цены';
        $ar['car_wash'] = $car_wash;
        $ar['price'] = $price;

        return view('carwash.price.index', $ar);
    }

    function postSave(Request $request){
        $user = Auth::user();
        $car_wash = CarWashe::where('user_id', $user->id)->first();
        $price = Price::where('car_wash_id', $car_wash->id)->first();
        if (!$price){
            $price = new Price();
            $price->car_wash_id = $car_wash->id;
            $price->save();
        }

        $price->price_small = $request->input('price_small');
        $price->price_mega = $request->input('price_mega');
        $price->price_big = $request->input('price_big');
        $price->save();

        return redirect()->back()->with('success', 'Сохранено.');
    }
}
