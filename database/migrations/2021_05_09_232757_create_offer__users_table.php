<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer__users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('create_by_user_id')->nullable();
            $table->foreign('create_by_user_id')->references('id')->on('users');
            $table->unsignedBigInteger('buy_By_User_offer_id')->nullable();
            $table->foreign('buy_By_User_offer_id')->references('id')->on('offers');
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
        Schema::dropIfExists('offer__users');
    }
}
