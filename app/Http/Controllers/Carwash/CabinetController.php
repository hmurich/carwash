<?php
namespace App\Http\Controllers\Carwash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Model\CarWashe;

class CabinetController extends Controller{
    function getIndex(){
        $user = Auth::user();
        $car_wash = CarWashe::where('user_id', $user->id)->first();

        $ar = array();
        $ar['title'] = 'Личный кабинет';
        $ar['car_wash'] = $car_wash;

        return view('carwash.cabinet.index', $ar);
    }

    function postSave(Request $request){
        $user = Auth::user();
        $car_wash = CarWashe::where('user_id', $user->id)->first();

        if ($request->hasFile('logo'))
            $car_wash->logo = ModelSnipet::setImage($request->file('logo'), 'logo', 700, 300);

        $car_wash->name = $request->input('name');
        $car_wash->note = $request->input('note');
        $car_wash->phone = $request->input('phone');
        $car_wash->address = $request->input('address');
        $car_wash->save();

        return redirect()->back()->with('success', 'Сохранено.');
    }
}
