@extends('layout.home')

@section('content')
<style>
   .scontent{
       font-size:40px;
	   padding:5px;
   
   }
   .scontent1{
       font-size:35px;
	   padding:10px;
   
   }
    .scontent2{
       font-size:30px;
	   padding:10px;
   
   }
   .center {
	  margin-top:8%;
	  
	  padding: 20px;
   }
    .center2 {
	  margin-top:3%;
	  
	  padding: 10px;
   }
   
   .center4{
	  margin-top:5%;
	  
	  padding: 10px;
   }
   
   .img{
	  height:300px;
    }
	.pra{
	  text-align: justify;
	  font-size:20px;
	  
	}
	.wwd{
	  color:white;
	}
	
	.abtacn{
	  margin-top:5%;
	  
	  padding: 10px;
	}
	.rw{
	   margin-top:15px;
	
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
  -webkit-animation-duration: 2.5s;
  animation-name: fade;
  animation-duration: 2.5s;
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
<section>
        <div class="lgx-slider">
            <div class="lgx-banner-style">
                <div class="lgx-inner">

                    <div id="lgx-main-slider" class="owl-carousel ">
                    @php 
                          $i=0;
                    @endphp   
                        
                     @foreach( $slider as $s )
                        
                               @if( $i == 0 )
                                <div class="lgx-item-common lgx-item-left">

                                    <div class="col-sm-12g">
                                        <div class="slider-text-single">
                                            <figure>
                                                <img src="assets/img/bg.jpg" alt="slide"/>
                                                <figcaption>
                                                    <div class="lgx-container">
                                                        <div class="lgx-hover-link">
                                                            <div class="lgx-vertical">
                                                            
                                                        
                                                                <p class="scontent1 lgx-title">{{ $s->title }}</p>
                                                                <p class="scontent1 lgx-subtitle">{{ $s->subtitle }}</p>
                                                                <p class="scontent1 lgx-subtitle">{{ $s->description }}</p>
                                                                <p class="scontent2 lgx-subtitle"><span> {{ $s->time }} </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                @php 
                                  $i=1;
                                @endphp
                                @else
                     
                           
                                    <div class="lgx-item-common lgx-item-right">
                                        <div class="col-sm-12g">
                                            <div class="slider-text-single">
                                                <figure>
                                                    <img src="assets/img/bg.jpg" alt="slide"/>
                                                    <figcaption>
                                                        <div class="lgx-container">
                                                            <div class="lgx-hover-link">
                                                                <div class="lgx-vertical">                                                     
                                                                    <p class="scontent lgx-title ">{{ $s->title }}</p>
                                                                    <p class="scontent1 lgx-subtitle ">{{ $s->subtitle }}</p>
                                                                    <p class="scontent1 lgx-subtitle ">{{ $s->description }}</p>
                                                                    <p class="scontent2 lgx-subtitle "><span>{{ $s->time }} </span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div> 
                                    </div>
                                @endif    

                        @endforeach
                  

                    </div>


              
                </div>
            
            </div>
        </div>
    </section>
    <!--SLIDER END-->


   


<section>
	<!--qoute-->
	<div id="lgx-speakers" class="lgx-speakers">
        <div class="lgx-inner">
			 <div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="lgx-single-speaker">
								<figure>
									<a class="profile-img" href="speakers-list.html"><img src="assets/img/sp1.jpg" alt="speaker"/></a>
									<figcaption>
										<a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
										<a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
										<a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
										<a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
									</figcaption>
								</figure>
								<div class="speaker-info">
									<h3 class="title"><a href="speaker-single.html">{{ $scompany->personName }}</a></h3>
									<h4 class="subtitle">{{ $scompany->personDesignation }}</h4>
								</div>
						</div>
					</div>

	                <div class="col-xs-12 col-sm-6 col-md-8 center">
							<div class="">
							    <h3>{{ $scompany->title }}</h3>
							    <p class="pra">
                                {{ $scompany->description }}
								</p>
						    </div>
					</div>					


					
				</div>
				
				
				<div class="row">
					

	                <div class="col-xs-12 col-sm-6 col-md-8 center2">
							<div class="">
							    <h3>{{ $SecondQuote->title }}</h3>
							    <p class="pra">
                                {{ $SecondQuote->description }}
								</p>
						    </div>
					</div>	

                    <div class="col-xs-12 col-sm-6 col-md-4">
						<div class="lgx-single-speaker">
								<figure>
									<a class="profile-img" href="speakers-list.html"><img src="assets/img/sp2.jpg" alt="speaker"/></a>
									<figcaption>
										<a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
										<a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
										<a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
										<a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
									</figcaption>
								</figure>
								<div class="speaker-info">
									<h3 class="title"><a href="speaker-single.html">{{ $SecondQuote->personName }}</a></h3>
									<h4 class="subtitle">{{ $SecondQuote->personDesignation }}</h4>
								</div>
						</div>
					</div>	


                    <div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="lgx-single-speaker">
									<figure>
										<a class="profile-img" href="speakers-list.html"><img src="assets/img/abt.jpg" alt="speaker"/></a>
										<figcaption>
											<a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
											<a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
											<a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
											<a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
										</figcaption>
									</figure>
									
							</div>
						</div>

	                    <div class="col-xs-12 col-sm-6 col-md-8 center4">
							<div class="">
							    <h3>{{ $aboutTeam->title }}</h3>
							    <p class="pra">
								{{ $aboutTeam->description }}
								</p>
						    </div>
					    </div>					


					
				    </div>	

                 <div class="row ">
					

	                <div class="col-xs-12 col-sm-6 col-md-7 ">
							<div class="">
							    <h3>{{ $about->title}}</h3>
							    <p class="pra">
                                {{ $about->description}}
								</p>
						    </div>
					</div>	

                    <div class="col-xs-12 col-sm-6 col-md-5 abtacn">
						<div class="lgx-single-speaker ">
								<figure>
									<a class="profile-img" href="speakers-list.html"><img class="img"src="assets/img/abtacn.jpg" alt="speaker"/></a>
									<figcaption>
										<a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
										<a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
										<a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
										<a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
									</figcaption>
								</figure>
								
						</div>
					</div>					


					
				</div>
			 </div>
	    </div>
	</div>		 
	
	
</section>
<!--SCHEDULE-->
<section>
    <div id="lgx-schedule" class="lgx-schedule">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading-area">
                            <h2 class="lgx-heading">
                                <span class="back-heading"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <span class="heading">Schedule</span>
                            </h2>
                            <p class="text">
                                Conferences dedicated to building remarkable events.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-tab">
                            <ul class="nav nav-pills text-center">
                                <li class="active"><a data-toggle="pill" href="#home"><h3>Day <span>01</span></h3> <p><span>27 </span>November, 2017</p></a></li>
                                <li><a data-toggle="pill" href="#menu1"><h3>Day <span>02</span></h3> <p><span>28 </span>November, 2017</p></a></li>
                                <li><a data-toggle="pill" href="#menu2"><h3>Day <span>03</span></h3> <p><span>29 </span>November, 2017</p></a></li>
                                <li><a data-toggle="pill" href="#menu3"><h3>Day <span>04</span></h3> <p><span>30 </span>November, 2017</p></a></li>
                            </ul>
                            <div class="tab-content lgx-tab-content text-center">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">09:00 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">10:30 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">11:50 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                        
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">12:20 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">01:20 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">10:20 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">12:30 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">10:20 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">10:20 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">10:20 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2">
                                                <div class="time-area">
                                                    <h4 class="time">10:20 <span>Am</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="author">
                                                    <a class="author-img" href="speaker-single.html"><img src="http://placehold.it/500x500" alt="Speaker"/></a>
                                                    <div class="author-info">
                                                        <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                        <p class="author-title">UI Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="schedule-info">
                                                    <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
           
        </div>
   
    </div>
</section> 

<section>
    <div id="lgx-sponsors" class="lgx-sponsors">
        <div class="lgx-inner-bg">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="lgx-heading-area">
                                <h2 class="lgx-heading">
                                    <span class="back-heading"><i class="fa fa-life-ring" aria-hidden="true"></i></span>
                                    <span class="heading">{{ $CommunitySupport->title }}</span>
                                </h2>
                                <p class="text" style="color:black">
                                {{ $CommunitySupport->subtitle }}
                                </p>
                                <p>
                                
                                {{ $CommunitySupport->description }}
                                </p>
                            </div>
                        </div>
                   
                    </div>
         
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="sponsors-area">
                                <div class="single">
                                    <a class="" href="#"><img src="assets/img/sg3.jpg" alt="sponsor"/></a>
                                </div>
                                <div class="single">
                                    <a class="" href="#"><img src="assets/img/sg5.jpg" alt="sponsor"/></a>
                                </div>
                                <div class="single">
                                    <a class="" href="#"><img src="assets/img/sg4.jpg" alt="sponsor"/></a>
                                </div>
                                <div class="single">
                                    <a class="" href="#"><img src="assets/img/sg3.jpg" alt="sponsor"/></a>
                                </div>
                                <div class="single">
                                    <a class="" href="#"><img src="assets/img/sg5.jpg" alt="sponsor"/></a>
                                </div>
                                <div class="single">
                                    <a class="" href="#"><img src="assets/img/sg4.jpg" alt="sponsor"/></a>
                                </div>
                                <div class="single">
                                    <a class="" href="#"><img src="assets/img/sg3.jpg" alt="sponsor"/></a>
                                </div>
                            </div>
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