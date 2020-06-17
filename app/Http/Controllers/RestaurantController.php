<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Session;
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
    function deletestore($id)
    {
        Restaurant::find($id)->delete();
        Session::flash('status', 'Restaurant has been deleted Successfully');
        return redirect('storelist');
    }
    function editstore($id)
    {
        $data = Restaurant::find($id);
        return view('editstore',['data'=>$data]);
    }
    function updatestore(Request $req)
    {
        // return $req->input();
        $fun_restaurant = Restaurant::find($req->id);
        $fun_restaurant->name=$req->input('name');
        $fun_restaurant->email=$req->input('email');
        $fun_restaurant->address=$req->input('address');
        $fun_restaurant->save();
        $req->session()->flash('status', 'Restaurant Update Successfully');
        return redirect('storelist');
    }
    function registeruser(Request $req)
    {
        return $req->input();
    }
}