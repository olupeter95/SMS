<?php

namespace App\Http\Controllers;
use App\Models\group;
use App\Models\section;
use App\Models\hostel;
use App\Models\transport;
use App\Models\Student;
use Illuminate\Http\Request;




class StudentController extends Controller
{
    //
    public function index(){
        $group = group::all();
        $section = section::all();
        $hostel = hostel::all();
        $transport = transport::all();
        return view('admin.add_student', compact('group','section','hostel','transport'));
    }
    public function store(Request $request){
       
        $student = new Student;
        $student->name = $request->name;
        $student->birthday = $request->bday;
        $student->sex = $request->sex;
        $student->religion = $request->religion;
        $student->blood_group = $request->b_group;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->father_name = $request->fname;
        $student->mother_name = $request->mname;
        $student->class_id = $request->class_id;
        $student->section_id = $request->section_id;
        $student->transport_id = $request->transport_id;
        $student->hostel_id = $request->hostel_id;
        $student->password= $request->password;
        $student->image = $request->image->getClientOriginalName();
        $request->image->storeAs('images',$student->image,'public');
        $student->save();
        return redirect(route('admin.index'));
    }
    public function update(Request $request,Student $student){
        $student->update(
            [
                'name'=>$request->name,
                'birthday'=>$request->bday,
                'sex'=>$request->gender,
                'relgion'=>$request->religion,
                'blood_group'=>$request->b_group,
                'address'=>$request->address,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'father_name'=>$request->fname,
                'mother_name'=>$request->mname,
                'class_id'=>$request->class_id,
                'section_id'=>$request->section_id,
                'transport_id'=>$request->transport_id,
                'hotel_id'=>$request->hostel_id,
                'image'=>$request->image->getClientOriginalName()->storeAs('images',$student->image,'public'),
            ]
        )->where('student_id','=',$student_id);
        return redirect(route('admin.dashboard'));
    }
    public function addStudent(){
        $group = group::all();
        return view('admin.add_bulk_student', compact('group'));
    }
    public function display($class_id){
       $group = group::all();
       $student = student::where('class_id','=' ,$class_id)->paginate(5);
       return view('admin.display_student_info',compact('group','student'));
    }
    public function home(){
        $group = group::all();
        return view('admin.dashboard',compact('group'));
    }
    public function edit(Student $student){
        //dd($student->name);
        $group = group::all();
        $section = section::all();
        $hostel = hostel::all();
        $transport = transport::all();
        return view('admin.edit_student', compact('student','group','section','hostel','transport'));
    }   
}
