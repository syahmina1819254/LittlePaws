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

.detail{
     font-size: 20px;
}

button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  float:center;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}
</style>

<h1>Adoption Request</h1>
<h2>Below are the pet that you have submitted the request for adoption</h2>
@foreach($status as $i)

<div class="container">

<img src="data:image/png;base64,{{ chunk_split(base64_encode($i->pet_image)) }}">
<div class="detail">
<p>Adopt No.:{{$i->adoptID}}</p> 
<p>Pet Name: {{$i->petName}}</p> 
<p>Breed/Type: {{$i->petType}}</p>
<p>Request Status: {{$i->reqStatus}}</p> 
<p>Request Date: {{$i->created_at}}</p>
</div>

</div>

</form>
@endforeach

</html>