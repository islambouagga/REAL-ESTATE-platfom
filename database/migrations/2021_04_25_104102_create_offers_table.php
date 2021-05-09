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
            $table->string('address');
            $table->string('prix');
            $table->string('surfface');
            $table->timestamps();
            $table->string('statu')->default('on hold');

            //  hna any derthom ->nullable() m3nha ya9drp ykono null wa mbe3d bech man3wdch ndir php artisan migrate:refresh dert whdi fi phpmyadmin

            $table->bigInteger('offertable_id')->nullable();
            $table->string('offertable_type')->nullable();
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
