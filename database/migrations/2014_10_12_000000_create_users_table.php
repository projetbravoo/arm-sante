<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender', 10);
            $table->string('email')->unique();
            $table->integer('phone_number')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('blood_group', 3)->nullable();
            $table->string('speciality')->nullable();
            $table->longText('biography')->nullable();
            $table->string('clinic_name')->nullable();
            $table->string('clinic_address')->nullable();
            $table->string('services')->nullable();
            $table->string('specialization')->nullable();
            $table->integer('price')->nullable();
            $table->json('education')->nullable();
            $table->json('experience')->nullable();
            $table->enum('active', ['0', '1'])->default('0');
            $table->string('profile', 20);
            $table->string('avatar');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
