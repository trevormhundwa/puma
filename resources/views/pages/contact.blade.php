@extends('layouts.main')

@section('banner-header')
    <h1 class="sec-heading">Get more <strong style="font-weight: 700;color: #379dd3;">leads </strong>for your business from our <strong style="font-weight: 700;color: #379dd3;">business </strong>package</h1>
@endsection

@section('content')

<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Contact Us</h2>
            <div class="separater"></div>
        </div>
        <div class="row clearfix">
            <div class="form-column col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="inner-column">

                    <!-- Default Form -->
                    <div class="default-form contact-form">
                        <!--Default Form-->
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Enter Name" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Enter Email" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="subject" placeholder="Enter Subject" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="phone" placeholder="Enter Phone" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Massage"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Now</button>
                                </div>

                            </div>
                        </form>

                    </div>
                    <!--End Default Form -->

                </div>
            </div>
            <div class="info-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <!--List Style Three-->
                <ul class="list-style-three">
                    <li><span class="icon flaticon-note"></span><strong>support@industry.com</strong>We reply within 24 hours</li>
                    <li><span class="icon flaticon-telephone"></span><strong>Have Any Question</strong>+44 567 88888</li>
                    <li><span class="icon fa fa-clock-o"></span><strong>Working Hours</strong>Mon-Fri, 9am until 6pm</li>
                    <li><span class="icon fa fa-map-marker"></span>Mountain Drive, Kensington, <br> London, United Kingdom.</li>
                </ul>
                <ul class="social-icon-two">
                    <li class="follow">Follow us :</li>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section-->

<!--Map Section-->
<section class="auto-container">
    <!--Map Outer-->
    <div class="map-outer">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.8631240225186!2d31.133119333092765!3d-17.845050298865353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931bb83837d36eb%3A0xd30fe7c7c9078bf6!2sMutare+Rd%2C+Harare!5e0!3m2!1sen!2szw!4v1528200798491" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
</section>
<!--End Map Section-->

@endsection
