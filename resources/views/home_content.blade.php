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

                        <!--SLIDER ITEM 1-->

                        <div class="lgx-item-common lgx-item-left">

                            <div class="col-sm-12g">
                                <div class="slider-text-single">
                                    <figure>
                                        <img src="assets/img/bg.jpg" alt="slide"/>
                                        <figcaption>
                                            <div class="lgx-container">
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                      
												
														<p class="scontent1 lgx-title">ACN SUPER SATURDAY</p>
														<p class="scontent1 lgx-subtitle">LIVE Presentation & Training</p>
														<p class="scontent1 lgx-subtitle">Co-Founders, COCs, SVPs & Leaders</p>
														<p class="scontent2 lgx-subtitle"><span>Saturday @</span>12pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div> <!--//.col-->
                        </div>
                        <!--SLIDER ITEM 1 End-->

                        <!--SLIDER ITEM 2-->
                        

                        <!--SLIDER ITEM 3-->
                        <div class="lgx-item-common lgx-item-right">
                            <div class="col-sm-12g">
                                <div class="slider-text-single">
                                    <figure>
                                        <img src="assets/img/bg.jpg" alt="slide"/>
                                        <figcaption>
                                            <div class="lgx-container">
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">                                                     
														<p class="scontent lgx-title ">BRISBANE</p>
														<p class="scontent1 lgx-subtitle ">International Event</p>
														<p class="scontent1 lgx-subtitle ">Co-Founders, COCs, SVPs & Leaders</p>
														<p class="scontent2 lgx-subtitle "><span>26 & 27</span>September</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div> <!--//.col-->
                        </div>
                        <!--SLIDER ITEM 3 End-->

                    </div> <!--//.lgx-main-slider-->


                    <!-- //.CONTAINER -->
                </div>
                <!-- //.INNER -->
            </div>
        </div>
    </section>
    <!--SLIDER END-->


    <!--circular-countdown-->
   
    <!--circular-countdown End-->

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
									<h3 class="title"><a href="speaker-single.html">MD Rahman</a></h3>
									<h4 class="subtitle">Senior Vice President & Circle of Champions</h4>
								</div>
						</div>
					</div>

	                <div class="col-xs-12 col-sm-6 col-md-8 center">
							<div class="">
							    <h3>Solid Company - Proven System and Leadership</h3>
							    <p class="pra">
								  When MD. Rahman saw his first onstage promotion at an international ACN convention in the fall of 2012, he was hooked. 
								  “I was on a quest to achieve the American Dream and secure a future for my family,” 
								  he says. Rahman realized he’d been handed an opportunity to change the course of his family’s life. 
								  “I was highly inspired and right away set my goal to become the first Bangladeshi Regional Vice President 
								  (RVP) in the United States within 12 months,” he says. “And, yes, with God’s grace, I was able 
								  to achieve my goal within the set time.”
								</p>
						    </div>
					</div>					


					
				</div>
				
				
				<div class="row">
					

	                <div class="col-xs-12 col-sm-6 col-md-8 center2">
							<div class="">
							    <h3>Lorem Ipsum</h3>
							    <p class="pra">
								  I am a family man, married to my amazing wife Lisa, 
								  and been blessed with 3 gorgeous daughters Holly, Nicky, 
								  and Monique. I stumbled into this industry by accident and 
								  have now been in it for close to 20 years! It has been one 
								  of life’s most exhilarating journeys having been fortunate 
								  enough to have gained my experience on both sides of the 
								  industry, both the field side having built a significant 
								  organisation and corporate side having been General Manager 
								  of multinational organisations leading 5 country markets 
								  across Asia Pacific.

                                  I am nobody special, just a average person chasing down a 
								  dream…and on a mission to realize a simple Vision “Touching 
								  hearts, and changing lives”! It only takes one person to make 
								  an impact on the world, so with that said I hope to be able to 
								  serve you to realize your life’s journey no matter how big or 
								  how small!
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
									<h3 class="title"><a href="speaker-single.html">Mark Boonzaier</a></h3>
									<h4 class="subtitle">Senior Vice President</h4>
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
							    <h3>About Team Tiger</h3>
							    <p class="pra">
								 Rockstar Team Tiger is a group of passionate entrepreneurs 
								 working towards helping people around the world to achieve 
								 their dreams and goals.
								</p>
						    </div>
					    </div>					


					
				    </div>	

                 <div class="row ">
					

	                <div class="col-xs-12 col-sm-6 col-md-7 ">
							<div class="">
							    <h3>About ACN</h3>
							    <p class="pra">
								Founded in 1993, ACN provides you with a Home Based Opportunity 
								with the total support of the company and the team behind you every 
								step of the way.
                                ACN provides opportunity to individuals like you to become an 
								Independent Business Owner and offer the services that people 
								are already using and spending money on every day, including 
								phone service, wireless, natural gas and electricity, merchant 
								services, high-speed Internet, TV, home security and automation 
								and more. So there’s no change in buying habits, and you’ll never 
								have to convince someone to purchase products they don’t need or 
								can’t afford.
                                Leverage the power of Residual Income.
                                ACN provides outstanding service and support to Independent 
								Business Owners and their customers. They are focused in helping 
								as many people to help change their lives with hard work and 
								dedication. Now in four continents and 27 Countries and more on 
								the way.
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
	
	
	<!--end qoute-->


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
                                                <!--//.single tab-->
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
                                                <!--//.single tab-->
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
                                                <!--//.single tab-->
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
                                                <!--//.single tab-->
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
                                                <!--//.single tab-->
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
                                                <!--//.single tab-->
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
                                                <!--//.single tab-->
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
                                                <!--//.single tab-->
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
                                                <!--//.single tab-->
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
                                                <!--//.single tab-->
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
                                                <!--//.single tab-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--SCHEDULE END-->
<!-- <section>
    <div class="container">
	           <div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 mdl">
					    
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
</section> -->
<!--SPONSORED-->
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
                                    <span class="heading">COMMUNITY SUPPORT</span>
                                </h2>
                                <p class="text">
                                Together We Can Truly Make A Difference
                                </p>
                                <p>ACN supports a range of organisations, both on a local and global scale. 
						We focus our efforts on organisations directly impacting children. 
						At ACN we believe that when you impact the life of a child, you do more 
						than just change their day; you change their life. Every year ACN hosts 
						many International Training Events in cities around the world. At every event, 
						we collect contributions from thousands of generous ACN Independent Business Owners 
						and employees. ACN then matches these contributions dollar-for-dollar.
                        </p>
                            </div>
                        </div>
                        <!--//main COL-->
                    </div>
                    <!--//main row-->
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
                        <!--//col-->
                    </div>
                   
                    <!--//row-->
                   
                </div>
                <!--//container-->
            </div>
        </div>
        <!--//lgx-inner-->
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