<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('display_name');
            $table->text('profile_photo')->nullable();
            $table->string('title')->nullable();
            $table->string('status')->default('PENDING');
            $table->string('windows_username')->nullable();;
            $table->string('hash_token')->nullable();
            $table->dateTime('verified_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('organization_id');
            $table->unsignedBigInteger('user_type_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->foreign('user_type_id')->references('id')->on('user_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organization_users', function (Blueprint $table) {
            $table->dropForeign(['user_id', 'organization_id','user_type_id']);
        });
        Schema::dropIfExists('organization_users');
    }
}
