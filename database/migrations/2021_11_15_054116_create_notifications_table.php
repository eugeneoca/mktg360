<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('count')->default(0);
            $table->timestamps();

            $table->unsignedBigInteger('app_id');
            $table->unsignedBigInteger('organization_user_id');

            $table->foreign('app_id')->references('id')->on('apps');
            $table->foreign('organization_user_id')->references('id')->on('organization_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign(['app_id', 'organization_id']);
        });
        Schema::dropIfExists('notifications');
    }
}
