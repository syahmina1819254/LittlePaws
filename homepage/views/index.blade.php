@extends('homepage')

@section('content')

<div class="container">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/header 3.png" alt="Image" style="width:100%">
        <div class="carousel-caption">
          <h1 style="font-weight: bold" style="color:black">WELCOME TO LITTLEPAWS</h1>
          <h3 style="font-weight: bold">Premium Pet Hotel with Best Boarding  <br> and Adoptions Pets services</h3>
        </div>      
      </div>

      <div class="item">
        <img src="images/header rabbit.jpg" alt="Image">
        <div class="carousel-caption">
          <h1 style="font-weight: bold" style="color:black">WELCOME TO LITTLEPAWS</h1>
          <h3 style="font-weight: bold">Premium Pet Hotel with Best Boarding  <br> and Adoptions Pets services</h3>
        </div>      
      </div>
    </div>

    <h3>Room Available for Reservation</h3>
    <div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Economy Room</div>
        <div class="panel-body"><img src="images/room 1.png" class="img-responsive" style="width:100%" alt="Image"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Comfy Room</div>
        <div class="panel-body"><img src="images/room2.png" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">VIP Room</div>
        <div class="panel-body"><img src="images/room 3 vip.png" class="img-responsive" style="width:100% " alt="Image"></div>

      </div>
    </div>
  </div> <br>

    <h3>Pets Available for Adoption</h3>
    <div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">English Lop Rabbit</div>
        <div class="panel-body"><img src="images/rabbit1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Scottish Fold Cat</div>
        <div class="panel-body"><img src="images/vadim.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Polydactyl cat</div>
        <div class="panel-body"><img src="images/tomes.jpg" class="img-responsive" style="width:100% " alt="Image"></div>
      </div>
    </div>
    <br>
  </div>



</div>


@stop