<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraduantsResults extends Model
{
    use HasFactory;

    protected $fillable = [
        'college_cumpus', 'school_faculty', 'programme', 'reg_adm_no', 'name', 'gender', 'specialization', 'mean_score', 'degree_class', 'level', 'email', 'phone', 'comments',
    ];

}
