<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $primarykey = 'teacher_id';
    protected $fillable = [
        'name','birthday','sex','religion','blood_group',
        'address','phone','email','password','email'
    ];
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
}
