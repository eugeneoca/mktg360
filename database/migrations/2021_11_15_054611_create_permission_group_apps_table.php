<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionGroupAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_group_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('permission_group_id');
            $table->unsignedBigInteger('organization_location_app_id');

            $table->foreign('permission_group_id')->references('id')->on('permission_groups');
            $table->foreign('organization_location_app_id')->references('id')->on('organization_location_apps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permission_group_apps', function (Blueprint $table) {
            $table->dropForeign(['permission_group_id', 'organization_location_app_id']);
        });
        Schema::dropIfExists('permission_group_apps');
    }
}
