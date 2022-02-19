<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Lumen\Auth\Authorizable;
use Laravel\Scout\Searchable;


class Country extends Model
{
    use HasFactory;

    protected $table = "countries";

    protected $guarded = [];

    public function recipes(){
        return $this->belongsToMany(Recipe::class);
    }


}
