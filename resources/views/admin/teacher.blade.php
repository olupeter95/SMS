@extends('admin.layouts')
@section('section')
<div class="content-wrapper bg-white">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><span class="fas fa-arrow-circle-right" style="font-size:20px;"></span>&nbsp;Manage Teacher</h1>
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
        <h4>Teacher Information Page</h4>
    </div>
    </div>
    <div class="m-2">
    <button type="button" data-toggle="modal" data-target="#mymodal" class="btn btn-dark"><span class="fas fa-plus-circle">&nbsp; Add Teacher Information</button>
    </div>
    <!--modal-->
    <div class="modal fade" id="mymodal">
    <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header ">
    <h6 class="modal-title text-centered">Add New Teacher Information</h6>
    <button class="close" type="button" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
    <div class="card-body bg-white">
    <form method="post" enctype="multipart/form-data" action="{{route('teacher.store')}}">
    @csrf
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Name</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="name" placeholder="enter teacher's name"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Birthday</label>
    </div>
    <div class="col-md-9">
    <input type="date" class="form-control py-3" name="bday"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Gender</label>
    </div>
    <div class="col-md-9">
    <select name="sex" class="form-control">
    <option value="male">male</option>
    <option value="female">female</option>
    </select>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Religion</label>
    </div>
    <div class="col-md-9">
    <select name="religion" class="form-control">
    <option value="christianity">Christianity</option>
    <option value="islam">Islam</option>
    </select>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Blood Group</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="b_group" placeholder="blood group"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Address</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="address" placeholder="address"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Phone Number</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="phone" placeholder="enter phone number"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Email</label>
    </div>
    <div class="col-md-9">
    <input type="email" class="form-control py-3" name="email" placeholder="email"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">password</label>
    </div>
    <div class="col-md-9">
    <input type="password" name="pwd" class="form-control py-2" placeholder="password"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Picture</label>
    </div>
    <div class="col-md-9">
    <img src="" id="img-tag" style="width:150px;height:150px"></br>
    <input type="file" id="profile-img-tag" name="image" class="my-2"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row justify-content-center">
    <div class="col-md-6">
        <button class="btn btn-success btn-block btn-md">Save</button>
        </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container my-2">
    <!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">All Teacher</a>
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
  @foreach($teacher as $key)
  <?php 
  $i = $i + 1 ;
  ?>
  <tr>
  <td class="py-4">{{$i}}</td>
  <td><img src="{{asset('storage/images/'.$key->image) }}" class="rounded-circle" alt="no image" width="40px"/></td>
  <td class="py-4">{{$key->name}}</td>
  <td class="py-4">{{$key->gender}}</td>
  <td class="py-4">{{$key->address}}</td>
  <td class="py-4">{{$key->email}}</td>
  <td class="py-4">
    <a class="btn btn-success">Action</a>
    <a class="btn btn-danger"><span class="fas fa-trash"></span>&nbsp;Delete</a>
    <a class="btn btn-primary" href="#"><span class="fas fa-edit"></span>&nbsp;Edit</a>
  </td>
  </tr>
  </tr>
@endforeach
</tbody>
</table>
<div class="clearfix">
<div class="float-left pl-2">
  <p>showing {{$teacher->count()}} of {{$teacher->total()}}</p>
  </div>
  <div class="float-right pr-2">
  {{$teacher->links()}}
  </div>
</div>
</div>
</div>
</div>
</div>
  </div>
    @endsection