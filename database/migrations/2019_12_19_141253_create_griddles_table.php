<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGriddlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('griddles', function (Blueprint $table) {
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
        Schema::dropIfExists('griddles');
    }
}
