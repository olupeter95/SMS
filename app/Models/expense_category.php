<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expense_category extends Model
{
    use HasFactory;
    protected $primarykey = 'expensecat_id';
}
