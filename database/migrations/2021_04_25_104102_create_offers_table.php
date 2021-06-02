<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('address');
            $table->string('prix');
            $table->string('surfface');
            $table->timestamps();
            $table->string('statu')->default('on hold');
            $table->bigInteger('offertable_id')->nullable();
            $table->string('offertable_type')->nullable();
            $table->unsignedBigInteger('create_by_user_id')->nullable();
            $table->foreign('create_by_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
