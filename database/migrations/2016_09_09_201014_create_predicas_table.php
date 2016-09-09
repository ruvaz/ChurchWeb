<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predicas', function (Blueprint $table) {
            $table->increments('id');
                $table->integer('serie_id')->unsigned()->index();
                $table->integer('preacher_id')->unsigned()->index();
                $table->string('title');
                $table->text('body');
                $table->string('mp3');
                $table->string('video');
                $table->string('file');
                $table->string('slug');
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
        Schema::dropIfExists('predicas');
    }
}
