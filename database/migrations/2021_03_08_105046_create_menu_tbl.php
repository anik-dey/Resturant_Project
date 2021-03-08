<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_tbl', function (Blueprint $table) {
            $table->increments('iteam_id');
            $table->string('iteam_name');
            $table->integer('iteam_price');
            $table->string('iteam_quality');
            $table->string('iteam_image');
            $table->string('iteam_description');
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
        Schema::dropIfExists('menu_tbl');
    }
}
