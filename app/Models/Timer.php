<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'target_date',
        'is_active',
        'admin_id',
    ];
    
}
