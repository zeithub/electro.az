<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tosters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status')->nullable();
            $table->string('category');
            $table->string('brand');
            $table->string('type');
            $table->string('name');
            $table->string('price')->nullable();
            $table->string('img')->nullable();
            $table->string('tags')->nullable();
            $table->string('waranty')->nullable();
            $table->string('kredit')->nullable();
            $table->string('percentkredit')->nullable();
            $table->string('video')->nullable();
            $table->string('managmentmode')->nullable();
            $table->string('roastingmodecount')->nullable();
            $table->string('webforloaf')->nullable();
            $table->string('autooff')->nullable();
            $table->string('power')->nullable();
            $table->string('powermaterial')->nullable();
            $table->string('antiheatingbody')->nullable();
            $table->string('underbox')->nullable();
            $table->string('dimension')->nullable();
            $table->string('weight')->nullable();
            $table->string('color')->nullable();
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
        Schema::dropIfExists('tosters');
    }
}
