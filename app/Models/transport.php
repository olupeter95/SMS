<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transport extends Model
{
    use HasFactory;
    protected $primarykey = 'transport_id';
    protected $fillable = [
        'route_name', 'number_of_vehicles','description','route_fare'
    ];
}
