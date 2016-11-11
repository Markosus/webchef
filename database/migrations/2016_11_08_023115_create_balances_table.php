<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_balances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('website_creation');
            $table->integer('hosting');
            $table->integer('domain_registraion');
            $table->integer('maintenance');
            $table->tinyInteger('annualcharge');
            $table->dateTime('hosting_started_at');
            $table->dateTime('domainreg_started_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_balances');
    }
}
