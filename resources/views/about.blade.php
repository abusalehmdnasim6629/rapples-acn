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
						<h3>A WINNING TEAM</h3>
						<h4>How are we making a difference?</h4>
						<p>Rockstar Team Tiger is a group of highly motivated and successful entrepreneurs. 
						Our goal is to mentor, guide and help individuals from all background around the globe 
						to create a financially free lifestyle. Our team has helped create many success stories 
						and you can be the next!</p>
						<hr>
					</div>
					<div class="col-md-2">
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 mdl">
						<h3>OUR VISION</h3>
						<h4>Everyone deserves a chance!</h4>
						<p>Every one deserves a fare chance to achieve financial independence and time 
						freedom, live life to the fullest with people they love and care for. Our vision 
						is to enable, guide and support people from around the globe in their quest for 
						a better life.</p>
						<hr>
					</div>
					<div class="col-md-2">
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 mdl">
						<h3>A PROVEN SYSTEM</h3>
						<h4>A system that delivers results!</h4>
						<p>This business model is very simple and duplication is the key. 
						We are blessed with dedicated top leaders and high achievers of the Rockstar team, 
						who have developed a proven system that any one can easily follow and gain great success.
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
					    <img src="assets/img/pr.png" alt="Logo"/>
						<h2>END CHILDHOOD HUNGER</h2>
						<h3>Choosing ACN Means Making a Choice to End Childhood Hunger</h3>
	                    <p>Through ACN’s Project Feeding Kids program, you can help end childhood hunger 
						right here at home by simply purchasing and paying for services you are already 
						using and paying for anyway. When you become an ACN customer, a child gets fed. 
						And every time you pay your select ACN bills each month, another child gets fed. 
						ACN will provide 1.5 million meals this year.
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
					    <img src="assets/img/pr.png" alt="Logo"/>
						<h2>COMMUNITY SUPPORT</h2>
						<h3>Together We Can Truly Make A Difference</h3>
	                    <p>ACN supports a range of organisations, both on a local and global scale. 
						We focus our efforts on organisations directly impacting children. 
						At ACN we believe that when you impact the life of a child, you do more 
						than just change their day; you change their life. Every year ACN hosts 
						many International Training Events in cities around the world. At every event, 
						we collect contributions from thousands of generous ACN Independent Business Owners 
						and employees. ACN then matches these contributions dollar-for-dollar.
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
@endsection