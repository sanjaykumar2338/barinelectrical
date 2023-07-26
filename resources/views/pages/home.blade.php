@extends('layouts.homepage')
@section('content')
    
    @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <title>Skin Care Garden City</title>
    <!-- ========== End header ========== -->
    <!-- ========== Start slider ========== -->
    <section class="slider">
        <div id="carouselExampleCaptions-two" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions-two" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions-two" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions-two" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('/asset/frontend/images/slide-1.jpg')}}" class="d-block w-100" alt="...">

                    <div class="carousel-caption d-none d-md-block">
                        <h5>Skin Therapy </h5>
                        <p>&nbsp;</p>
                        <a href="contact.html"><button class="btn-style"> contact now</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url('/asset/frontend/images/slide-2.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>The Perfect Eyebrow </h5>
                        <p>&nbsp;</p>
                        <a href="contact.html"><button class="btn-style"> contact now</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url('/asset/frontend/images/slide-3.jpg')}}" class="d-block w-100" alt="...">

                    <div class="carousel-caption d-none d-md-block">
                        <h5>Facial Treatment</h5>
                        <p>&nbsp;</p>
                        <a href="contact.html"><button class="btn-style"> contact now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== End slider ========== -->


    <!-- ========== Start cards section ========== -->
    <section class="cards">
        <div class="container">
            <h2 class="heading-style">skin treatment</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="style-box">
                        <div class="img-box">
                            <img src="{{url('/asset/frontend/images/c-1.jpg')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>skin therapy</h4>
                            <p>Skin Therapy & Treatment! The best ultrasound facial
                                makes your skin look healthy, younger and beautiful.
                                Keep your skin happy. Call for an Appointment!
                            </p>
                            <a href="tel:+15164458035"><button class="btn-style"> contact now</button></a>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="style-box">
                        <div class="img-box">
                            <img src="{{url('/asset/frontend/images/c-2.jpg')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>the perfect eyebrow</h4>
                            <p>the perfect eyebrow shap ! take care of your look keey your eyebrows clean and shapely
                                call for appoitment</p>
                            <a href="tel:+15164458035"><button class="btn-style"> contact now</button></a>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="style-box">
                        <div class="img-box">
                            <img src="{{url('/asset/frontend/images/c-3.jpg')}}" alt="">

                        </div>
                        <div class="text">
                            <h4>facial treatment</h4>
                            <p>Get a Facial Now! Rejuvenate you skin with
                                amazing cleaning, pealing treatment. Call for an
                                Appointment!</p>
                            <a href="tel:+15164458035"><button class="btn-style"> contact now</button></a>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ========== End cards section ========== -->

    <!-- ========== Start about us ========== -->
    <section class="about-us">
        <div class="container">
            <h3 class="heading-style">about us</h3>
            <p class="text-center style">Skin care clinic</p>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{url('/asset/frontend/images/s-.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{url('/asset/frontend/images/c-3.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{url('/asset/frontend/images/s-2.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="right-text">
                        <h3>facial and body treatments that make your feeel like new</h3>
                        <li>block and wihit head removal </li>
                        <li>herbal deep pealing</li>
                        <li>anto aging facelifit treatment</li>
                        <li>acne tratment</li>
                        <li>microdemabraion pealing</li>
                        <li>ultrasound facial</li>
                        <li>skin toa removal</li>
                        <a href="tel:+15164458035"><button class="btn-style"> contact now</button></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End about us ========== -->

    <!-- ========== Start reviews ========== -->
    <section class="reviews">
        <div class="container">
            <h3 class="heading-style padding">Testimonial</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="style-box">
                        <div class="img-box">
                            <h3>Cheryl Minsky</h3>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <div class="text">
                            <p>I have been going to Skin Care in Garden City for the past 10 years, and no one does a better facial than Tanya. She is thorough, knowledgeable, and cares so much about doing her best work. When you are finished, you know your skin is clean. I will not let anyone else touch my eyebrows either. Tanya is both an excellent aesthetician and a wonderful human being.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="style-box">
                        <div class="img-box">
                            <h3>Tasnim Rashid</h3>
                            <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                        </div>
                        <div class="text">
                            <p>Tanya is incredible! She is truly an expert and will always recommend the treatment that is best for you. I have been going to her for the past 2 months and will continue as long as she will have me.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="style-box">
                        <div class="img-box">
                            <h3>Maya Bensen</h3>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <div class="text">
                            <p>I saw Tanya for the first time last week and had a great experience! She took her time to study my skin and did a very thorough initial cleaning. She definitely knows what she is doing and loving it too. I felt very relaxed. She immediately noticed my uneven eyebrows and suggested to leave them alone for a couple of months so she can reshape it. I look forward to it! Tanya keeps her place clean and is very careful Covid-wise.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="style-box">
                        <div class="img-box">
                            <h3>Beth Kendrick</h3>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>

                        </div>
                        <div class="text">
                            <p>I’ve been going to see Tanya for 16 years for all my skin care and waxing needs. She is absolutely one of a kind. She works with such focus making sure everything she does for me is done perfectly. The products she uses are top of the line. I wouldn’t go anywhere else and recommend her highly.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- ========== End reviews ========== -->



    <!-- ========== Start certificates ========== -->
    <section class="certificates">
        <div class="container">
            <h2 class="heading-style">certificates</h2>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="main-box">
                        <div class="img">
                            <img src="{{url('/asset/frontend/images/1.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="main-box">
                        <div class="img">
                            <img src="{{url('/asset/frontend/images/2.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="main-box">
                        <div class="img">
                            <img src="{{url('/asset/frontend/images/3.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="main-box">
                        <div class="img">
                            <img src="{{url('/asset/frontend/images/4.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="main-box">
                        <div class="img">
                            <img src="{{url('/asset/frontend/images/5.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- ========== End certificates ========== -->



    <!-- ========== Start maps ========== -->
    <section class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24765012.226797476!2d-115.8252389!3d40.738424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c27d5bba560555%3A0xd51faf176955486a!2sSkin%20Care%20Garden%20City!5e0!3m2!1sen!2sin!4v1688545693892!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- ========== End maps ========== -->
@stop