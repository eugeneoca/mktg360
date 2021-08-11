<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationLocationAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_location_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('start_url');
            $table->string('status')->nullable();
            $table->boolean('intranet_only')->default(false);
            $table->boolean('mobile')->default(false);
            $table->boolean('is_quick_launch')->default(false);
            $table->timestamps();

            $table->unsignedBigInteger('organization_location_id');
            $table->unsignedBigInteger('organization_app_category_id')->nullable();
            $table->unsignedBigInteger('app_id');

            $table->foreign('organization_location_id')->references('id')->on('organization_locations');
            $table->foreign('organization_app_category_id')->references('id')->on('organization_app_categories');
            $table->foreign('app_id')->references('id')->on('apps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organization_location_apps', function (Blueprint $table) {
            $table->dropForeign([
                'organization_location_id',
                'organization_app_category_id',
                'app_id'
            ]);
        });
        Schema::dropIfExists('organization_location_apps');
    }
}
