<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_tb', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price_def');
            $table->float('price_small');
            $table->float('price_large');
            $table->string('category');
            $table->string('sub_cat');
            $table->string('description');
            $table->string('img_dir');
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
         Schema::dropIfExists('menu_tb');
    }
}
