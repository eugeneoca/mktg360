<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('system_created')->default(false);
            $table->timestamps();

            $table->unsignedBigInteger('organization_location_id');
            $table->foreign('organization_location_id')->references('id')->on('organization_locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permission_groups', function (Blueprint $table) {
            $table->dropForeign(['organization_location_id']);
        });
        Schema::dropIfExists('permission_groups');
    }
}
