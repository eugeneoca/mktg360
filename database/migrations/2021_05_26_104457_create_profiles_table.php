<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('business_name')->unique();
            $table->string('site_url')->nullable();
            $table->string('business_email');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('state');
            $table->string('city');
            $table->string('country');
            $table->string('color_a')->nullable();
            $table->string('color_b')->nullable();
            $table->string('color_c')->nullable();
            $table->string('color_d')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
