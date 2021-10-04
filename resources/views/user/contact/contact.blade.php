@extends('user.master')
@section('content')


    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div> <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14604.018612436732!2d90.34869151804341!3d23.782848638783747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skallyanpur%20sapla%20housingnorhaji%20goli!5e0!3m2!1sen!2sbd!4v1632029146212!5m2!1sen!2sbd" width="1264" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </div><!-- End #map -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h3>Office</h3>

                            <address>kallyanpur, <br>saplahousing</address>
                        </div><!-- End .contact-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h3>Start a Conversation</h3>

                            <div><a href="mailto:#">sarker.cse11@gmail.com</a></div>
                            <div><a href="tel:#">+8801700998086</a></div>
                        </div><!-- End .contact-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h3>Social</h3>

                            <div class="social-icons social-icons-color justify-content-center">
                                <a href="https://www.facebook.com/profile.php?id=100068296032970" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .contact-box -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->

                <hr class="mt-3 mb-5 mt-md-1">
                <div class="touch-container row justify-content-center">
                    <div class="col-md-9 col-lg-7">
                        <div class="text-center">
                        <h2 class="title mb-1">Get In Touch</h2><!-- End .title mb-2 -->
                        <p class="lead text-primary">
                            We collaborate people; we’d love to build something great together.                        </p><!-- End .lead text-primary -->
                        </div><!-- End .text-center -->

                        <form action="#" class="contact-form mb-2">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="cname" class="sr-only">Name</label>
                                    <input type="text" class="form-control" id="cname"  name="name" placeholder="Name *" required>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-sm-4">
                                    <label for="cemail" class="sr-only">email</label>
                                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Email *" required>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-sm-4">
                                    <label for="cphone" class="sr-only">Phone</label>
                                    <input type="tel" class="form-control" id="cphone" name="phone" placeholder="Phone">
                                </div><!-- End .col-sm-4 -->
                            </div><!-- End .row -->

                            <label for="csubject" class="sr-only">Subject</label>
                            <input type="text" class="form-control" id="csubject" name="subject" placeholder="Subject">

                            <label for="cmessage" class="sr-only">Message</label>
                            <textarea class="form-control" cols="30" rows="4" id="cmessage" name="message" required placeholder="Message *"></textarea>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                                    <span>SUBMIT</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </div><!-- End .text-center -->
                        </form><!-- End .contact-form -->
                    </div><!-- End .col-md-9 col-lg-7 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
    @endsection