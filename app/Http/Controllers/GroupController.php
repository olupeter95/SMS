<?php

namespace App\Http\Controllers;
use App\Models\group;
use App\Models\section;
use App\Models\hostel;
use App\Models\transport;
use Illuminate\Http\Request;

class GroupController extends Controller
{
   public function index(){
    $group = group::paginate(5);
    $section = section::all();
    $hostel = hostel::all();
    $transport = transport::all();
    return view('admin.class', compact('group','section','hostel','transport'));

   }
   public function store(Request $request){
       /* $data = [
            'name' => 'NURSERY',
            'name_numeric' => 'NURSERY2',
            'teacher_id' => 4
        ];
        group::create($data);
        $res = group::all();
        return $res;*/
    }
    public function display(){
        /*$group = dd(group::all());*/
    }
}
