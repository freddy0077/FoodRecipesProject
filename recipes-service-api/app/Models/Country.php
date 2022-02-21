<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Country extends Model
{
    use HasFactory;

    protected $table = "countries";

    protected $guarded = [];

    public function recipes(){
        return $this->belongsToMany(Recipe::class);
    }


}
