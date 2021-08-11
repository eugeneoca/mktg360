<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_ideas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');

            $table->string('description');
            $table->string('cause')->nullable();
            $table->string('primary_customer')->nullable();
            $table->string('secondary_customer')->nullable();
            $table->string('expected_result')->nullable();
            $table->string('budget')->nullable();
            $table->string('other_details')->nullable();

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
        Schema::dropIfExists('campaign_ideas');
    }
}
