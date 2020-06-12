<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
class RestaurantController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function storelist()
    {
        $data= Restaurant::all();
        return view('storelist',["data"=>$data]);
    }
    function addstore(Request $req)
    {
        // return $req->input();
        $fun_restaurant = new Restaurant;
        $fun_restaurant->name=$req->input('name');
        $fun_restaurant->email=$req->input('email');
        $fun_restaurant->address=$req->input('address');
        $fun_restaurant->save();
        $req->session()->flash('status', 'Restaurant Entered Successfully');
        return redirect('storelist');
    }
}