<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Recipe extends Model
{
    use HasFactory;

    protected $table = "recipes";

    protected $guarded = [];

    protected $casts = [
        "id" => "string",
        'created_at' => 'datetime:Y-m-d h:i',
    ];

    public function countries(){
    }

}
