<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Ingredient extends Model
{
    use HasFactory;

    protected $table = "ingredients";

    protected $guarded = [];

    protected $casts = [
        "id" => "string",
        'created_at' => 'datetime:Y-m-d h:i',
    ];


}
