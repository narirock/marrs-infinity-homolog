<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategyCofluencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategy_cofluences', function (Blueprint $table) {
            $table->id();
            $table->integer('strategy_id')->nullable();
            $table->string('side')->nullable();
            $table->string('symbol')->nullable();
            $table->string('signal_types')->nullable();
            $table->datetime('expiry')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('strategy_cofluences');
    }
}
