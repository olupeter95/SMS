<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\section;
class SectionController extends Controller
{
    //
    public function store(){
        $data = [
            'name'=>'THIRD TERM',
            'nick_name'=>'TT',
            'class_id'=>2,
            'teacher_id'=>2,
        ];
        Section::create($data);
        $res = Section::all();
        return $res;
    }
}
