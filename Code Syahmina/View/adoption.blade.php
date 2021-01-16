<html>

<style>
h1{
  font-size: 50px;
  text-align:center;
  margin:50px;
}
h2{
  text-align:center;

}
img{
  border-radius: 20px;
  margin-left:40px;
  margin-right:50px;
  height:200px; 
  width:200px;
  float:left;
}

.container{
  border-radius: 25px;
  border: 2px ; 
  width: 50%;
  height: 35%; 
  padding:20px; 
  margin-bottom:20px;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 5px 10px 18px #888888;
}
.container2{
  border-radius: 25px;
  background-color: #e3e3e4;
  border: 2px ; 
  width: 50%;
  height: 35%; 
  padding:20px; 
  margin-bottom:20px;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 5px 10px 18px #888888;
}

.detail{
     font-size: 20px;
}

.alert{
  color:red;
  text-align:center;
  margin:10px;
  font-size: 30px;
}

button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  float:right;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

</style>

<h1>Pet For Adoption</h1>
<h2>Please read the term and condition before making any adoption request. Thank You!</h2>

@if (session('status'))
    <div class="alert">
        {{ session('status') }}
        Click <a href="/status">here</a> to check the status
    </div>
@endif




@foreach($data as $i)
<div class="container">
<form action="{{route('confirmReq')}}" method="post" enctype="multipart/form-data">
@csrf
<img src="data:image/png;base64,{{ chunk_split(base64_encode($i->pet_image)) }}">
<div class="detail">
<p>Pet Name: {{$i->petName}}</p> <p>Breed/Type: {{$i->petType}}</p> <p>Age: {{$i->Age}}</p> <button type="submit" name="submit">Adopt Me</button></td>
</div>
<input type="hidden"  name="UserID" value="3457">
<input type="hidden"  name="adoptID" value="<?php echo rand(1000, 5000);?>">
<input type="hidden"  name="petID" value="{{$i->petID}}">
</div>

</form>
@endforeach

<div class="container2">
<h2>Term And Condition</h2>
<p>1. The request are on first come first serve basis</p>
<p>2. We will give a call for interview for your adoption request</p>
<p>3. A user can only request for a pet in one time. You cannot submit the same request of a pet more than once or else your submission will be rejected</p>
<p>4. Little paws have the authority to reject your request</p>
</div>


</html>

