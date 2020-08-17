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
  .cntr{
	   margin-left:15%;
	   
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
                                    <span class="heading">RD & ABOVE RESOURCES</span>
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
                               
                                <span class="heading" style="color:#222326;font-size:30px;">This content is password protected. To view it please enter your password below:</span>
                            </h2>
                        
                        </div>
                    </div>
                    <!--//main COL-->
                </div>
                <div class="row tck d-flex justify-content-center">
                   
                    
                    <div class="col-xs-12 col-sm-8 col-md-8 cntr">
                        <div class="d-flex justify-content-center">
                      
                           <form method="POST" class="lgx-contactform" action="">
                            <div class="form-group">
                                <input type="password" name="lgxname" class="form-control lgxname" id="lgxname" placeholder="Enter Your Password" required>
                            </div>

                            
                            <button type="submit" name="submit" value="contact-form" class="lgx-btn lgx-btn-big hvr-glow hvr-radial-out lgxsend lgx-send"><span>Enter</span></button>
                        </form>
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