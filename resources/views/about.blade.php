@extends('layout.home')

@section('content')

<style>

.br{
        background: url('assets/img/bg.jpg') top left no-repeat;
        -webkit-background-size: auto auto, cover;
        -o-background-size: auto auto, cover;
        -moz-background-size: auto auto, cover;
        background-size: auto auto, cover;
        height:400px;
    }
.mdl{
	  text-align:center;
	}
	
	img {vertical-align: middle;}
    /* Slideshow container */
.slideshow-container {
  position: relative;
  margin-left:10%;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
		
</style>
<section class="bn">
    <div class="br">
        <div class="lgx-inner-bg">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <h2 class="lgx-heading lgx-heading-brand">
                                    <span class="back-heading"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    <span class="heading">ABOUT ROCKSTAR TEAM TIGER</span>
                                </h2>
                               
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </div>
</section>
<section>
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 mdl">
						<h3>{{ $WinTeam->title }}</h3>
						<h4>{{ $WinTeam->subtitle }}</h4>
						<p>
						{{ $WinTeam->description }}
						</p>
						<hr>
					</div>
					<div class="col-md-2">
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 mdl">
						<h3>{{ $Vision->title }}</h3>
						<h4>{{ $Vision->subtitle }}</h4>
						<p>
						{{ $Vision->description }}
						</p>
						<hr>
					</div>
					<div class="col-md-2">
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 mdl">
						<h3>{{ $ProvenSystem->title }}</h3>
						<h4>{{ $ProvenSystem->subtitle }}</h4>
						<p>
						{{ $ProvenSystem->description }}
                        </p>
						<hr>
					</div>
					<div class="col-md-2">
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 mdl">
						<h2>Meet Our Top Leaders!</h2>

						<hr>
					</div>
					<div class="col-md-2">
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 mdl">
						<h1>Giving Back</h1>

						<hr>
					</div>
					<div class="col-md-2">
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 mdl">
					    <img src="{{ $Hunger->image }}" alt="Logo"/>
						<h2>{{ $Hunger->title }}</h2>
						<h3>{{ $Hunger->subtitle }}</h3>
	                    <p>{{ $Hunger->description }}
                        </p>
						<hr>
					</div>
					<div class="col-md-2">
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 mdl">
					   
						<h2>{{ $CommunitySupport->title }}</h2>
						<h3>{{ $CommunitySupport->subtitle }}</h3>
	                    <p>{{ $CommunitySupport->description }}
                        </p>
						<hr>
					</div>
					<div class="col-md-2">
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
					   <div class="slideshow-container">

							<div class="mySlides fade">
							
							  <img src="assets/img/sg2.jpg"  style="width:22%;height:200px;">
							  <img src="assets/img/sg3.jpg"  style="width:22%;height:200px;">
							  <img src="assets/img/sg4.jpg"  style="width:22%;height:200px;">
							  <img src="assets/img/sg5.jpg"  style="width:22%;height:200px;">
						
							</div>

							<div class="mySlides fade">
							  
							  <img src="assets/img/sg5.jpg"  style="width:22%;height:200px;">
							  <img src="assets/img/sg3.jpg"  style="width:22%;height:200px;">
							  <img src="assets/img/sg4.jpg"  style="width:22%;height:200px;">
							  <img src="assets/img/sg2.jpg"  style="width:22%;height:200px;">
							  
							</div>

							

							</div>
							<br>

							<div style="text-align:center">
							  <span class="dot"></span> 
							  <span class="dot"></span> 
							  
							</div>
						
					</div>
					
				</div>
				
				
			</div>
		</div>
    </div>
</section>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides,2000); // Change image every 2 seconds
}
</script>
@endsection