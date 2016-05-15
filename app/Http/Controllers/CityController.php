<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class CityController extends Controller
{
    public function city()
    {
        $city = DB::table('countrys')->get();
        return view('index/index', ['city' => $city]);
    }
}
