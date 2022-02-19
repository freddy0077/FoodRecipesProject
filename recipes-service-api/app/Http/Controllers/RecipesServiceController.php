<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RecipesServiceController  extends Controller
{

    public function __construct()
    {
    }

    public function index(Request $request){

        $recipesBuilder = DB::table("countries")
            ->rightJoin("country_recipes","countries.id","=","country_recipes.country_id")
            ->rightJoin("recipes","recipes.id","=","country_recipes.recipe_id")
            ->selectRaw("countries.name as country,recipes.name as recipe_name, image_url,
            countries.id as country_id, recipes.id as recipe_id, description");

            if($request->has("co_id") && !empty($request->query("co_id") && $request->query("co_id") != "false")){
                $recipesBuilder->where("countries.id","=",$request->query("co_id"));
            }

            $recipes = $recipesBuilder->get();
        return response()->json(["data" => $recipes]);
    }


}
