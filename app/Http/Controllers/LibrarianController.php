<?php

namespace App\Http\Controllers;
use App\Models\group;
use App\Models\section;
use App\Models\hostel;
use App\Models\transport;
use App\models\librarian;
use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    public function index(){
        $group = group::all();
        $section = section::all();
        $hostel = hostel::all();
        $transport = transport::all();
        $librarian = librarian::paginate(5);
        return view('admin.librarian', compact('group','section','hostel','transport','librarian'));
    }
    public function store(Request $request){
        
        $librarian = new librarian;
        $librarian->name = $request->name;
        $librarian->birthday = $request->bday;
        $librarian->sex = $request->sex;
        $librarian->religion = $request->religion;
        $librarian->blood_group = $request->b_group;
        $librarian->address = $request->address;
        $librarian->phone = $request->phone;
        $librarian->email = $request->email;
        $librarian->password= $request->pwd;
        $librarian->image = $request->image->getClientOriginalName();
        $request->image->storeAs('images',$librarian->image,'public');
        $librarian->save();
        return redirect(route('admin.librarian'));
    }
}
