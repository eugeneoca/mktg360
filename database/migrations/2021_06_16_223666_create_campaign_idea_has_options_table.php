<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignIdeaHasOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_idea_has_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_idea_id')->nullable();
            $table->foreign('campaign_idea_id')->references('id')->on('campaign_ideas')->onDelete('cascade');

            $table->unsignedBigInteger('option_id')->nullable();
            $table->foreign('option_id')->references('id')->on('campaign_idea_options')->onDelete('cascade');
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
        Schema::dropIfExists('campaign_idea_has_options');
    }
}
