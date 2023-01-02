<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rijab_fund extends Model
{
    use HasFactory;
    protected $fillable = [
        'ব্যক্তির_নাম',
        'শেয়ার',
        'সঞ্চয়',
        'বিশেষ_সঞ্চয়_উত্তোলন',
        'ঋণ',
    ];
}
