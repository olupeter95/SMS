@extends('admin.layouts')
@section('section')
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><span class="fas fa-arrow-circle-right" style="font-size:20px;"></span>&nbsp;Edit Student Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card mx-2">
    <div class="card-header bg-danger">
        <span class="fas fa-plus-circle"></span> Admission Form
    </div>
    <div class="card-body bg-white">
    <form method="post" enctype="multipart/form-data" action="{{route('new.update',$student->student_id)}}">
    @csrf
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Student Name</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="name" value="{{$student->name}}"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Birthday</label>
    </div>
    <div class="col-md-9">
    <input type="date" class="form-control py-3" name="bday" value="{{$student->birthday}}"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Gender</label>
    </div>
    <div class="col-md-9">
    <select name="sex">
    <option value="{{$student->sex}}" selected>{{$student->sex}}</option>
    <option value="male">male</option>
    <option value="female">female</option>
    </select>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Religion</label>
    </div>
    <div class="col-md-9">
    <select name="religion" class="form-group">
    <option value="{{$student->religion}}" selected>{{$student->religion}}</option>
    <option value="christianity">Christianity</option>
    <option value="islam">Islam</option>
    </select>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Blood Group</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="b_group" value="{{$student->blood_group}}"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Address</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="address" value="{{$student->address}}"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Phone Number</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="phone" value="{{$student->phone}}"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Email</label>
    </div>
    <div class="col-md-9">
    <input type="email" class="form-control py-3" name="email" value="{{$student->email}}"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Father Name</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="fname" value="{{$student->father_name}}"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Mother Name</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="mname" value="{{$student->father_name}}"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Class</label>
    </div>
    <div class="col-md-9">
    <select class="form-control" name="class_id">
    @foreach($group as $groups){
        <option value="{{$groups->class_id}}">{{$groups->name_numeric}}</option>
    }
    @endforeach
    </select>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Section</label>
    </div>
    <div class="col-md-9">
    <select class="form-control" name="section_id">
    @foreach($section as $sections){
        <option value="{{$sections->section_id}}">{{$sections->name}}</option>
    }
    @endforeach
    </select>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Transport</label>
    </div>
    <div class="col-md-9">
    <select class="form-control" name="transport_id">
    @foreach($transport as $key){
        <option value="{{$key->transport_id}}">{{$key->route_name}}</option>
    }
    @endforeach
    </select>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Hostel</label>
    </div>
    <div class="col-md-9">
    <select class="form-control" name="hostel_id">
    @foreach($hostel as $keys){
        <option value="{{$keys->hostel_id}}">{{$keys->name}}</option>
    }
    @endforeach
    </select>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Picture</label>
    </div>
    <div class="col-md-9">
    <img src="" id="img-tag" style="width:200px;height:200px"></br>
    <input type="file" id="profile-img-tag" name="image" class="my-2" value="{{$student->father_name}}"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row justify-content-center">
    <div class="col-md-6">
        <button class="btn btn-success btn-block btn-md">Update</button>
        </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
</div>
@endsection