<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'address_en',
        'address_ar',
        'phones',
        'email',
        'fax',
        'whatsapp',
        'google_map',
        'website',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',
    ];
}
