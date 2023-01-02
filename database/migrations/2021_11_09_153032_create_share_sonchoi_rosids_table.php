<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShareSonchoiRosidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_sonchoi_rosids', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('রশিদ_নং');
            $table->float('শেয়ার');
            $table->float('সঞ্চয়');
            $table->float('ঋণ_ফেরৎ');
            $table->float('সুদ');
            $table->float('জরিমানা');
            $table->float('ভর্তি_ফি');
            $table->float('বিক্রয়');
            $table->float('হিসাব_খরচ');
            $table->float('বিশেষ_সঞ্চয়');
            $table->string('আদায়কারীর_স্বাক্ষর')->nullabel();
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
        Schema::dropIfExists('share_sonchoi_rosids');
    }
}
