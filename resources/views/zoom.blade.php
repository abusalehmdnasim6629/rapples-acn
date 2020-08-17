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

    .tck{
	  margin:0 auto;
	  display:block;
	  text-align:center;
	}
	
	.lnk h3{
	  margin:0 auto;
	  display:block;
	}
	.book{
	  border:4px solid gray;
	  padding:10px;
	  margin-left:10%;
	  text-align:center;
	  
	}
	.book:hover{
	  border:4px solid #11F360;
	}
	.get span{
	 
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
                                    <span class="back-heading"><i class="fa fa-video-camera" aria-hidden="true"></i></span>
                                    <span class="heading">Zoom PBR Booking</span>
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
    <div id="" class="">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="lgx-heading-area lgx-heading-brand">
                            <h2 class="get">
                               
                                <span class="heading" style="color:#222326;">CLICK BELOW TO BOOK YOUR ZOOM PBR!</span>
                            </h2>
                        
                        </div>
                    </div>
                    <!--//main COL-->
                </div>
                <div class="row tck">
                    <div class="col-xs-12 col-sm-6 col-md-4 book">
                        <div class="single">
                            
                            <div class="single-bottom">
                           
                                <a class="lgx-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSdxvOVtf1BR4aWY9HogVjP7gENP3dUXwnnk-ppgi3psy0d67A/viewform" target="_blank"><span>BOOK ZOOM PBR - AUS/NZ</span></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-4 book">
                        <div class="single">
                      
                            <div class="single-bottom">
                            
                                <a class="lgx-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSfsCY2SoEIL6jbbVJdook01KwcNQ8wZL6HUUgPgHePtnOUcEA/viewform" target="_blank"><span>BOOK ZOOM PBR - USA</span></a>
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