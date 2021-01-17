<html>
<style>
h1{
  font-size: 50px;
  margin:50px;
}

.container{
  border-radius: 25px;
  border: 2px ; 
  width: 100%;
  height: 100%; 
  padding:20px; 
  margin-bottom:20px;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 5px 10px 18px #888888;
}

.detail{
     font-size: 20px;
     align:center;
}

.alert{
  color:red;
  margin:10px;
  font-size: 15px;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
  border-radius: 4px;
}
</style>
<h1>Add new pet for Adoption</h1>
<form action="{{route('store')}}" method="post" enctype="multipart/form-data">

@csrf
<div class="container">
<div class="detail">
<p>Enter petID:</p><input type="text" name="petID">
<div class="alert">@error ('petID'){{$message}}@enderror </div>
<p>Enter petName:</p><input type="text" name="petName">
<div class="alert">@error ('petName'){{$message}}@enderror </div>
<p>Enter Breed/Type:</p><input type="text" name="petType">
<div class="alert">@error ('petType'){{$message}}@enderror </div>
<p>Enter Age:</p><input type="text" name="Age">
<div class="alert">@error ('Age'){{$message}}@enderror </div>
<p>Insert pet image:</p><input type="file" name="pet_image">
<br>
<input class="button" type="submit" name="store_pet" value="Save">
<ul><a href={{"petList"}}>Cancel</a></ul> 
</div>
</div>




</form>

</html>
