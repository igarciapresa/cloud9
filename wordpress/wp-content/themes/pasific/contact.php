<?php
/*
Template Name: Contact
*/

get_header();
get_template_part('nav');
?>

<!-- Search Modal Dialog Box
    ===================================== -->
    <div id="searchModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-gray">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                </div>
                <div class="modal-body">
                    <form action="#" class="inline-form">
                        <input type="text" class="modal-search-input" autofocus>
                    </form>
                </div>
                <div class="modal-footer bg-gray">
                    <span class="text-center"><a href="page-contact-3.html#" class="color-dark">Advanced Search</a></span>
                </div>
            </div>

        </div>
    </div>

    <!-- Google Map Area
    ===================================== -->
    <div id="googleMap" class="mt70 parallax-window-2" data-parallax="scroll" data-speed="0.5" data-image-src="img/bg/3-2.jpg"></div>


    <!-- Contact Us Area
    =====================================-->
    <div id="contact" class="pt50 pb100">
        <div class="container">
            <div class="row">
                <h3 class="text-center">
                    <small>Get In Touch</small>
                    Please feel free to say anything with us.
                    <small class="heading heading-dotted center-block"></small>
                </h3>
            </div>
            <div class="row text-center mt40">

                <div class="col-md-2 col-md-offset-2 col-sm-3 col-sm-offset-1 col-xs-6 animated" data-animation="zoomIn" data-animation-delay="100">
                    <div class="content-box content-box-center mb20">
                        <span class="icon-streetsign color-pasific"></span>
                        <h4>Address</h4>
                        <p>London Business, UK.</p>

                    </div>
                </div>


                <div class="col-md-2 col-sm-3 col-xs-6 animated" data-animation="zoomIn" data-animation-delay="100">
                    <div class="content-box content-box-center mb20">
                        <span class="icon-envelope color-pasific"></span>
                        <h4>Email</h4>
                        <p><a href="page-contact-3.html#">info@domain.com</a></p>

                    </div>
                </div>

                <div class="col-md-2 col-sm-3 col-xs-6 animated" data-animation="zoomIn" data-animation-delay="100">
                    <div class="content-box content-box-center mb20">
                        <span class="icon-tools color-pasific"></span>
                        <h4>Support</h4>
                        <p><a href="page-contact-3.html#">support@domain.com</a></p>

                    </div>
                </div>

                <div class="col-md-2 col-sm-3 col-xs-6 animated" data-animation="zoomIn" data-animation-delay="100">
                    <div class="content-box content-box-center mb20">
                        <span class=" icon-chat color-pasific"></span>
                        <h4>Online Chat</h4>
                        <p>skype.account</p>

                    </div>
                </div>

            </div>

            <div class="row mt30">
                <form name="contactform" id="contactForm" method="post" action="assets/php/send.php">

                    <!-- fullname start -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="senderName" id="senderName" class="input-md input-rounded form-control" placeholder="fullname" maxlength="100" required>
                        </div>
                    </div>
                    <!-- fullname end -->

                    <!-- email start -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" name="senderEmail" id="senderEmail" class="input-md input-rounded form-control" placeholder="email address" maxlength="100" required>
                        </div>
                    </div>
                    <!-- email end -->

                    <!-- website start -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="url" name="senderWebsite" id="senderWebsite" class="input-md input-rounded form-control" placeholder="http://" maxlength="100">
                        </div>
                    </div>
                    <!-- website end -->

                    <!-- security start -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="senderHuman" id="senderHuman" class="input-md input-rounded form-control" placeholder="" required>
                            <input type="hidden" name="checkHuman_a" id="checkHuman_a">
                            <input type="hidden" name="checkHuman_b" id="checkHuman_b">
                        </div>
                    </div>
                    <!-- security end -->

                    <!-- textarea start -->
                    <div class="col-sm-12">
                        <textarea class="form-control" name="message" id="message" rows="7" required></textarea>
                    </div>
                    <!-- textarea end -->

                    <!-- button start -->
                    <div class="col-sm-12 mt10 text-center">
                        <button type="submit" name="sendMessage" id="sendMessage" class="button-3d button-lg button-pasific hover-ripple-out">Send Message</button>
                    </div>
                    <!-- button end -->

                    <div id="sendingMessage" class="statusMessage sending-message"><p>Sending your message. Please wait...</p></div>
                    <div id="successMessage" class="statusMessage success-message"><p>Thanks for sending your message! We'll get back to you shortly.</p></div>
                    <div id="failureMessage" class="statusMessage failure-message"><p>There was a problem sending your message. Please try again.</p></div>
                    <div id="incompleteMessage" class="statusMessage"><p>Please complete all the fields in the form before sending.</p></div>

                </form>
            </div>

        </div>
    </div>



    <!-- Clients Area
    ===================================== -->
    <div id="client" class="bg-gray pt75 bt-solid-1">
        <div class="container">
            <div class="row">

                <div class="col-md-2 col-sm-3 col-xs-4">
                    <img src="assets/img/brand/paypal-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="350">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <img src="assets/img/brand/evernote-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <img src="assets/img/brand/microsoft-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="250">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <img src="assets/img/brand/smashing-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="200">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <img src="assets/img/brand/guardian-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="150">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <img src="assets/img/brand/linkedin-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="100">
                </div>

            </div>
        </div>
    </div>

<?php
get_footer();
?>