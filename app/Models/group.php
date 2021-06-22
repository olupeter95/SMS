<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;
    protected $primarykey = 'class_id';
    protected $fillable = [
        'name','name_numeric','teacher_id'
    ];
}
