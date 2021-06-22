@extends('admin.layouts')
@section('section')
<div class="content-wrapper bg-white">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><span class="fas fa-arrow-circle-right" style="font-size:20px;"></span>&nbsp;Student Information</h1>
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
        <h4>Student Information Page</h4>
    </div>
    </div>
    <div class="m-2">
    <a class="btn btn-dark" href="/add_student"><span class="fas fa-plus-circle">&nbsp; Add Student Information</a>
    </div>
    <div class="container my-2">
    <!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">All Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#section">Section</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">
  <div class="table table-responsive table-bordered mt-2">
  <table class="table">
  <thead class="bg-light">
  <tr>
 <th>#</th>
  <th>picture</th>
  <th>name</th>
  <th>sex</th>
  <th>address</th>
  <th>email</th>
  <th>option</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $i = 0;
  ?>
  @foreach($student as $key)
  <?php 
  $i = $i + 1 ;
  ?>
  <tr>
  <td class="py-4">{{$i}}</td>
  <td><img src="{{asset('storage/images/'.$key->image) }}" class="rounded-circle" alt="no image" width="40px"/></td>
  <td class="py-4">{{$key->name}}</td>
  <td class="py-4">{{$key->sex}}</td>
  <td class="py-4">{{$key->address}}</td>
  <td class="py-4">{{$key->email}}</td>
  <td class="py-4">
    <a class="btn btn-success">Action</a>
    <a class="btn btn-danger"><span class="fas fa-trash"></span>&nbsp;Delete</a>
    <a class="btn btn-primary" href="{{route('student.edit', $key->student_id)}}"><span class="fas fa-edit"></span>&nbsp;Edit</a>
  </td>
  </tr>
  </tr>
@endforeach
</tbody>
</table>
<div class="clearfix">
<div class="float-left pl-2">
  <p>showing {{$student->count()}} of {{$student->total()}}</p>
  </div>
  <div class="float-right pr-2">
  {{$student->links()}}
  </div>
</div>
</div>
</div>
</div>
<div class="tab-pane container" id="section">
</div>
</div>
  </div>
    @endsection