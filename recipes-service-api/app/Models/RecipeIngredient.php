<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Lumen\Auth\Authorizable;
use Laravel\Scout\Searchable;


class RecipeIngredient extends Model
{
    use HasFactory;

    protected $table = "recipe_ingredients";

    protected $guarded = [];

}
