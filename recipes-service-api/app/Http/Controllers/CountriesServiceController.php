<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountriesServiceController  extends Controller
{

    public function __construct()
    {
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request){
        $countries = Country::all();
        return response()->json(["data" => $countries]);
    }


}
