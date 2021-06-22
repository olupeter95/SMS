<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'student_id';
    protected $fillable = [
        'name',
        'birthday',
        'sex',
        'religion',
        'blood_group',
        'address',
        'email',
        'password',
        'father_name',
        'mother_name',
        'class_id',
        'section_id',
        'transport_id',
        'hostel_id',
    ];
    protected $guarded = [
        'parent_id'
    ];
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
   public function groups(){
        return $this->hasMany(group::class);
      }
}
