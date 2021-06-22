<?php

namespace App\Http\Controllers;
use App\Models\group;
use App\Models\section;
use App\Models\hostel;
use App\Models\transport;
use App\models\teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index(){
        $group = group::all();
        $section = section::all();
        $hostel = hostel::all();
        $transport = transport::all();
        $teacher = teacher::paginate(5);
        return view('admin.teacher', compact('group','section','hostel','transport','teacher'));
    }
    public function store(Request $request){
        
        $teacher = new teacher;
        $teacher->name = $request->name;
        $teacher->birthday = $request->bday;
        $teacher->gender = $request->sex;
        $teacher->religion = $request->religion;
        $teacher->blood_group = $request->b_group;
        $teacher->address = $request->address;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->password= $request->pwd;
        $teacher->image = $request->image->getClientOriginalName();
        $request->image->storeAs('images',$teacher->image,'public');
        $teacher->save();
        return redirect(route('admin.teacher'));
    }
}
