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
                                    <span class="back-heading"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <span class="heading">Contact Us</span>
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
    <div id="lgx-contact" class="lgx-contact">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="innerpage-section">
                            <div class="lgxmapcanvas map-canvas-default" id="map_canvas"> </div>
                        </div>
                    </div>
                </div><!--//.ROW-->



                <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <form method="POST" class="lgx-contactform" action="{{url('/send-message')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control lgxname" id="lgxname" placeholder="Enter Your Name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control lgxemail" id="lgxemail" placeholder="Enter email" required>
                            </div>
							
							 <div class="form-group">
                                <input type="text" name="ibo" class="form-control lgxemail" id="lgxemail" placeholder="Enter Ibo No. (for Current IBOs)" required>
                            </div>
							
							 <div class="form-group">
                                <input type="text" name="tc" class="form-control lgxemail" id="lgxemail" placeholder="Enter Up-line TC (for Current IBOs)" required>
                            </div>						

                            <div class="form-group">
                                <input type="text" name="subject" class="form-control lgxsubject" id="lgxsubject" placeholder="Subject" required>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control lgxmessage" name="message" id="lgxmessage" rows="5" placeholder="We expect drop some line from you..." required></textarea>
                            </div>

                            <!-- <div class="form-group">
                                <label class="lgxsendme-area">
                                    <input  name="lgxsendme" value="on" type="checkbox"> Copy Me
                                </label>
                            </div> -->

                            <button type="submit" name="submit" value="contact-form" class="lgx-btn lgx-btn-big hvr-glow hvr-radial-out lgxsend lgx-send"><span>Send Massage</span></button>
                        </form>

                        <!-- MODAL SECTION -->
                        <!-- <div id="lgx-form-modal" class="modal fade lgx-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content lgx-modal-content">
                                    <div class="modal-header lgx-modal-header">
                                        <button type="button" class="close brand-color-hover" data-dismiss="modal" aria-label="Close">
                                            <i class="fa fa-power-off"></i>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="alert lgx-form-msg" role="alert"></div>
                                    </div> 

                                </div>
                            </div>
                        </div> //MODAL -->

                    </div> <!--//.COL-->
                    <div class="col-sm-12 col-md-6">
                        <div class="contact-info">
                            <div class="lgx-box">
                                <!--<span class="lgx-icon"><i class="fa fa-map-marker"></i></span>-->
                                <div class="address">
                                    <h3 class="title">Location</h3>
                                    <p>795 Folsom Ave, Suite 600 <br/>
                                        San Francisco, CA 94107.</p>
                                    <!--<p>SKYPE:jhon.doe</p>-->
                                </div>
                            </div>
                            <div class="lgx-box">
                                <!--<span class="lgx-icon"><i class="fa fa-headphones"></i></span>-->
                                <div class="address">
                                    <h3 class="title">Contact Info</h3>
                                    <p>PHONE:+8801XXX-XXXXXX</p>
                                    <p>+8801XXX-XXXXXX</p>
                                    <p>SKYPE:jhon.doe</p>
                                </div>
                            </div>
                            <div class="lgx-box">
                                <!--<span class="lgx-icon"><i class="fa fa-envelope"></i></span>-->
                                <div class="address">
                                    <h3 class="title">Mail Info.</h3>
                                    <p>Email:jhon.doe@example.com</p>
                                    <p>jhon.doe@example2.com</p>
                                    <p>FAX:jhon.doe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- //.CONTAINER -->

        </div><!-- //.INNER -->

    </div>
</section>



@endsection