<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share_sonchoi_rosid extends Model
{
    use HasFactory;
    protected $fillable = [
        'রশিদ_নং',
        'সদস্য_নং',
        'শেয়ার',
        'সঞ্চয়',
        'ঋণ_ফেরৎ',
        'সুদ',
        'জরিমানা',
        'ভর্তি_ফি',
        'বিক্রয়',
        'হিসাব_খরচ',
        'বিশেষ_সঞ্চয়',
        'user_id',
        'আদায়কারীর_স্বাক্ষর',
        
       
    ];
}
