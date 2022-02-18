<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("country_id");
            $table->foreign("country_id")->references("id")->on("countries")->onDelete("cascade");
            $table->unsignedBigInteger("recipe_id");
            $table->foreign("recipe_id")->references("id")->on("recipes")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_recipes');
    }
}
