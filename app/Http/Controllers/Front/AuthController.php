<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\User;
use App\Model\CarWashe;
use App\Model\Generators\ModelSnipet;

class AuthController extends Controller{
    function getLogin(){
        $ar = array();
        $ar['title'] = 'Войти';

        return view('front.auth.login', $ar);
    }

    function postLogin(Request $request){
        if (!Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
            return back()->with('error', 'Не правильный email/пароль');

        return redirect()->action('Carwash\CabinetController@getIndex');
    }

    function getRegistr(){
        $ar = array();
        $ar['title'] = 'Зарегистрироваться';

        return view('front.auth.registr', $ar);
    }

    function postRegistr(Request $request){
        $user = new User();
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->type_id = 2;
        $user->save();

        $car_wash = new CarWashe();
        $car_wash->user_id = $user->id;

        if ($request->hasFile('logo'))
            $car_wash->logo = ModelSnipet::setImage($request->file('logo'), 'logo', 700, 300);

        $car_wash->name = $request->input('name');
        $car_wash->note = $request->input('note');
        $car_wash->phone = $request->input('phone');
        $car_wash->address = $request->input('address');
        $car_wash->save();

        return redirect()->action('Front\CabinetController@getLogin')->with('success', 'Вы успешно зарегистрированы. Войдите используя Ваш Email,пароль.');
    }

}
