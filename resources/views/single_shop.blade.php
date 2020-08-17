@extends('layout.home')

@section('content')
<style>
.br{
        background: url('assets/img/bg.jpg') top left no-repeat;
        -webkit-background-size: auto auto, cover;
        -o-background-size: auto auto, cover;
        -moz-background-size: auto auto, cover;
        background-size: auto auto, cover;
        height:200px;
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
                                <span class="back-heading"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                    <span class="heading">SHOP TEAM TIGER GEAR</span>
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
    <div id="lgx-speaker-single" class="lgx-speakers lgx-speaker-single">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-xs-12">
                        <div class="lgx-single-speaker">
                            <figure>
                                <a class="profile-img" href="#"><img src="http://placehold.it/500x538" alt="speaker"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <div class="speakers-content">
                            <h1 class="title">TEAM TIGER T-SHIRT</h1>
                            <h3 class="subtitle">$12.00 – $15.00</h3>
                            
				
                            <p>Team Tiger T-Shirt</p>
                            <p>Proudly represent your team!</p>
                            <p>100% Cotton Black/Orange T-Shirt</p>
                            <p>Available in XXS – 3XL Sizes</p>
                            <p>Price includes tax</p>
							
							<form action="/action_page.php">
							  <label for="cars">CHOOSE SIZE:</label>
							  <select name="cars" id="cars">
								<option value="xxl">XXL</option>
								<option value="xl">XL</option>
								<option value="m">M</option>
								<option value="l">L</option>
								<option value="s">S</option>
							  </select>
							  <br><br> <label for="cars">QUANTITY:</label>
							  <div class="btn-group" id="app">
							   
								<button type="button" class="btn btn-primary" v-on:click="number--">-</button>
								<button type="button" class="btn btn-primary disabled">@{{ number }}</button>
								<button type="button" class="btn btn-primary" v-on:click="number++">+</button>
							  </div>
							  <br><br>
							  <input type="submit" class="btn btn-warning" value="ADD TO CART">
							</form>
                    </div>
                </div>
            </div><!-- //.CONTAINER -->

        </div><!-- //.INNER -->

    </div>
</section>

<section>
    <div id="lgx-schedule" class="lgx-schedule">
        <div class="lgx-inner">
            <div class="container">
             
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-tab">
                            <ul class="nav nav-pills text-center">
                                <li class="active"><a data-toggle="pill" href="#home"><h3>Description </h3></a></li>
                                <li><a data-toggle="pill" href="#menu1"><h3>Additional Information</h3></a></li>
                                <li><a data-toggle="pill" href="#menu2"><h3>Reviews (2)</h3></a></li>
                            </ul>
                            <div class="tab-content lgx-tab-content text-center">
                                <div id="home" class="tab-pane fade in active">
                        
                                 

                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="time-area">
                                                    <h4 class="time">Team Tiger <span>T-Shirt</span></h4>
                                                </div>
                                            </div>
                                          
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="schedule-info">
                                                    
                                                    <p>Ships from NSW, Australia to Worldwide</p>
                                                    <p>Local Pickup available from NSW, Australia</p>

                                                </div>
                                                <!--//.single tab-->
                                            </div>
                                        </div>
                                    </div>

                                    
     
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="lgx-single-tab">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">
                                               
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="time-area">
                                                <table class="table table-striped" align="center">
                                                       
                                                        <tbody>
                                                        <tr>
                                                            <th>Weight</th>
                                                            <td>N/A</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th>Size</th>
                                                            <td>XXS, XS, S, M, L, XL, 2XL, 3XL</td>
                                                            
                                                        </tr>
                                                       
                                                     
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                               
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

<section>
    
    <div id="lgx-speakers" class="lgx-speakers">
        <div class="lgx-inner">
            <div class="container">
                <h4>Related Items:</h4>
                <div class="row">
                   
                   <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="lgx-single-speaker lgx-single-speaker-sm">
                            <figure>
                                <a class="shop-img" href=""><img src="assets/img/shop3.jpg" alt="speaker"/></a>
                                <figcaption>
                                    <a class="sp-tw" href="#"><i class="fa fa-shopping-cart"> ADD TO CART</i></a>
                                    
                                </figcaption>
                            </figure>
                            <div class="speaker-info">
                                <h3 class="title"><a href="speaker-single.html">Team Tiger T-Shirt</a></h3>
                                <h4 class="subtitle">$12.00 – $15.00</h4>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="lgx-single-speaker lgx-single-speaker-sm">
                            <figure>
                                <a class="shop-img" href=""><img src="assets/img/shop3.jpg" alt="speaker"/></a>
                                <figcaption>
                                    <a class="sp-tw" href="#"><i class="fa fa-shopping-cart"> ADD TO CART</i></a>
                                    
                                </figcaption>
                            </figure>
                            <div class="speaker-info">
                                <h3 class="title"><a href="speaker-single.html">Team Tiger T-Shirt</a></h3>
                                <h4 class="subtitle">$12.00 – $15.00</h4>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="lgx-single-speaker lgx-single-speaker-sm">
                            <figure>
                                <a class="shop-img" href=""><img src="assets/img/shop3.jpg" alt="speaker"/></a>
                                <figcaption>
                                    <a class="sp-tw" href="#"><i class="fa fa-shopping-cart"> ADD TO CART</i></a>
                                    
                                </figcaption>
                            </figure>
                            <div class="speaker-info">
                                <h3 class="title"><a href="speaker-single.html">Team Tiger T-Shirt</a></h3>
                                <h4 class="subtitle">$12.00 – $15.00</h4>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="lgx-single-speaker lgx-single-speaker-sm">
                            <figure>
                                <a class="shop-img" href=""><img src="assets/img/shop3.jpg" alt="speaker"/></a>
                                <figcaption>
                                    <a class="sp-tw" href="#"><i class="fa fa-shopping-cart"> ADD TO CART</i></a>
                                    
                                </figcaption>
                            </figure>
                            <div class="speaker-info">
                                <h3 class="title"><a href="speaker-single.html">Team Tiger T-Shirt</a></h3>
                                <h4 class="subtitle">$12.00 – $15.00</h4>
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

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>

   new Vue({
      el: '#app',
	  data: {
	     number:1
	  }
   
   })
</script>

@endsection