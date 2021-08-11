<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationCuidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_cuids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cuid')->nullable();
            $table->string('cuid_alpha')->nullable();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::table('organization_cuids', function (Blueprint $table) {
            $table->dropForeign(['organization_id']);
        });
        
        Schema::dropIfExists('organization_cuids');
    }
}
