<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'সদস্য_নাম_মি_মিসেস_মিস',
        'সদস্য_পিতা_স্বামীর_নাম',
        'সদস্য_মাতার_নাম',
        'সদস্য_বর্তমান_ঠিকানা',
        'সদস্য_স্থায়ী_ঠিকানা_গ্রাম',
        'সদস্য_পো',
        'সদস্য_উপজেলা',
        'সদস্য_জেলা',
        'সদস্য_বয়স_বৎসর',
        'সদস্য_জন্মতারিখ',
        'সদস্য_জাতীয়তা',
        'সদস্য_ধর্ম',
        'সদস্য_পেশা',
        'অন্য_সমিতির_সদস্য_নং',
        '100_টাকা_জমা',
        'নমিনির_সম্পর্ক',
        'উত্তরাধিকারীর_নাম',
        'উত্তরাধিকারীর_স্থায়ী_ঠিকানা',
        'উত্তরাধিকারীর_পো',
        'উত্তরাধিকারীর_উপজেলা',
        'উত্তরাধিকারীর_জেলা',
        'আবেদন_ভর্তির_তারিখ',
        'ভর্তির_আবেদনকারীর_স্বাক্ষর',
        'পরিচয়_প্রদানকারীর_নাম_1',
        'পরিচয়_প্রদানকারীর_স্বাক্ষর_1',
        'পরিচয়_প্রদানকারীর_সদস্য_1',
        'পরিচয়_প্রদানকারীর_নাম_2',
        'পরিচয়_প্রদানকারীর_স্বাক্ষর_2',
        'পরিচয়_প্রদানকারীর_সদস্য_নং_2',
        'পরিচয়_প্রদানকারীর_তারিখ',
        'পরিচয়_প্রদানকারীর_আবেদনকারীর_স্বাক্ষর',
        'ম্যানেজমেন্ট_অনুমোদনের_তারিখ',
        'অনুমোদনকারী_নাম',
        'সদস্য_নং',
        'তারিখ',
        'সংগ্রহকারীর_স্বাক্ষর',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
