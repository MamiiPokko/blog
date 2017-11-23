@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@section('content')
<style>
    .mySlides {display:none;}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h2 class="w3-center">Automatic Slideshow</h2>
                    <div class="w3-content w3-section" style="max-width:500px">
                        <img class="mySlides" src="{{URL('images/admin.jpg')}}" style="width:100%">
                        <img class="mySlides" src="{{URL('images/owner.jpg')}}" style="width:100%">
                        <img class="mySlides" src="{{URL('images/customer.jpg')}}" style="width:100%">
                        <img class="mySlides" src="{{URL('images/Capture.jpg')}}" style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
@endsection
