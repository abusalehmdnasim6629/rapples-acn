@php 
  
   $LogoFooter =  App\LogoFooter::first();

 @endphp    
    <!--HEADER-->
    <header>
        <div id="lgx-header" class="lgx-header">
            <div class="lgx-header-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <nav id="menu-offscroll" class="navbar navbar-default lgx-navbar">
                                <div class="container">
                                    <nav class="navbar navbar-default lgx-navbar">
                                        <div class="lgxcontainer">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                        data-target=".navbar-collapse">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <div class="lgx-logo">
                                                    <a href="{{URL::to('/')}}" class="lgx-scroll">
                                                        <img src="{{ $LogoFooter->logo}}" alt="Logo"/>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="collapse navbar-collapse">
                                                <ul class="nav navbar-nav lgx-nav">
												    <li><a class="lgx-scroll" href="{{URL::to('/')}}">Home</a></li>
                                                    <li class="dropdown">
                                                        <a href="JavaScript:void(0);">System & Training<b class="caret"></b></a>
                                                        <ul class="dropdown-menu multi-level">
                                                            <li><a href="{{URL::to('/training-and-resources')}}">Training & Resources</a></li>
                                                            <li><a href="{{URL::to('/zoompbr_booking')}}">Zoom PBR Booking</a></li>
                                                            <li><a href="{{URL::to('/rd-and-above')}}">RD & Above resources</a></li>                                                        
                                                        </ul>
                                                    </li>
													 <li class="dropdown">
                                                        <a href="JavaScript:void(0);">Recognition<b class="caret"></b></a>
                                                        <ul class="dropdown-menu multi-level">
                                                            <li><a href="{{URL::to('/recognition')}}">Top 10 Recognition</a></li>
                                                            <li><a href="{{URL::to('/position-achiever-template')}}">Position Achiver Templates</a></li>                                                                                                             
                                                        </ul>
                                                    </li>
                                                    <li><a class="lgx-scroll" href="{{URL::to('/meeting-and-events')}}">Meetings & Events</a></li>
                                                    <li><a class="lgx-scroll" href="{{URL::to('/leaders')}}">Leaders</a></li>
													<li class="dropdown">
                                                        <a href="JavaScript:void(0);">About Us<b class="caret"></b></a>
                                                        <ul class="dropdown-menu multi-level">
                                                            <li><a href="{{URL::to('/about-us')}}">About Us</a></li>
                                                            <li><a href="{{URL::to('/contact-us')}}">Contact Us</a></li>                                                                                                             
                                                            <li><a href="{{URL::to('/our-gallery')}}">Our Gallery</a></li>                                                                                                             
                                                        </ul>
                                                    </li>
													<li class="dropdown">
                                                        <a href="JavaScript:void(0);">Shop<b class="caret"></b></a>
                                                        <ul class="dropdown-menu multi-level">
                                                            <li><a href="{{URL::to('/shop')}}">Shop</a></li>
                                                            <li><a href="#">Orders</a></li>                                                                                                                                                                                                                                                                              
                                                        </ul>
                                                    </li>
													
                                                   
                                                </ul>
                                            </div>
                                            <!--/.nav-collapse -->
                                        </div>
                                    </nav>
                                </div>
                                <!-- /.container -->
                            </nav>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER-->
        </div>
    </header>
    <!--HEADER END-->