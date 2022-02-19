<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\CountryRecipe;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\RecipeIngredient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//            if (Country::first()) {
//                CountryRecipe::truncate();
//                RecipeIngredient::truncate();
//                Country::truncate();
//                Recipe::truncate();
//                Ingredient::truncate();
//            }

            $countries = ["Ghana", "Ivory Coast", "Nigeria", "United Kingdom", "United States"];

            foreach ($countries as $country) {
                Country::create([
                    "name" => $country
                ]);
            }

        $recipe_array = (json_decode(file_get_contents(\public_path("recipes.json")),true));

            foreach($recipe_array as $recipe){
                $recipeObject = Recipe::create([
                    "name" => $recipe["name"],
                    "description" => implode(",",$recipe["steps"]),
                    "image_url" => $recipe["imageURL"]
                ]);

                foreach($recipe["ingredients"] as $ingredient){
                    $ingredientObject = Ingredient::create(
                        [
                            "name" => $ingredient["name"],
                            "quantity" => $ingredient["quantity"],
                            "type"     => $ingredient["type"]
                        ]
                    );

                    RecipeIngredient::create([
                        "recipe_id" => $recipeObject->id,
                        "ingredient_id" => $ingredientObject->id
                    ]);
                }

                CountryRecipe::create([
                    "country_id" => rand(0,4),
                    "recipe_id" => $recipeObject->id
                ]);
            }

    }
}
