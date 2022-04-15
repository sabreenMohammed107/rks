<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_vedio',
        'overview_en',
        'overview_ar',
        'slog_en',
        'slog_ar',
    ];
}
