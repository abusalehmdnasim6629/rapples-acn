@extends('layout.home')

@section('content')

<style>

	
	.card {
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	  transition: 0.3s;
	  border-radius: 5px;
	}

	.card:hover {
	  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}




	

	.lnk h3{
	  margin:0 auto;
	  display:block;
	}
	.book{
	  margin-left:10%;
	}
	.list{
	  text-align:left;
	  margin:10px;
	}
	.ti{
	  font-size:25px;
	  font-weight:bold;
	}
	.card-deck{
	   margin-bottom:10px;
	   width:90%;
	}
	.vimg{
	   width:100%;
	
	}
	.card-text{
	  padding:10px;
	}
	.bname{
	 font-weight:bold;
	}
	.bq{
	 font-size:25px;
	 margin-bottom:10px;
	}
    .br{
        background: url('assets/img/bg.jpg') top left no-repeat;
        -webkit-background-size: auto auto, cover;
        -o-background-size: auto auto, cover;
        -moz-background-size: auto auto, cover;
        background-size: auto auto, cover;
        height:400px;
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
                                    <span class="back-heading"><i class="fa fa-train" aria-hidden="true"></i></span>
                                    <span class="heading">TRAINING & RESOURCES</span>
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
        <div class="lgx-inner br">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading-area">
                          
                            
							  <h2 class="lgx-heading">
                                <span class="back-heading"><i class="fa fa-train" aria-hidden="true"></i></span>
                                <span class="heading">Training Materials</span>
                              </h2>
							  <p class="text">
                                Everything you need to get started and much more!
                            </p>
							
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
                                <li><a data-toggle="pill" href="#menu3"><h3>Colombia</h3></a></li>
                               
                                
                            </ul>
                            <div class="tab-content lgx-tab-content text-center">
                                <div id="home" class="tab-pane fade in active">
									
									
									
								  <div class="row">
								     <div class="col-md-4">
									    <div class="list">
										    <h5 class="ti">NEW IBO LAUNCH<h5>
											<hr>
											<ul class="ulist">
											   <ol><a href="">10 Core Commitments</a></ol>
											   <ol><a href="">100 Names List</a></ol>
											   <ol><a href="">Memory Jogger</a></ol>
											   <ol><a href="">24 Hour Game Plan</a></ol>
											   <ol><a href="">10 Day Game Plan</a></ol>		   
											</ul>
											<hr>
											<h5 class="ti">ACN LINKS<h5>
											<hr>
											<ul>
											   <ol><a href="">IBO Training Materials</a></ol>
											   <ol><a href="">Essential Documents</a></ol>
											   <ol><a href="">IBO Back Office </a></ol>
											   <ol><a href="">Project Feeding Kids</a></ol>
											   <ol><a href="">Bonus and Promotions</a></ol>		   
											   <ol><a href="">ACN Website</a></ol>		   
											</ul>
											<hr>
											<h5 class="ti">CUSTOMER ACQUISITION<h5>
											<hr>
											<ul>
											   <ol><a href="">Customer Acquisition Script</a></ol>
											   <ol><a href="">Energy Customer Acquisition Script</a></ol>
											   <ol><a href="">Customer Points </a></ol>
											   <ol><a href="">Flash Verizon Training</a></ol>
											   <ol><a href="">Flash Sprint Training</a></ol>		   
											   
											</ul>
										</div>
									   
								     </div>
									  <div class="col-md-4">
									    <div class="list">
									        <h5 class="ti">PBR ESSENTIALS<h5>
											<hr>
											
											<ul>
											   <ol><a href=""><b style="color:black;">PBR Training:</b></a></ol>
											   <ol><a href="">Inviting Script (Warm Market)</a></ol>
											   <ol><a href="">PBR Hosting Script</a></ol>
											   <ol><a href="">PBR Checklist</a></ol>
											   <ol><a href="">Guest Registration (Sign in sheet)</a></ol>
											   <ol><a href="">Confirmation Call</a></ol>		   
											   <ol><a href="">Confirmation Call List</a></ol>		   
											   <ol><a href="">72 Hour Coaching Call</a></ol>		   
											   <ol><a href="">3-Way Call</a></ol>		   
											   <ol><a href="">Follow Up Report</a></ol>		   
											   
											</ul>
											
											<ul>
											   <ol><a href=""><b style="color:black;">PBR Setup Documents:</b></a></ol>
											   <ol><a href="">1-7 Biz Op</a></ol>
											   <ol><a href="">IBO Agreement</a></ol>
											   <ol><a href="">Customer Survey (Residential))</a></ol>
											   <ol><a href="">Customer Survey (Commercial)</a></ol>
												   
											   
											</ul>
											
											<ul>
											   <ol><a href=""><b style="color:black;">Training Flyers:</b></a></ol>
											   <ol><a href="">California</a></ol>
											   <ol><a href="">Connecticut</a></ol>
											   <ol><a href="">Florida</a></ol>
											   <ol><a href="">Massachusetts</a></ol>
											   <ol><a href="">New York</a></ol>		   
											   <ol><a href="">North Carolina</a></ol>		   
											   <ol><a href="">Ohio</a></ol>		   
											   <ol><a href="">Pennsylvania</a></ol>		   
											   <ol><a href="">Rhode Island</a></ol>		   
											   <ol><a href="">Texas</a></ol>		   
											   
											</ul>
										
								        </div> 
								     </div> 
									 <div class="col-md-4">
									    <div class="list">	
                                            <h5 class="ti">ACN PIQUING VIDEOS<h5>										
											<div class="row">
												<div class="card-deck">

													<div class="card">
														<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
															<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
														</a>
														<div class="card-body">
													      <p class="card-text">A New Path</p>
												        </div>	
														
													</div>	
												    												
												</div>
												
												<div class="card-deck">

													<div class="card">
														<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
															<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
														</a>
														<div class="card-body">
													      <p class="card-text">The Future of Business</p>
												        </div>
														
													</div>				
												</div>
												
												
											</div>
											
								        </div>
								     </div>
								     
								  
								  </div>
									
								
									
									 
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                     
									<div class="row">
								     <div class="col-md-4">
									    <div class="list">
										    <h5 class="ti">NEW IBO LAUNCH<h5>
											<hr>
											<ul class="ulist">
											   <ol><a href="">10 Core Commitments</a></ol>
											   <ol><a href="">100 Names List</a></ol>
											   <ol><a href="">Memory Jogger</a></ol>
											   <ol><a href="">24 Hour Game Plan</a></ol>
											   <ol><a href="">10 Day Game Plan</a></ol>		   
											</ul>
											<hr>
											<h5 class="ti">ACN LINKS<h5>
											<hr>
											<ul>
											   <ol><a href="">IBO Training Materials</a></ol>
											   <ol><a href="">Essential Documents</a></ol>
											   <ol><a href="">IBO Back Office </a></ol>
											   <ol><a href="">Project Feeding Kids</a></ol>
											   <ol><a href="">Bonus and Promotions</a></ol>		   
											   <ol><a href="">ACN Website</a></ol>		   
											</ul>
											<hr>
											<h5 class="ti">CUSTOMER ACQUISITION<h5>
											<hr>
											<ul>
											   <ol><a href="">Customer Acquisition Script</a></ol>
											   <ol><a href="">Energy Customer Acquisition Script</a></ol>
											   <ol><a href="">Customer Points </a></ol>
											   <ol><a href="">Flash Verizon Training</a></ol>
											   <ol><a href="">Flash Sprint Training</a></ol>		   
											   
											</ul>
										</div>
									   
								     </div>
									  <div class="col-md-4">
									    <div class="list">
									        <h5 class="ti">PBR ESSENTIALS<h5>
											<hr>
											
											<ul>
											   <ol><a href=""><b style="color:black;">PBR Training:</b></a></ol>
											   <ol><a href="">Inviting Script (Warm Market)</a></ol>
											   <ol><a href="">PBR Hosting Script</a></ol>
											   <ol><a href="">PBR Checklist</a></ol>
											   <ol><a href="">Guest Registration (Sign in sheet)</a></ol>
											   <ol><a href="">Confirmation Call</a></ol>		   
											   <ol><a href="">Confirmation Call List</a></ol>		   
											   <ol><a href="">72 Hour Coaching Call</a></ol>		   
											   <ol><a href="">3-Way Call</a></ol>		   
											   <ol><a href="">Follow Up Report</a></ol>		   
											   
											</ul>
											
											<ul>
											   <ol><a href=""><b style="color:black;">PBR Setup Documents:</b></a></ol>
											   <ol><a href="">1-7 Biz Op</a></ol>
											   <ol><a href="">IBO Agreement</a></ol>
											   <ol><a href="">Customer Survey (Residential))</a></ol>
											   <ol><a href="">Customer Survey (Commercial)</a></ol>
												   
											   
											</ul>
											
											<ul>
											   <ol><a href=""><b style="color:black;">Training Flyers:</b></a></ol>
											   <ol><a href="">California</a></ol>
											   <ol><a href="">Connecticut</a></ol>
											   <ol><a href="">Florida</a></ol>
											   <ol><a href="">Massachusetts</a></ol>
											   <ol><a href="">New York</a></ol>		   
											   <ol><a href="">North Carolina</a></ol>		   
											   <ol><a href="">Ohio</a></ol>		   
											   <ol><a href="">Pennsylvania</a></ol>		   
											   <ol><a href="">Rhode Island</a></ol>		   
											   <ol><a href="">Texas</a></ol>		   
											   
											</ul>
										
								        </div> 
								     </div> 
									 <div class="col-md-4">
									    <div class="list">	
                                            <h5 class="ti">ACN PIQUING VIDEOS<h5>										
											<div class="row">
												<div class="card-deck">

													<div class="card">
														<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
															<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
														</a>
														<div class="card-body">
													      <p class="card-text">A New Path</p>
												        </div>	
														
													</div>	
												    												
												</div>
												
												<div class="card-deck">

													<div class="card">
														<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
															<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
														</a>
														<div class="card-body">
													      <p class="card-text">The Future of Business</p>
												        </div>
														
													</div>				
												</div>
												
												
											</div>
											
								        </div>
								     </div>
								     
								  
								  </div>
									
									
									
                                   
                                </div>
								
								
								
                                <div id="menu2" class="tab-pane fade">
                                    <div class="row">
								     <div class="col-md-4">
									    <div class="list">
										    <h5 class="ti">NEW IBO LAUNCH<h5>
											<hr>
											<ul class="ulist">
											   <ol><a href="">10 Core Commitments</a></ol>
											   <ol><a href="">100 Names List</a></ol>
											   <ol><a href="">Memory Jogger</a></ol>
											   <ol><a href="">24 Hour Game Plan</a></ol>
											   <ol><a href="">10 Day Game Plan</a></ol>		   
											</ul>
											<hr>
											<h5 class="ti">ACN LINKS<h5>
											<hr>
											<ul>
											   <ol><a href="">IBO Training Materials</a></ol>
											   <ol><a href="">Essential Documents</a></ol>
											   <ol><a href="">IBO Back Office </a></ol>
											   <ol><a href="">Project Feeding Kids</a></ol>
											   <ol><a href="">Bonus and Promotions</a></ol>		   
											   <ol><a href="">ACN Website</a></ol>		   
											</ul>
											<hr>
											<h5 class="ti">CUSTOMER ACQUISITION<h5>
											<hr>
											<ul>
											   <ol><a href="">Customer Acquisition Script</a></ol>
											   <ol><a href="">Energy Customer Acquisition Script</a></ol>
											   <ol><a href="">Customer Points </a></ol>
											   <ol><a href="">Flash Verizon Training</a></ol>
											   <ol><a href="">Flash Sprint Training</a></ol>		   
											   
											</ul>
										</div>
									   
								     </div>
									  <div class="col-md-4">
									    <div class="list">
									        <h5 class="ti">PBR ESSENTIALS<h5>
											<hr>
											
											<ul>
											   <ol><a href=""><b style="color:black;">PBR Training:</b></a></ol>
											   <ol><a href="">Inviting Script (Warm Market)</a></ol>
											   <ol><a href="">PBR Hosting Script</a></ol>
											   <ol><a href="">PBR Checklist</a></ol>
											   <ol><a href="">Guest Registration (Sign in sheet)</a></ol>
											   <ol><a href="">Confirmation Call</a></ol>		   
											   <ol><a href="">Confirmation Call List</a></ol>		   
											   <ol><a href="">72 Hour Coaching Call</a></ol>		   
											   <ol><a href="">3-Way Call</a></ol>		   
											   <ol><a href="">Follow Up Report</a></ol>		   
											   
											</ul>
											
											<ul>
											   <ol><a href=""><b style="color:black;">PBR Setup Documents:</b></a></ol>
											   <ol><a href="">1-7 Biz Op</a></ol>
											   <ol><a href="">IBO Agreement</a></ol>
											   <ol><a href="">Customer Survey (Residential))</a></ol>
											   <ol><a href="">Customer Survey (Commercial)</a></ol>
												   
											   
											</ul>
											
											<ul>
											   <ol><a href=""><b style="color:black;">Training Flyers:</b></a></ol>
											   <ol><a href="">California</a></ol>
											   <ol><a href="">Connecticut</a></ol>
											   <ol><a href="">Florida</a></ol>
											   <ol><a href="">Massachusetts</a></ol>
											   <ol><a href="">New York</a></ol>		   
											   <ol><a href="">North Carolina</a></ol>		   
											   <ol><a href="">Ohio</a></ol>		   
											   <ol><a href="">Pennsylvania</a></ol>		   
											   <ol><a href="">Rhode Island</a></ol>		   
											   <ol><a href="">Texas</a></ol>		   
											   
											</ul>
										
								        </div> 
								     </div> 
									 <div class="col-md-4">
									    <div class="list">	
                                            <h5 class="ti">ACN PIQUING VIDEOS<h5>										
											<div class="row">
												<div class="card-deck">

													<div class="card">
														<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
															<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
														</a>
														<div class="card-body">
													      <p class="card-text">A New Path</p>
												        </div>	
														
													</div>	
												    												
												</div>
												
												<div class="card-deck">

													<div class="card">
														<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
															<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
														</a>
														<div class="card-body">
													      <p class="card-text">The Future of Business</p>
												        </div>
														
													</div>				
												</div>
												
												
											</div>
											
								        </div>
								     </div>
								     
								  
								  </div>
									
									
                                    
                                </div>
								
								
								<div id="menu3" class="tab-pane fade">
                                    <div class="row">
								     <div class="col-md-4">
									    <div class="list">
										    <h5 class="ti">NEW IBO LAUNCH<h5>
											<hr>
											<ul class="ulist">
											   <ol><a href="">10 Core Commitments</a></ol>
											   <ol><a href="">100 Names List</a></ol>
											   <ol><a href="">Memory Jogger</a></ol>
											   <ol><a href="">24 Hour Game Plan</a></ol>
											   <ol><a href="">10 Day Game Plan</a></ol>		   
											</ul>
											<hr>
											<h5 class="ti">ACN LINKS<h5>
											<hr>
											<ul>
											   <ol><a href="">IBO Training Materials</a></ol>
											   <ol><a href="">Essential Documents</a></ol>
											   <ol><a href="">IBO Back Office </a></ol>
											   <ol><a href="">Project Feeding Kids</a></ol>
											   <ol><a href="">Bonus and Promotions</a></ol>		   
											   <ol><a href="">ACN Website</a></ol>		   
											</ul>
											<hr>
											<h5 class="ti">CUSTOMER ACQUISITION<h5>
											<hr>
											<ul>
											   <ol><a href="">Customer Acquisition Script</a></ol>
											   <ol><a href="">Energy Customer Acquisition Script</a></ol>
											   <ol><a href="">Customer Points </a></ol>
											   <ol><a href="">Flash Verizon Training</a></ol>
											   <ol><a href="">Flash Sprint Training</a></ol>		   
											   
											</ul>
										</div>
									   
								     </div>
									  <div class="col-md-4">
									    <div class="list">
									        <h5 class="ti">PBR ESSENTIALS<h5>
											<hr>
											
											<ul>
											   <ol><a href=""><b style="color:black;">PBR Training:</b></a></ol>
											   <ol><a href="">Inviting Script (Warm Market)</a></ol>
											   <ol><a href="">PBR Hosting Script</a></ol>
											   <ol><a href="">PBR Checklist</a></ol>
											   <ol><a href="">Guest Registration (Sign in sheet)</a></ol>
											   <ol><a href="">Confirmation Call</a></ol>		   
											   <ol><a href="">Confirmation Call List</a></ol>		   
											   <ol><a href="">72 Hour Coaching Call</a></ol>		   
											   <ol><a href="">3-Way Call</a></ol>		   
											   <ol><a href="">Follow Up Report</a></ol>		   
											   
											</ul>
											
											<ul>
											   <ol><a href=""><b style="color:black;">PBR Setup Documents:</b></a></ol>
											   <ol><a href="">1-7 Biz Op</a></ol>
											   <ol><a href="">IBO Agreement</a></ol>
											   <ol><a href="">Customer Survey (Residential))</a></ol>
											   <ol><a href="">Customer Survey (Commercial)</a></ol>
												   
											   
											</ul>
											
											<ul>
											   <ol><a href=""><b style="color:black;">Training Flyers:</b></a></ol>
											   <ol><a href="">California</a></ol>
											   <ol><a href="">Connecticut</a></ol>
											   <ol><a href="">Florida</a></ol>
											   <ol><a href="">Massachusetts</a></ol>
											   <ol><a href="">New York</a></ol>		   
											   <ol><a href="">North Carolina</a></ol>		   
											   <ol><a href="">Ohio</a></ol>		   
											   <ol><a href="">Pennsylvania</a></ol>		   
											   <ol><a href="">Rhode Island</a></ol>		   
											   <ol><a href="">Texas</a></ol>		   
											   
											</ul>
										
								        </div> 
								     </div> 
									 <div class="col-md-4">
									    <div class="list">	
                                            <h5 class="ti">ACN PIQUING VIDEOS<h5>										
											<div class="row">
												<div class="card-deck">

													<div class="card">
														<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
															<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
														</a>
														<div class="card-body">
													      <p class="card-text">A New Path</p>
												        </div>	
														
													</div>	
												    												
												</div>
												
												<div class="card-deck">

													<div class="card">
														<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
															<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
														</a>
														<div class="card-body">
													      <p class="card-text">The Future of Business</p>
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
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--SCHEDULE END-->

<section>
    <div class="container">
	 
	 <div class="row">
	  <h5 class="ti">MOTIVATIONAL VIDEOS<h5>
	  <div class="col-md-12">
	   <div class="row">
	        
	        <div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
	   </div>
	   
	   <div class="row">
	        
	        <div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
	   </div>
	   
	   <div class="row">
	        
	        <div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
	    </div>
	   </div>
	  </div>
    </div>
</section>

<hr>
<section>
    <div class="container">
	 
	 <div class="row">
	  <h5 class="ti">TRAINING VIDEOS<h5>
	  <div class="col-md-12">
	   <div class="row">
	        
	        <div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
	   </div>
	   
	   <div class="row">
	        
	        <div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
	   </div>
	   
	   <div class="row">
	        
	        <div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
			
			<div class="col-md-3">
			   <div class="card-deck">
					<div class="card">
						<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<img class="card-img-top vimg" src="http://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" />
						</a>
						<div class="card-body">
						    <p class="card-text">The Future of Business</p>
				        </div>
														
					</div>				
				</div>
	        </div>
	    </div>
	   </div>
	  </div>
    </div>
</section>

<hr>
<section>
  <div class="container">
	 
	 <div class="row">
	  <h5 class="ti">RECOMMENDED BOOKS<h5>
	  <hr>
	  <div class="col-md-12">
	   <div class="row">
	     <div class="col-md-3"> 
		 </div>
		 <div class="col-md-6"> 
		    <ul>
			   <ol class="bq">"All good leaders are good readers"</ol>
			   <ol><span class="bname">Go Pro </span>by Eric Worre</ol>
			   <ol><span class="bname">Your First Year in Network Marketing  </span>by  Mark Yarnell</ol>
			   <ol><span class="bname">Think and Grow Rich </span>by Napoleon Hill</ol>
			   <ol><span class="bname">How to Win Friends and Influence People </span>by Dale Carnegie</ol>
			   <ol><span class="bname">The 7 Habits of Highly Effective People </span>by Stephen Covey</ol>
			   <ol><span class="bname">The Compound Effect </span>by Darren Hardy</ol>
			   <ol><span class="bname">Rich Dad Poor Dad </span>by Robert Kiyosaki</ol>
			   <ol><span class="bname">A Happy Pocket Full of Money </span>by David Cameron Gikandi</ol>
			 
		    <ul>
		 </div>
		 <div class="col-md-3"> 
		 </div>
  
</section>









@endsection