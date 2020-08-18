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
.limg{
	 border:5px solid black;
	 border-radius:50%;
	 height:200px;
	 width:200px;
	 margin:0 auto;
	 display:block;
	}
	.laimg{
	  
	}
    .pra{
	  text-align: justify;
	  font-size:15px;
	  margin-right:20px;
	  
	}
	.ld{
	 box-shadow:
	  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
	  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
	  0 12.5px 10px rgba(0, 0, 0, 0.06),
	  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
	  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
	  0 100px 80px rgba(0, 0, 0, 0.12)
	;
	  background: white;
	  border-radius: 5px;
	  padding:20px;
	  margin-bottom:20px;
	  height:670px;
	  
	}
	.ldr{
	background: #EEF2F7;
	
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
                                <span class="back-heading"><i class="fa fa-users" aria-hidden="true"></i></span>
                                    <span class="heading">LEADERSHIP TEAM</span>
									<ul class="breadcrumb">
										<li><a><i class="icon-home6"></i>Rockstar Team Tiger</a></li>
										
                                    </ul>
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
    <div class="lgx-blog lgx-blog-list">
        <div class="lgx-inner">
            <div class="container">


            <div class="blog-area">

            <div class="row">
                    @foreach( $leader as $l )
                    
                        <div class="col-sm-12 col-md-6">
                            <div class="ld">
                                <div class="card-inner">
                                    <figure>
                                        <a class="laimg" href=""><img class="limg" src="{{ $l->image }}" alt="blog"/></a>
                                    </figure>
                                    <div class="content">
                                        <div class="cat-icon">
                                            
                                        </div>
                                        <div class="text-area">
                                            <h3 class="title"><a href="blog-single.html">{{ $l->name }}</a></h3>
											<h4 class="title">{{ $l->designation }}</h4>
                                            <div class="hits-area">
                                                <p class="pra">
                                                {{ $l->description }}
                                                </p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                    @endforeach
                </div>  
                
            </div>
            
        </div><!-- //.CONTAINER -->

    </div><!-- //.INNER -->

  </div>
</section>

@endsection