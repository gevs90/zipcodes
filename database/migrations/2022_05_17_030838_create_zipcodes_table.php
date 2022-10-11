<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcodes', function (Blueprint $table) {
            $table->string('zipcode');
            $table->index('zipcode');
            $table->string('settlement');
            $table->string('settlement_type');
            $table->string('municipality');
            $table->string('state');
            $table->integer('state_key')->default(0);
            $table->integer('municipality_key')->default(0);
            $table->integer('key')->default(0);
            $table->string('zone_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zipcodes');
    }
};
