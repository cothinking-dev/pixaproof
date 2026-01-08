<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'job_title',
        'industry',
        'inquiry_type',
        'message',
        'source',
        'ip_address',
    ];
}
