<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="{{asset('js/app.js')}}"defer></script>
  <script src="{{asset('js/main.js')}}"defer></script>
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/custom.css')}}" rel="stylesheet">
  
  <title>Todos</title>
  </head>
  <body class="bg-white">
  <div class="jumbotron-fluid">
  <div class="row">
  <div class="col-md-3 col-sm-4">
  <p class="text-primary" id="head">Hairxify</p>
  </div>
  <div class="col-md-4 col-sm-4 pl-5">
  <ul class=" nav nav-tabs">
  <li class="nav-item">
  <a class="nav-link active" data-toggle="tab" href="#market">Marketplace</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" data-toggle="tab" href="#directory">Beautican Directory</a>
  </li>
  <div style="border:0.5px groove black; margin-top:8px; margin-bottom:8px"></div>
  <li class="nav-item">
  <a class="nav-link" data-toggle="tab" href="#job">Jobs</a>
  </li>
  </ul>
  </div>
  <div class="col-md-5 col-sm-4">
  <ul class="right">
  <li><a href="#" class="btn text-dark" id="cd"><span class="fa fa-plus"></span>Post Your Ad</a></li>
  <li><a href="#" class="btn btn-warning text-dark">Add Your Business</span></a></li>
  <li><a href="#" class="text-dark pl-2">signin/register</a></li>
  </ul>
  </div>
  </div>
  </div>
  <nav class="navbar navbar-expand-md bg-custom navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsible">
  <span class="navbar-toggler-icon">
  </button>
  <div class="collapse navbar-collapse" id="collapsible">
      <ul class="navbar-nav" id="main-menu">
          <li class="nav-item">
              <a class="nav-link">Styling Tools</a>
          </li>
          <li class="nav-item">
              <a class="nav-link">Barbing Tools</a>
          </li>
          <li class="nav-item">
              <a class="nav-link">Human Hair weaves</a>
          </li>
          <li class="nav-item">
              <a class="nav-link">Lace Wigs</a>
          </li>
          <li class="nav-item">
              <a class="nav-link">Snythetic Wigs</a>
          </li>
          <li class="nav-item">
              <a class="nav-link">Styling product</a>
          </li>
          <li class="nav-item">
              <a class="nav-link">Make Up</a>
          </li>
          <li class="nav-item">
          <a class="nav-link">Post Job</a>
          </li>
          </ul>
       </div>
</nav>
<div class="jumbotron-fluid">
<div class="carousel slide" id="info" data-ride="carousel">
<ul class="carousel-indicators invisible">
<li data-target="#info" data-slide-to="0" class="active"></li>
<li data-target="#info" data-slide-to="1"></li>
<li data-target="#info" data-slide-to="1"></li>
</ul>
<div class="carousel-inner">
<div class="carousel-item drk active">
<img class="carousel-img" src="{{asset('images/hairstylist.jpg')}}" alt="load" style="width:100%; height:500px;">
</div>
<div class="carousel-item drk">
<img class="carousel-img" src="{{asset('images/hairstylist.jpg')}}" alt="load" style="width:100%; height:500px;">
</div>
<div class="carousel-item drk">
<img class="carousel-img" src="{{asset('images/hairstylist.jpg')}}" alt="load" style="width:100%; height:500px;">
</div>
<div class="carousel-caption">
    <div class="row justify-content-center">
<div class="col-md-8">
<form>
<div class="input-group mb-0 mt-0 bg-white">
<input class="form-control my-1 ml-3" type="text" placeholder="Marketplace">
<input class="form-control my-1 ml-3" type="text" placeholder="where?">
<div style="border:1px solid black; margin-top:8px; margin-bottom:8px"></div>
<input class="form-control my-1 ml-3" type="text" placeholder="where you can gget your styling">
<div class="input-group-append">
<div class="input-group-text mx-1 my-1">
<input class="form-checkbox" type="checkbox">&nbsp;NEAR ME
</div>
<button class="btn btn-primary px-4" type="button" id="curve"><i class="fa fa-search"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<a class="carousel-control-prev" href="#info" data-slide="prev">
  <span class="carousel-control-prev-icon invisible"></span>
</a>
<a class="carousel-control-next" href="#info" data-slide="next">
  <span class="carousel-control-next-icon invisible"></span>
</a>
</div>
</div>
<div class="container-fluid pt-3">
<div class="container pt-3">
<h3 class="text-primary">Recommended Products</h3>
<hr class="mt-2">
   <div class="row" >
       <div class="col-md-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
        </div>

</div>
<hr class="mt-3">
<h3 class="text-primary">Trending Classified Ads</h3>
<hr class="mt-2">
   <div class="row" >
       <div class="col-md-9">
        <div class="row">
       <div class="col-md-4">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4 pt-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4 pt-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4 pt-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4 pt-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4 pt-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4 pt-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4 pt-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4 pt-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
<div class="col-md-4 pt-3">
       <div class="row">
       <div class="col-md-12">
           <div class="card">
           <img class="card-img-top" src="{{asset('images/hairstylist.jpg')}}" alt="no pictures" style="height:200px;">
        </div>
        </div>
        </div>
        <div class="row pt-2">
       <div class="col-md-12">
           <div class="card bg-light">
            <h4 class="card-title p-2">stunning skin lashes</h4>
            <p class="card-text px-2">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p>
            <h4 class="card-text px-2 text-primary">&#8358;500,000</h4>
            <ul class="card-foot px-2">
            <li class="text-primary" id="vl">50 views</li>
            <li class="text-primary" id="vl">3.0 Rating</li>
            <li class="text-primary">share</li>
            </ul>
        </div>
        </div>
        </div>
</div>
</div>
</div>
<div class="col-md-3">
    <div class="row">
    <div class="col-md-12">
    <div class="card bg-dark p-0">
        <h5 class="text-light px-3 "><span class="fa fa-map-marker pt-2" style="font-size:25px; color:red;">
    </span>&nbsp;&nbsp;&nbsp;Barber shop near you</h5>
</div>
</div>
</div>
<div class="row pt-3">
    <div class="col-md-12">
<div class="card">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
<hr class="mt-2">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
<hr class="mt-2">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
<hr class="mt-2">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
<hr class="mt-2">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
<hr class="mt-2">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
</div>
</div>
</div>
<div class="row pt-5">
    <div class="col-md-12">
    <div class="card p-0" id="news">
        <h5 class="text-light px-3 "><span class="fa fa-map-marker pt-2" style="font-size:25px; color:red;">
    </span>&nbsp;&nbsp;&nbsp;Hair salon near you</5>
</div>
</div>
</div>
<div class="row pt-3">
    <div class="col-md-12">
<div class="card">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
<hr class="mt-2">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
<hr class="mt-2">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
<hr class="mt-2">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
<hr class="mt-2">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
<hr class="mt-2">
<p class="card-text">15 Bajowa line off kabiru agbaoye street, obalende Lagos</p> 
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container pt-3">
    <img src="{{asset('images/grooming essential.jpg')}}" style="width:100%; height:200px;"/>
<hr class="mt-3">
<h3 class="text-primary">Top Trending Search</h3>
<hr class="mt-3">
<div class="row" id="trends">
    <div class="col-md-3">
        <ul>
            <li>Hair Clippers</li>
            <li>Hair scissors</li>
            <li>Electric Shaver</li>
            <li>Shaving Blade</li>
            <li>Hair Clipper Comb</li>
            <li>Hair Dryer Salon Barber</li>
</ul>
</div>
<div class="col-md-3">
<ul>
            <li>Hair Clippers</li>
            <li>Hair scissors</li>
            <li>Electric Shaver</li>
            <li>Shaving Blade</li>
            <li>Hair Clipper Comb</li>
            <li>Hair Dryer Salon Barber</li>
</ul>
</div>
<div class="col-md-3">
<ul>
            <li>Hair Clippers</li>
            <li>Hair scissors</li>
            <li>Electric Shaver</li>
            <li>Shaving Blade</li>
            <li>Hair Clipper Comb</li>
            <li>Hair Dryer Salon Barber</li>
</ul>
</div>
<div class="col-md-3">
<ul>
            <li>Hair Clippers</li>
            <li>Hair scissors</li>
            <li>Electric Shaver</li>
            <li>Shaving Blade</li>
            <li>Hair Clipper Comb</li>
            <li>Hair Dryer Salon Barber</li>
</ul>
</div>
</div>
</div>
</div>
<div class="container-fluid pt-4" id="footer">
        <div class="container">
        <div class="row">
            <div class="col-md-3">
                
                <ul class="footer-list">
                <h3 id="footer-header">About Us</h3>
                    <li>About Hairxify</li>
                    <li>Blog</li>
                    <li>Contact us</li>
                    <li>Privacy Policy</li>
                    <li>Terms & Condition</li>
</ul>
</div>
<div class="col-md-3">
              
                <ul class="footer-list">
                <h3 id="footer-header">Quick Links</h3>
                    <li>About With Us</li>
                    <li>Barber Shop</li>
                    <li>City Guide</li>
</ul>
</div>
<div class="col-md-3">
                
                <ul class="footer-list">
                <h3 id="footer-header">More Info</h3>
                    <li>Safety Tips</li>
                    <li>Refund Policy</li>
                    <li>Help/FAQ</li>
</ul>
</div>
<div class="col-md-3">
                <h3 id="footer-header">Follow Us</h3>
                <i class="fa fa-facebook-square" aria-hidden="true" style="font-size:30px;color:#ffffff"></i>
        <i class="fa fa-instagram" aria-hidden="true" style="font-size:30px;color:#ffffff"></i>
        <i class="fa fa-twitter-square" aria-hidden="true" style="font-size:30px; color:#ffffff"></i>
</div>
</div>
</div>
</div>
</div>
</div>
 </body>
</html>
