<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Lumen\Auth\Authorizable;
use Laravel\Scout\Searchable;


class Recipe extends Model
{
    use HasFactory;

    protected $table = "recipes";

    protected $guarded = [];

    protected $casts = [
        "id" => "string",
        'created_at' => 'datetime:Y-m-d h:i',
    ];


}
