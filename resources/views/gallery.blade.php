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
                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg" title="Memories One" src="assets/img/g1.jpg" alt="Memories one"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories One" href="assets/img/g1.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg"src="assets/img/g2.jpg" alt="Memories Two" title="Memories Two" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Two" href="assets/img/g2.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg"src="assets/img/g3.jpg" alt="Memories Three" title="Memories Three" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Three" href="assets/img/g3.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg"src="assets/img/g4.jpg" alt="Memories Four" title="Memories Four" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Four" href="assets/img/g4.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="lgx-single">
                            <figure>
                                <img class="gimg"src="assets/img/g5.jpg" alt="Memories Five" title="Memories Five" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Five" href="assets/img/g5.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="lgx-single">
                            <figure>
                                <img class="gimg"src="assets/img/g6.jpg" alt="Memories Six" title="Memories Six" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Six" href="assets/img/g6.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg"src="assets/img/g7.jpg" alt="Memories Seven" title="Memories Seven" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Seven" href="assets/img/g7.jpg"><i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg"src="assets/img/g8.jpg" alt="Memories Eight" title="Memories Eight" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Eight" href="assets/img/g8.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg"title="Memories One" src="assets/img/g9.jpg" alt="Memories one"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories One" href="assets/img/g9.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="lgx-single">
                            <figure>
                                <img class="gimg"src="assets/img/g10.jpg" alt="Memories Five" title="Memories Five" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Five" href="assets/img/g10.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="lgx-single">
                            <figure>
                                <img class="gimg"src="assets/img/g11.jpg" alt="Memories Six" title="Memories Six" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Six" href="assets/img/g11.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg"src="assets/img/g12.jpg" alt="Memories Seven" title="Memories Seven" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Seven" href="assets/img/g12.jpg"><i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg" src="assets/img/g13.jpg" alt="Memories Seven" title="Memories Seven" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Seven" href="assets/img/g13.jpg"><i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg" src="assets/img/g14.jpg" alt="Memories Eight" title="Memories Eight" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Eight" href="assets/img/g14.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div  class="lgx-single">
                            <figure>
                                <img class="gimg" title="Memories One" src="assets/img/g15.jpg" alt="Memories one"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories One" href="assets/img/g15.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="lgx-single">
                            <figure>
                                <img class="gimg" src="assets/img/g16.jpg" alt="Memories Five" title="Memories Five" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Five" href="assets/img/g16.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                    </div>

                </div> <!--//.CONAINER-->
            </div><!--//.lgx CONTACT INNER-->
        </div>
        <!-- //.CONTAINER -->
    </div>
</div>
</section>










@endsection