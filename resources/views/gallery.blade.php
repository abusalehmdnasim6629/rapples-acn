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
    .gimg{
	   height:300px;
	   width:300px;
    }
    #lgx-photo-gallery{
    margin-bottom:20px;

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
                                    <span class="back-heading"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                    <span class="heading">Photo Gallery</span>
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
<div id="lgx-photo-gallery" class="lgx-photo-gallery">
    <div class="lgx-inner">
        <div class="container">
            <div id="lgx-memorisinner" class="lgx-memorisinner">
                <div class="container-fluid text-center">
                    <div class="row">

                       @foreach( $Gallery as $g )
                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg" title="Memories One" src="{{ $g->image }}" alt="Memories one"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="{{ $g->title }}" href="{{ $g->image }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                       @endforeach
                      

                    </div>

                </div> <!--//.CONAINER-->
            </div><!--//.lgx CONTACT INNER-->
        </div>
        <!-- //.CONTAINER -->
    </div>
</div>
</section>

@endsection