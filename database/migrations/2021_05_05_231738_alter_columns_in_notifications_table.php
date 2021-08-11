<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnsInNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropColumn('count');
            $table->addColumn('text', 'message');
            $table->addColumn('text', 'data');
            $table->addColumn('text', 'action_name');
            $table->addColumn('datetime', 'delivered_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->removeColumn('message');
            $table->removeColumn('data');
            $table->removeColumn('action_name');
            $table->removeColumn('delivered_date');
            $table->addColumn('integer', 'count');
        });
    }
}
