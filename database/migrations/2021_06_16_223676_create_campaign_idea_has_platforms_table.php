<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignIdeaHasPlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_idea_has_platforms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_idea_id')->nullable();
            $table->foreign('campaign_idea_id')->references('id')->on('campaign_ideas')->onDelete('cascade');

            $table->unsignedBigInteger('platform_id')->nullable();
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
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
        Schema::dropIfExists('campaign_idea_has_platforms');
    }
}
