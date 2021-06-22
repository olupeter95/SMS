<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hostel extends Model
{
    use HasFactory;
    protected $primarykey = 'hostel_id';
    protected $fillable = [
        'name','number_of_rooms','description'
    ];
}
