@extends('layouts.homepage')
@section('content')
    
    @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <!-- ========== Start banner ========== -->
    <section id="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 col-12 d-flex  ">
                    <div class="left-side-style">
                        <h2>Los Angeles Electrical </h2>
                        <p class="We"><span style="color:#F6821E; text-transform: capitalize; font-weight: 400;">We are
                                a company of trusted electricians. </span> We are licensed by the Contractors State
                            License
                            Board – (CSLB).
                            We provide quality electrical services in San Fernando Valley and Los Angeles. Call us when
                            you are building a new home, decorating a new store or just need home electrical wiring.</p>
                        <h3>what kind of electrical work we do ?</h3>
                        <!-- row  -->
                        <div class="row ">
                            <div class="col-md-5 col-sm-12 col-12 flex aalign-itmes-center ">
                                <div class="img-box">
                                    <img src="{{url('/asset/frontend/images/img-1.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-12 ">
                                <div class="right-text">
                                    <li>
                                        Indoor and outdoor lighting Fixture wiring and Installation
                                    </li>
                                    <li>
                                        Commercial electrical circuit breaker installation
                                        Small business electrical meter and main panel upgrade
                                    </li>
                                    <li>
                                        Assembly line controller room setup and programming
                                    </li>
                                    <li>
                                        Assembly line setup and wiring.
                                        PLC programming and industrial automation setup
                                        Factory machinery and commercial equipment control panel installation
                                    </li>
                                    <li>
                                        Assembly line controller room setup and programming

                                    </li>




                                </div>

                            </div>
                            <H2 class="GET"><em> GET A FREE ESTIMATE FORM & 24 HOUR ELECTRICIAN WE ARE INSTALLERS OF
                                    INDOOR & OUTDOOR WLWCTRICAL SYSTEMS WE INSTALL LIGHNNG APPLLANCES AND HOME SECURITY
                                    SYSYTEMS</em> .</H2>
                        </div>


                    </div>
                </div>

                <div class="col-lg-4  col-md-12 col-sm-12 col-12 z-index offset-lg-1">
                    <div class="right-form">
                        <div class="form-top">
                            <p>call us now.. 8185856123 </p>
                        </div>
                        <div class="call-text">
                            <h3>request an appontment</h3>
                            <button class=""> schedule now</button>
                        </div>
                        <div class="input-text">
                            <p>Lorem ipsum dolor . quisquam qui , architecto sint aut, exercitationem alias aspernatur
                                neque accusantium inventore illo saepe ipsa.</p>
                            <form action="">
                                <input type="text" name="" id="" placeholder="name">
                                <input type="email" name="" id="" placeholder="email">
                                <textarea name="" id="" rows="4" placeholder="Message "></textarea>
                                <button class="send">send</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- ========== End banner ========== -->


    <!-- ========== Start learn more about us  ========== -->
    <section class="learn-about">
        <div class="container">
            <h3 class="learn-more">Learn more about residential and commercial code compliant electrical system wiring
                and service estimates now.</h3>
            <p class="Get-a">Get a free estimate from a master electrician now. </p>
            <p class="HOUR"> 24 HOUR EMERGENCY CONTACT NUMBER : <span class="number">818-585-6123.</span></p>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="img">
                        <img src="{{url('/asset/frontend/images/1.jpg')}}" alt="">
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center">
                    <div class="text">
                        <h3 class="Hire">Hire a licensed contractor for indoor & outdoor electrical system installation.
                        </h3>
                        <p class="We-install">We install lighting and comply with California Title 24 Building Energy
                            Efficiency Standards. We install exit signs with battery backup and emergency lights plus
                            security systems for your manufactures or office. </p>

                        <p class="We-install"> Get electrical wiring services for a new construction. We bring power and
                            data into your
                            smart home or building. Enjoy safety, security and comfort at your business. We connect your
                            machines and equipment to your network</p>
                        <button class="Learn"> Learn More</button>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- ========== End learn more about us  ========== -->

    <!-- ========== Start section two about us  ========== -->
    <section id="about-us">
        <div class="container">
            <h3 class="heading-style">residential electricians </h3>
            <p class="We-do">We do more than repair power outlets and connect switches, lights and ceiling fans. We
                install data outlets, chandeliers, recessed lighting and under cabinet lights here. <br>We provide a top
                quality electrical panel upgrade service. Call us for new construction wiring installation.</p>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="text">
                        <h4>Hire a Los Angeles Electrical Installer</h4>
                        <li>> Home theater and entertainment system</li>
                        <li>> Landscape light design</li>
                        <li> > Home security camera systems</li>
                        <li>> CCTV office security and alarm system</li>
                        <li>> Secure home network setup with redundant safety systems</li>
                        <li>> Outdoor area LED lighting</li>
                        <li>> Outdoor wall fixture lighting</li>
                        <li>> Electrical panels and circuit breakers</li>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="img">

                        <img src="{{url('/asset/frontend/images/about-us.avif')}}" alt="" class="img-fluid">
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ========== End section two about us  ========== -->


    <!-- ========== Start Commercial cards ========== -->
    <section class="commercial-cards">
        <div class="container">
            <h3 class="heading-style text-center">Commercial Electrical Contractors.
            </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="cards-style">
                        <div class="img-icon">
                            <img src="{{url('/asset/frontend/images/watch.png')}}" alt="">
                        </div>
                        <div class="text">
                            <p>Our commitment to companies, factories and small business is the reason why we provide
                                our 24 hour emergency electrical repair services. We are available when your electric
                                gate is down and when you are having problems with parking lot lighting.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  ">
                    <div class="cards-style">
                        <div class="img-icon">
                            <img src="{{url('/asset/frontend/images/icon-1.png')}}" alt="">
                        </div>
                        <div class="text">
                            <p>Our commitment to companies, factories and small business is the reason why we provide
                                our 24 hour emergency electrical repair services. We are available when your electric
                                gate is down and when you are having problems with parking lot lighting.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  ">
                    <div class="cards-style">
                        <div class="img-icon">
                            <img src="{{url('/asset/frontend/images/icon-2.png')}}" alt="">

                        </div>
                        <div class="text">
                            <p>Our commitment to companies, factories and small business is the reason why we provide
                                our 24 hour emergency electrical repair services. We are available when your electric
                                gate is down and when you are having problems with parking lot lighting.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  ">
                    <div class="cards-style">
                        <div class="img-icon">
                            <img src="{{url('/asset/frontend/images/icon-3.png')}}" alt="">

                        </div>
                        <div class="text">
                            <p>Our commitment to companies, factories and small business is the reason why we provide
                                our 24 hour emergency electrical repair services. We are available when your electric
                                gate is down and when you are having problems with parking lot lighting.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- ========== End Commercial cards ========== -->


    <!-- ========== Start services ========== -->
    <section class="s-cards">
        <div class="container">
            <h3 class="provide">We provide commercial electrical troubleshooting and repair services to Los
                Angeles small businesses, parking lots and commercial buildings.</h3>
            <div class="row mt-lg-5">
                <div class="col-md-4 col-sm-6 col-12 set-padding-sm set-padding-sm">
                    <div class="card-syle">
                        <div class="img">
                            <img src="{{url('/asset/frontend/images/card.jpg')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>smart electric wiring for home </h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique obcaecati rem deserunt
                                aliquam? Inventore eveniet magnam harum .</p>
                            <button class="learn"> learn more</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-12 set-padding-sm">
                    <div class="card-syle">
                        <div class="img">
                            <img src="{{url('/asset/frontend/images/img-2.jpg')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>smart electric wiring for home </h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique obcaecati rem deserunt
                                aliquam? Inventore eveniet magnam harum .</p>
                            <button class="learn"> learn more</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-12 set-padding-sm">
                    <div class="card-syle">
                        <div class="img">
                            <img src="{{url('/asset/frontend/images/img-3.jpg')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>smart electric wiring for home </h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique obcaecati rem deserunt
                                aliquam? Inventore eveniet magnam harum .</p>
                            <button class="learn"> learn more</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- ========== End services ========== -->

    <!-- ========== Start emergency ========== -->
    <section id="emergency">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12  d-flex justify-content-center align-items-center">
                    <h3> <em>emergency </em></h3>
                </div>
                <div class="col-md-6 col-sm-6 col-12  d-flex justify-content-center align-items-center">
                    <h4>24/7 emergency Electrical services</h4>
                </div>
                <div class="col-md-3 col-sm-6 col-12  d-flex justify-content-center align-items-center">
                    <button>call us now</button>
                </div>
            </div>

        </div>
    </section>
    <!-- ========== End emergency ========== -->

    <!-- ========== Start banner slider section ========== -->
    <section class="banner-slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('/asset/frontend/images/slide-1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption ">
                        <h5>general electrical cintractors for commercial <br> industrial projects</h5>
                        <p>we are commercial electrical contractors in los angeles</p>
                        <button> Read more</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url('/asset/frontend/images/Group 3.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>general electrical cintractors for commercial <br> industrial projects</h5>

                        <p>we are commercial electrical contractors in los angeles</p>
                        <button> Read more</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url('/asset/frontend/images/slide-3.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption ">
                        <h5>general electrical cintractors for commercial <br> industrial projects</h5>

                        <p>we are commercial electrical contractors in los angeles</p>
                        <button> Read more</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ========== End banner slider section ========== -->

    <!-- ========== Start our reputation matters! ========== -->
    <section class="reputation-matters">
        <div class="container">
            <h3 class="heading-style"> our reputation matters</h3>
            <p class="We-are">We are the preferred electrical company in Los Angeles because we provide professional
                electrical
                services that matters.<br> Here is what they say about us:</p>
            <!-- boxs  -->
            <div class="owl-carousel owl-theme" id="c-one">


                <div class="item">
                    <div class="box-edit">
                        <div class="img-box">
                            <img src="{{url('/asset/frontend/images/t-1.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h5>Eli Kitt</h5>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <p>Great work. Reliable, high quality and always responds to follow up questions. Customer
                                service is A+++. Highly recommend. Read More
                            </p>
                        </div>
                    </div>
                </div>



                <div class="item">
                    <div class="box-edit">
                        <div class="img-box">
                            <img src="{{url('/asset/frontend/images/t-2.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h5>Carolin Pira</h5>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <p>
                                We had Ronald for few of our electrical projects. He did a great job, so knowledgeable
                                and professional I am so so happy with the results.. Read More
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-edit">
                        <div class="img-box">
                            <img src="{{url('/asset/frontend/images/t-1.png')}}" alt="">

                        </div>
                        <div class="text">
                            <h5>FadyEvents</h5>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <p>Ronald with BarinElectrical helped me with my lighting equipment and LED dance floor set
                                up, installation, and repairs. Ronald is is my go to guy for all... Read More
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End our reputation matters! ========== -->

    <!-- ========== Start map ========== -->
    <section class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="map-style">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.88280506054!2d-118.74138381401502!3d34.02003923646538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sin!4v1687466895404!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div>
                <div class="col-md-12 col-lg-6 col-sm-12 col-12">
                    <div class="text">
                        <h3>Local Electricians Serving San Fernando Valley and Los Angeles County
                        </h3>
                        <p class="Hire">Hire us as your electrician if your are a resident, a small business or an
                            industrial
                            building. Get the best quote on indoor and outdoor electrical wiring. Schedule an
                            appointment for commercial electrical contract work. We are near you.
                        </p>
                        <!-- row  -->
                        <div class="row mt-4">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="li-set">
                                    <li>> Agoura Hills</li>
                                    <li> > Calabasas</li>
                                    <li>> Encino</li>
                                    <li>> Los Angeles</li>
                                    <li> > Sherman Oaks</li>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="li-set">
                                    <li> Studio City</li>
                                    <li> > Universal City</li>
                                    <li> > West Hills</li>
                                    <li> > West Hollywood</li>
                                    <li> > Woodland Hills</li>
                                </div>
                            </div>

                        </div>
                        <button class="CALL"> CALL NOW: (818) 585-6123</button>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ========== End map ========== -->

    <!-- ========== Start electrical work cards ========== -->
    <section class="work-cards">
        <div class="container-fluid">
            <h3 class="heading-style">some of our electrical work</h3>
            <p class="We-take">We take pride in providing high quality electrician services to residents and small
                businesses in Los Angeles and San Fernando Valley. Contact us with details about your <br> commercial
                electrical project or electrical subcontracting needs. Hire a licensed electrical master now.</p>
            <!-- owl  -->
            <div class="owl-carousel owl-theme" id="c-two">
                <div class="item-style">
                    <div class="card-box ">
                        <img src="{{url('/asset/frontend/images/c-2.jpg')}}" alt="">
                    </div>
                    <div class="overlay">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="item-style">
                    <div class="card-box ">
                        <img src="{{url('/asset/frontend/images/c-3.jpg')}}" alt="">
                    </div>
                    <div class="overlay">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="item-style">
                    <div class="card-box ">
                        <img src="{{url('/asset/frontend/images/c-4.jpg')}}" alt="">
                    </div>
                    <div class="overlay">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="item-style">
                    <div class="card-box ">
                        <img src="{{url('/asset/frontend/images/c-5.jpg')}}" alt="">
                    </div>
                    <div class="overlay">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="item-style">
                    <div class="card-box ">
                        <img src="{{url('/asset/frontend/images/c-6.jpg')}}" alt="">
                    </div>
                    <div class="overlay">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
            </div>

        </div>
    </section>
@stop