<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MomoSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'mode',
        'partner_code',
        'access_key',
        'secret_key',
    ];
}
