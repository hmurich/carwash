<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\CarWashe;
use App\Model\Review;
use App\Model\Reserve;

class CarWashController extends Controller{
    function getShow($id){
        $car_wash = CarWashe::findOrFail($id);

        $ar = array();
        $ar['title'] = $car_wash->name;
        $ar['car_wash'] = $car_wash;
        $ar['reviews'] = $car_wash->relReview()->orderBy('id', 'desc')->get();

        return view('front.carwash.show', $ar);
    }

    function postReview(Request $request, $id){
        $car_wash = CarWashe::findOrFail($id);

        $item = new Review();
        $item->car_wash_id = $car_wash->id;
        $item->raiting = $request->input('raiting');
        $item->name = $request->input('name');
        $item->note = $request->input('note');
        $item->save();

        $car_wash->raiting_total = $car_wash->raiting_total + 1;
        $car_wash->raiting_sum = $car_wash->raiting_sum + $item->raiting;
        $car_wash->raiting = $car_wash->raiting_sum / $car_wash->raiting_total;
        $car_wash->raiting = round($car_wash->raiting, 2);
        $car_wash->save();

        return redirect()->back()->with('success', 'Сохранено.');
    }

    function postReserve(Request $request, $id){
        $car_wash = CarWashe::findOrFail($id);

        $item = new Reserve();
        $item->car_wash_id = $car_wash->id;
        $item->name = $request->input('name');
        $item->note = $request->input('note');
        $item->phone = $request->input('phone');
        $item->save();

        return redirect()->back()->with('success', 'Сохранено.');
    }

}
