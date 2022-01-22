<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSentCofluencesAddStrategyId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sent_cofluences', function (Blueprint $table) {
            $table->integer('strategy_id')->after('symbol')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sent_cofluences', function (Blueprint $table) {
            $table->dropColumn('strategy_id');
        });
    }
}
