<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionGroupUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_group_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('permission_group_id');
            $table->unsignedBigInteger('organization_user_id');
            $table->foreign('permission_group_id')->references('id')->on('permission_groups');
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
        Schema::table('permission_group_users', function (Blueprint $table) {
            $table->dropForeign(['permission_group_id', 'organization_user_id']);
        });
        Schema::dropIfExists('permission_group_users');
    }
}
