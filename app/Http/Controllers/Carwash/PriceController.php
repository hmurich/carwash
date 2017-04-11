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

        $price->price_small_1 = $request->input('price_small_1');
        $price->price_small_2 = $request->input('price_small_2');
        $price->price_small_3 = $request->input('price_small_3');

        $price->price_mega_1 = $request->input('price_mega_1');
        $price->price_mega_2 = $request->input('price_mega_2');
        $price->price_mega_3 = $request->input('price_mega_3');

        $price->price_big_1 = $request->input('price_big_1');
        $price->price_big_2 = $request->input('price_big_2');
        $price->price_big_3 = $request->input('price_big_3');

        $price->save();

        return redirect()->back()->with('success', 'Сохранено.');
    }
}
