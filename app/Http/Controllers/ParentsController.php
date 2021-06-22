<?php

namespace App\Http\Controllers;
use App\Models\group;
use App\Models\section;
use App\Models\hostel;
use App\Models\transport;
use App\models\parents;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    public function index(){
        $group = group::all();
        $section = section::all();
        $hostel = hostel::all();
        $transport = transport::all();
        $parent = parents::paginate(5);
        return view('admin.parent', compact('group','section','hostel','transport','parent'));
    }
    public function store(Request $request){
        $parent = new parents;
        $parent->name = $request->name;
        $parent->religion = $request->religion;
        $parent->profession = $request->profession;
        $parent->address = $request->address;
        $parent->phone = $request->phone;
        $parent->email = $request->email;
        $parent->password= $request->pwd;
        $parent->image = $request->image->getClientOriginalName();
        $request->image->storeAs('images',$parent->image,'public');
        $parent->save();
        return redirect(route('admin.parent'));
    }
}
