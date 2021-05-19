<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        Schema::create('article_ingredient', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('article_id')->index();
            $table->unsignedInteger('ingredient_id')->index();
            $table->string('quantity')->default('Не указано');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ingredients');
        Schema::dropIfExists('article_ingredient');
    }
}
