@extends('admin.layouts')
@section('section')
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><span class="fas fa-arrow-circle-right" style="font-size:20px;"></span>&nbsp;Add Bulk Student</h1>
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
        <span class="fas fa-plus-circle"></span> Add Bulk Student Form
    </div>
    <div class="card-body bg-white">
    <form method="post" enctype="multipart/form-data" action="{{route('new.store')}}">
    @csrf
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="form-row">
    <div class="col-md-3 py-2">
    <label for="name">Select excel file</label>
    </div>
    <div class="col-md-9">
    <input type="file" class="my-2" name="name"/>
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
    <div class="form-row justify-content-center">
    <div class="col-md-6">
        <button class="btn btn-success btn-block btn-md"><span class="fa fa-download"></span>&nbsp;Upload and import</button>
        </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
</div>
@endsection