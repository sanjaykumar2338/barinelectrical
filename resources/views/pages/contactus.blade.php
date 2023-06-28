@extends('layouts.getquote')
  @section('content')
    <!-- header close  -->
    @if (Session::has('message'))
       <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    
     <!-- ========== End header ========== -->
    <!-- ========== Start c-section ========== -->

    <section id="c-section">
        <div class="container">
            <div class="text">
                <h3>24 hours Electrical Contractors Los Angeles</h3>
            </div>
        </div>
    </section>
    <!-- ========== End c-section ========== -->

    <!-- ========== Start contact section ========== -->
    <section id="contact-section">
        <div class="container">
            <h3 class="heading-style">Contact Us</h3>
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                    <div class="style-box">
                        <h3>reach us</h3>
                        <p class="Our text-center">Our Contact Info and we' ll respond as soon as possible</p>
                        <div class="call-box">
                            <div class="icon">
                                <img src="{{url('/asset/frontend/images/call.png')}}" alt="">
                            </div>
                            <div class="text">
                                <h6>Phone No</h6>
                                <a href="#">
                                    <p> 8185856123</p>
                                </a>

                            </div>
                        </div>
                        <div class="call-box">
                            <div class="icon">
                                <img src="{{url('/asset/frontend/images/location.png')}}" alt="">
                            </div>
                            <div class="text">
                                <h6>Location</h6>
                                <a href="#">
                                    <p> 29277 Sandpiper Drive,Lake Elsinore, Ca 92530 </p>
                                </a>

                            </div>
                        </div>
                        <div class="call-box">
                            <div class="icon">
                                <img src="{{url('/asset/frontend/images/mail.png')}}" alt="">
                            </div>
                            <div class="text">
                                <h6>Email Us</h6>
                                <a href="#">
                                    <p> support@barinelectrical.com</p>
                                </a>

                            </div>
                        </div>

                        <!-- icons  -->
                        <div class="s-cions">
                            <a href="https://www.facebook.com/BarinElectrical"> <i class="fa-brands fa-facebook"></i>
                            <a href="https://www.instagram.com/BarinElectrical/"> <i class="fa-brands fa-instagram"></i></a>
                            <a href="https://twitter.com/BarinElectrical/"> <i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.youtube.com/watch?v=IVUIfAGHT8c"><i class="fa-brands fa-youtube"></i></a>
                            
                        </div>
                    </div>



                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-style">
                        <p class="Have">Have a question?</p>
                        <h4>get in touch</h4>
                        <form action="{{url('post_appointment')}}" method="post" name="post_appointment">
                            @csrf
                            <input type="text" required placeholder="Full name" name="name" id="">
                            <input type="email" required placeholder="email" name="email" id="">
                            <input type="tel" required placeholder="mobile no" name="mobile" id="">
                            <textarea required name="message" rows="4" placeholder="message"></textarea>
                            <button class="send mt-5">send</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ========== End contact section ========== -->


    <!-- ========== Start map location ========== -->
    <section class="map-location">
        <div class="container">
            <div class="col-m-12 col-12 col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.88280506054!2d-118.74138381401502!3d34.02003923646538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sin!4v1687638239678!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

        </div>
    </section>
    <!-- ========== End map location ========== -->
@stop