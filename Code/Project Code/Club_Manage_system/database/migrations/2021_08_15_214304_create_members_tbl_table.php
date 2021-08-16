<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_tbl', function (Blueprint $table) {
            $table->id('id');
            $table->string('member_name');
            $table->string('member_id');
            $table->string('member_fathername');
            $table->string('member_mothername');
            $table->string('member_email');
            $table->string('member_phone');
            $table->string('member_address');
            $table->string('member_image');
            $table->string('member_password');
            $table->string('member_club');
            $table->string('member_addmissionyear');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_tbl');
    }
}
