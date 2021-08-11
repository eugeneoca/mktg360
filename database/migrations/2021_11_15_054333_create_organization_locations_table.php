<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('display_name');
            $table->string('location_type_name')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('phone')->nullable();
            $table->string('toll_free')->nullable();
            $table->text('website')->nullable();
            $table->string('fax')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('status')->nullable();
            $table->string('intranet_ip_address_range')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organization_locations', function (Blueprint $table) {
            $table->dropForeign(['organization_id']);
        });
        Schema::dropIfExists('organization_locations');
    }
}
