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
   .cont{
	  padding:20px;
    }
    .tck{
	  margin:0 auto;
	  display:block;
	}
	
	.lnk h3{
	  margin:0 auto;
	  display:block;
	}
	.book{
	  margin-left:10%;
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
                                    <span class="back-heading"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    <span class="heading">MEETING & EVENT</span>
                                </h2>
                               
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
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
                          
                            <p class="text">
                                “The TRAINING EVENTS will do for you, what you alone cannot do for yourself.” Co-Founder Tony Cupisz
                            </p>
							  <h2 class="lgx-heading">
                                <span class="back-heading"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <span class="heading">Upcoming International, Regional and Local Events</span>
                            </h2>
							
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-tab">
                            <ul class="nav nav-pills text-center">
                                <li class="active"><a data-toggle="pill" href="#home"><h3>USA</h3></a></li>               
                                <li><a data-toggle="pill" href="#menu1"><h3>Australia</h3></a></li>
                                <li><a data-toggle="pill" href="#menu2"><h3>Japan</h3></a></li>
                               
                                
                            </ul>
                            <div class="tab-content lgx-tab-content text-center">
                                <div id="home" class="tab-pane fade in active">
									
									<div class="lgx-single-tab">
									    <div class="row">
									        <div class="col-xs-12 col-sm-10 count">									              
                                             <!--circular-countdown-->
											
													
										              <div id="lgx-circular" class="lgx-circular">
														<div class="circular-inner">

															<div class="container">
																<div class="row">
																	<div class="col-xs-10">
																		<div id="circular-countdown" data-date="2018-01-20 00:00:00" ></div>
																	</div>
																</div>
															</div>

														</div><!-- // Inner-->
													   </div>
															   

												<!--circular-countdown End-->
										
										    </div>
										</div>
									</div>
									
									 <div class="lgx-single-tab">
									    <div class="row">
									        <div class="col-xs-12 col-sm-10 count">									              
                                            
											    <div class="lnk">
												   <h3>For all USA based events and training, please follow the link below:</h3>
												   <h3><a href="http://www.wealthinstituteinc.com/choose" target="_blank">Here</a><h3/>
												</div>
										    </div>
										</div>
									</div>
									
								
									
									 
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                     
									
									<div class="lgx-single-tab">
									    <div class="row">
									        <div class="col-xs-12 col-sm-10 count">									              
                                             <!--circular-countdown-->
											
													
										              <div id="lgx-circular" class="lgx-circular">
														<div class="circular-inner">

															<div class="container">
																<div class="row">
																	<div class="col-xs-10">
																		<div id="circular-countdownn" data-date="2018-01-20 00:00:00" ></div>
																	</div>
																</div>
															</div>

														</div><!-- // Inner-->
													   </div>
															   

												<!--circular-countdown End-->
										
										    </div>
										</div>
									</div>
									
                                   
									
									 <div class="lgx-single-tab">
									    <div class="row">
										 <h3>Local Training Flyers</h3>
											<div class="col-xs-12 col-sm-3">
											   
											    <div class="card">
												   <a href="#"><img class="cardimg" src="assets/img/pdf.png" alt="Avatar" style="width:100%;height:200px;"></a>
												   <div class="cardcontainer">
													<h4><b>Adelaide</b></h4> 
													
												   </div>
												</div>
											
											
											</div>
											
											<div class="col-xs-12 col-sm-3">
											    <div class="card">
												  <a href="#"><img src="assets/img/pdf.png" alt="Avatar" style="width:100%;height:200px;"></a>
												   <div class="cardcontainer">
													<h4><b>Brisbane</b></h4> 
													
												   </div>
												</div>

											</div>
											
											<div class="col-xs-12 col-sm-3">
											    <div class="card">
												   <a href="#"><img src="assets/img/pdf.png" alt="Avatar" style="width:100%;height:200px;"></a>
												   <div class="cardcontainer">
													<h4><b>Melbourne</b></h4> 
													
												   </div>
												</div>
											
											
											</div>
											<div class="col-xs-12 col-sm-3">
											    <div class="card">
												   <a href="#"><img src="assets/img/pdf.png" alt="Avatar" style="width:100%;height:200px;"></a>
												   <div class="cardcontainer">
													<h4><b>Sydney</b></h4> 
													
												   </div>
												</div>
											
											
											</div>
										</div>
										
									</div>
									
									
									
                                   
                                </div>
								
								
								
                                <div id="menu2" class="tab-pane fade">
                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4">
                                                
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="author">
                                                 

                                                        <h5 class="name"><a href="speaker-single.html">Empty tab. Edit page to add content here.</a></h5>
                                                       
                                                 
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                               
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

<section>
    <div id="lgx-register" class="lgx-register">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="lgx-heading-area lgx-heading-brand">
                            <h2 class="lgx-heading ">
                                <span class="back-heading"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                <span class="heading">Get Ticket</span>
                            </h2>
                        
                        </div>
                    </div>
                    <!--//main COL-->
                </div>
                <div class="row tck">
                    <div class="col-xs-12 col-sm-6 col-md-4 book">
                        <div class="single">
                            
                            <div class="single-bottom">
                                <ul class="list-unstyled list">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Charlotte International Convention</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Spectrum Center, Charlotte, NC</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> May 8 – 10, 2020</li>
                                   
                                </ul>
                                <a class="lgx-btn" href="#"><span>Get Your Tickets Now</span></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-4 book">
                        <div class="single">
                      
                            <div class="single-bottom">
                                <ul class="list-unstyled list">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Sydney International Event</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> International Convention Center (ICC) Sydney</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> March 21 – 22 , 2020</li>
                                  
                                </ul>
                                <a class="lgx-btn" href="#"><span>Get Your Tickets Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</section>








@endsection