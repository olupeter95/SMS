@extends('admin.layouts')
@section('section')
<div class="content-wrapper bg-white">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><span class="fas fa-arrow-circle-right" style="font-size:20px;"></span>&nbsp;Manage Class</h1>
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
   
    <div class="container my-2">
    <!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">All Class</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1"><span class="fas fa-plus-circle"></span>&nbsp;Add Class</a>
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
  <th>class name</th>
  <th>numeric name</th>
  <th>teacher</th>
  <th>option</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $i = 0;
  ?>
  @foreach($group as $key)
  <?php 
  $i = $i + 1 ;
  ?>
  <tr>
  <td class="py-4">{{$i}}</td>
  <td class="py-4">{{$key->name}}</td>
  <td class="py-4">{{$key->name_numeric}}</td>
  <td class="py-4">{{$key->teacher_id}}</td>
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
  <p>showing {{$group->count()}} of {{$group->total()}}</p>
  </div>
  <div class="float-right pr-2">
  {{$group->links()}}
  </div>
</div>
</div>
</div>
<div class="tab-pane container fade" id="menu1">

    <div class="card-body bg-white">
    <form method="post" enctype="multipart/form-data" action="{{route('parent.store')}}">
    @csrf
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Name</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="name" placeholder="enter class name"/>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Name Numeric</label>
    </div>
    <div class="col-md-9">
    <input type="text" class="form-control py-3" name="n_num" placeholder="email"/>
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
  </div>
    @endsection