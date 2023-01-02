<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('সদস্য_নাম_মি_মিসেস_মিস')->nullable();
            $table->string('সদস্য_পিতা_স্বামীর_নাম')->nullable();
            $table->string('সদস্য_মাতার_নাম')->nullable();
            $table->string('সদস্য_বর্তমান_ঠিকানা')->nullable();
            $table->string('সদস্য_স্থায়ী_ঠিকানা_গ্রাম')->nullable();
            $table->string('সদস্য_পো')->nullable();
            $table->string('সদস্য_উপজেলা')->nullable();
            $table->string('সদস্য_জেলা')->nullable();
            $table->string('সদস্য_বয়স_বৎসর')->nullable();
            $table->string('সদস্য_জন্মতারিখ')->nullable();
            $table->string('সদস্য_জাতীয়তা')->nullable();
            $table->string('সদস্য_ধর্ম')->nullable();
            $table->string('সদস্য_পেশা')->nullable();
            // $table->string('পদমর্যাদা');
            // $table->string('নিয়োগকর্তার_নাম_ও_ঠিকানা');
            $table->bigInteger('অন্য_সমিতির_সদস্য_নং')->nullable();
            // $table->string('ঘোষণা');
            $table->float('100_টাকা_জমা')->nullable();
            // $table->string('আবেদন_ভর্তির_তারিখ');
            // $table->string('ভর্তির_আবেদনকারীর_স্বাক্ষর');
            $table->string('নমিনির_সম্পর্ক')->nullable();
            $table->string('উত্তরাধিকারীর_নাম')->nullable();
            // $table->string('উত্তরাধিকারীর_সম্পর্ক')->nullable();
            $table->string('উত্তরাধিকারীর_স্থায়ী_ঠিকানা')->nullable();
            $table->string('উত্তরাধিকারীর_পো')->nullable();
            $table->string('উত্তরাধিকারীর_উপজেলা')->nullable();
            $table->string('উত্তরাধিকারীর_জেলা')->nullable();
            $table->string('আবেদন_ভর্তির_তারিখ')->nullable();
            $table->string('ভর্তির_আবেদনকারীর_স্বাক্ষর')->nullable();


            $table->string('পরিচয়_প্রদানকারীর_নাম_1')->nullable();
            $table->string('পরিচয়_প্রদানকারীর_স্বাক্ষর_1')->nullable();
            $table->string('পরিচয়_প্রদানকারীর_সদস্য_1')->nullable();

            $table->string('পরিচয়_প্রদানকারীর_নাম_2')->nullable();
            $table->string('পরিচয়_প্রদানকারীর_স্বাক্ষর_2')->nullable();
            $table->string('পরিচয়_প্রদানকারীর_সদস্য_নং_2')->nullable();

            $table->string('পরিচয়_প্রদানকারীর_তারিখ')->nullable();
            $table->string('পরিচয়_প্রদানকারীর_আবেদনকারীর_স্বাক্ষর')->nullable();

            $table->string('ম্যানেজমেন্ট_অনুমোদনের_তারিখ')->nullable();
            $table->string('অনুমোদনকারী_নাম')->nullable();
            $table->bigInteger('সদস্য_নং')->unique();
            // $table->string('রশিদ_নং')->unique();
            // $table->string('ভর্তি_ফি')->unique();
            $table->string('তারিখ')->nullable();
            $table->string('সংগ্রহকারীর_স্বাক্ষর')->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
