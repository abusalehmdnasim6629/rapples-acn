 @php 
   $whatDo =  App\WhatDo::first();
   $LogoFooter =  App\LogoFooter::first();

 @endphp
 <!--FOOTER-->
 <footer>
        <div id="lgx-footer" class="lgx-footer">
            <div class="lgx-footer-bg">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="lgx-subscriber-area">
                            <div class="lgx-testi-inner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-8 col-xs-12">
                                            <h1 class="title">{{ $whatDo->title }}</h1>
											<p class="wwd">
                                            {{ $whatDo->description }}
                                            </p>
                                           
                                        </div>
                                    </div> <!--//ROW-->
                                </div> <!--//container-->
                            </div> <!--//lgx-inner-->
                        </div>
                        <div class="lgx-logo">
                            <a href="" class="lgx-scroll">
                                <img class="logo" src="{{ $LogoFooter->logo}}" alt=""/>
                            </a>
                        </div>
                        <div class="footer-social">
                            <ul class="list-inline">
                                <li><a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="sp-google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="sp-" href="#"><i class="fa fa-soundcloud"></i></a></li>
                                <li><a class="sp-" href="#"><i class="fa fa-video-camera"></i></a></li>
                            </ul>
                        </div>
                        <p class="lgx-copyright"><span class="themename">{{ $LogoFooter->footer_copywrite}}</span></p>
                    
					<p class="lgx-copyright"><span class="">{{ $LogoFooter->footer_last}}</span></p>

					</div>
                    <!-- //.CONTAINER -->
                </div>
            </div>
            <!-- //.INNER-->
        </div>
    </footer>
    <!--FOOTER END-->