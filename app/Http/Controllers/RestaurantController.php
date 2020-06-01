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
}