<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRijabFundUttolonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rijab_fund_uttolons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ব্যক্তির_নাম')->nullable();
            $table->bigInteger('শেয়ার')->nullable();
            $table->float('সঞ্চয়')->nullable();
            $table->float('বিশেষ_সঞ্চয়_উত্তোলন')->nullable();
            $table->float('ঋণ')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rijab_fund_uttolons');
    }
}
