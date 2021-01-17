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

<h1>Adoption Pet List</h1>
<h2></h2>

@if (session('status'))
    <div class="alert">
        {{ session('status') }}

    </div>
@endif




@foreach($data as $i)
<div class="container">
@csrf
<img src="data:image/png;base64,{{ chunk_split(base64_encode($i->pet_image)) }}">
<div class="detail">
<p>Pet Name: {{$i->petName}}</p> <p>Breed/Type: {{$i->petType}}</p> <p>Age: {{$i->Age}}</p>
<ul><a href={{"delete/".$i->petID}}>Delete</a></ul>
<ul><a href={{"storePet"}}>Add new pet</a></ul>
</div>
</div>
@endforeach


</html>

