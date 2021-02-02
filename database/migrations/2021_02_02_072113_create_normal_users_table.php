<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normal_users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('password');
            $table->json('photos')->nullable();
            $table->tinyInteger('user_type')->nullable();
            $table->string('birthday_date')->nullable();
            $table->integer('experience')->nullable();
            $table->string('nationality')->nullable();
            $table->string('education')->nullable();
            $table->string('main_phone_number')->unique();
            $table->json('additional_phone_number')->nullable();
            $table->json('language')->nullable();
            $table->unsignedBigInteger('living_area_id')->nullable();
            $table->json('photo_gallery')->nullable();
            $table->integer('active_agreements_count')->nullable();
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
        Schema::dropIfExists('normal_users');
    }
}
