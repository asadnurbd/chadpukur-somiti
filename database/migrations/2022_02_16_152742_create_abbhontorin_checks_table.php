<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbbhontorinChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abbhontorin_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('anusangik_id')->unsigned();
            $table->foreign('anusangik_id')->references('id')->on('anusangik_khroches')->onDelete('cascade');
            $table->bigInteger('ক্রমিক_নং');
            $table->string('অফিস_স্টাফ_নাম');
            $table->bigInteger('হিসাব_নং');
            $table->float('বিশেষ_সঞ্চয়_উত্তোলন');
            $table->float('সঞ্চয়_উত্তোলন');
            $table->float('শেয়ার_ফেরত');
            $table->float('ঋণ_প্রদান');
            $table->float('আনুষঙ্গিক_খরচের_পরিমাণ');
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
        Schema::dropIfExists('abbhontorin_checks');
    }
}
