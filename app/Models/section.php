<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    use HasFactory;
    protected $primarykey = 'section_id';
    protected $fillable = [
        'name', 'nick_name', 'class_id','teacher_id'
    ];
}
