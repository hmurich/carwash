<?php
namespace App\Http\Controllers\Carwash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Model\CarWashe;
use App\Model\Reserve;

class ReserveController extends Controller{
    function getIndex(){
        $user = Auth::user();
        $car_wash = CarWashe::where('user_id', $user->id)->first();
        $items = Reserve::where('car_wash_id', $car_wash->id)->orderBy('id', 'desc')->paginate(24);


        $ar = array();
        $ar['title'] = 'Бронирование';
        $ar['car_wash'] = $car_wash;
        $ar['items'] = $items;

        return view('carwash.reserve.index', $ar);
    }
}
