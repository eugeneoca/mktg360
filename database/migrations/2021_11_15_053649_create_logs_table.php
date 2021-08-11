<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('severity');
            $table->json('json');
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('log_source_id');
            $table->foreign('log_source_id')
                ->references('id')
                ->on('log_sources');

            $table->unsignedBigInteger('log_format_id');
            $table->foreign('log_format_id')
                ->references('id')
                ->on('log_formats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logs', function (Blueprint $table) {
            $table->dropForeign(['log_source_id']);
            $table->dropForeign(['log_format_id']);
        });
        Schema::dropIfExists('logs');
    }
}
