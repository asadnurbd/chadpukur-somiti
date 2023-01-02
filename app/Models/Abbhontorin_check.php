<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abbhontorin_check extends Model
{
    use HasFactory;
    protected $fillable = [
        'ক্রমিক_নং',
        'anusangik_id',
        'অফিস_স্টাফ_নাম',
        'হিসাব_নং',
        'বিশেষ_সঞ্চয়_উত্তোলন',
        'সঞ্চয়_উত্তোলন',
        'শেয়ার_ফেরত',
        'ঋণ_প্রদান',
        'আনুষঙ্গিক_খরচের_পরিমাণ',
    ];
}
