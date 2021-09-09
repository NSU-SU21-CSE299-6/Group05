<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresidentTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('president_tbl', function (Blueprint $table) {
            $table->string('president_name');
            $table->string('president_id');
            $table->string('president_email');
            $table->string('president_phone');
            $table->string('president_image');
            $table->string('president_club');
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
        Schema::dropIfExists('president_tbl');
    }
}
