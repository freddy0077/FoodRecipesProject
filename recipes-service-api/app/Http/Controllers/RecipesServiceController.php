<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesServiceController  extends Controller
{

    public function __construct()
    {
    }

    public function index(Request $request){
        $recipes = Recipe::all();
        return response()->json(["data" => $recipes]);
    }


}
