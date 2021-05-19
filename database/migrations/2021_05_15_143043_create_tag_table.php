<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagTable extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        Schema::create('article_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('article_id')->index();
            $table->unsignedInteger('tag_id')->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('article_tags');
    }
}
