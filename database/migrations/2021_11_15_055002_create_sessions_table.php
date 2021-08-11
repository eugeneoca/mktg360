<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sessions', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('key')->unique();
      $table->string('ip_address');
      $table->dateTime('start_date');
      $table->dateTime('end_date')->nullable()->default(null);
      $table->string('status')->default('ACTIVE');
      $table->timestamps();
      $table->softDeletes();

      $table->unsignedBigInteger('navs_installation_id')->nullable()->default(null);
      $table->unsignedBigInteger('login_type_id')->nullable()->default(null);
      $table->unsignedBigInteger('user_id');


      $table->foreign('navs_installation_id')->references('id')->on('navs_installations');
      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('login_type_id')->references('id')->on('login_types');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('sessions', function (Blueprint $table) {
      $table->dropForeign(['navs_installation_id', 'user_id', 'login_type_id']);
    });
    Schema::dropIfExists('sessions');
  }
}
