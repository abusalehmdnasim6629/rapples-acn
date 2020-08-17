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
                                    <span class="back-heading"><i class="fa fa-file" aria-hidden="true"></i></span>
                                    <span class="heading">TEMPLATES</span>
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
        <div class="row cont">
		    <h3>PLEASE DOWNLOAD AND MODIFY POSITION ACHIEVER TEMPLATE TO PROMOTE YOUR BUSINESS PARTNERS</h3>
			<h4>Position Achiever Recognition Templates:</h4>
			<a href="assets/img/temp.pptx" download class="btn btn-success">
			Position Achiever Templates
			</a>
			
			<small>(Click once to download PowerPoint file)</small>
			
        </div>
    </div>
</section>


@endsection