<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/logo.png">
    <title>Report</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<div class="all">
      <div>
      <center><h1 class = "heading">Report of all blood donors details</h1></center>
      <hr class="line">
      </div>
    @foreach($donor as $blooddonor)
    <div>
         <ul>
       
             <h2 class= "name">the details of the donor : {{$blooddonor->name}}</h2>
            <hr>
            <img src="/img/repe.png">
            <li><h3>Donor's email:{{$blooddonor->email}}</h3></li>
            <li><h3>Donor's age:{{$blooddonor->age}}</h3></li>
            <li><h3>Donor's phone:{{$blooddonor->number}}</h3></li>
            <li><h3>Donor's blood group:{{$blooddonor->bloodgroup}}</h3></li>
            <li><h3>Donor's weight:{{$blooddonor->wieght}}</h3></li>
            <li><h3>Donor's height:{{$blooddonor->hieght}}</h3></li>
         </ul>
  
         <hr class="line">
         
    </div>
    @endforeach
</div>
<p id="demo"  style="color:#EEE"></p>
<button  value="submit"  class="repback"><a href="/bloodbank"> Back home</a></button>


</body>
<script>
const d = new Date();
document.getElementById("demo").innerHTML = d;
</script>

</html>