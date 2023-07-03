@extends('layouts.homepage')
@section('content')

<title>Barin Electrical</title>
<meta name="description" content="Barin Electrical, Get indoor and outdoor lighting, security cameras and electrical circuit repair. Hire Woodland Hills electricians for residential or commercial electrical work.">
<meta name="keywords" content="Barin Electrical, electrical contractors Woodland Hills"> 
    
<!-- banner-section  -->
<section id="banner-services">
        <div class="container">
            <div class="text">
                <h3>Electrical Services in Los Angeles</h3>
            </div>
        </div>
    </section>
    <!-- banner-section close -->

    <!-- ========== Start serrvies cards ========== -->
    <section id="cards-section">
        <div class="container">
            <h3 class="heading-style">Electrical Services Los Angeles.</h3>
            <p class="We-offer">We offer the best and most reliable electrical services in Los Angeles. We have a team
                of experts, from
                residential electricians and commercial electricians, including electrical subcontractors and experts in
                electrical code compliance. Whether your project is a small home electrical repair or a large-scale
                corporate project, our company offers top-notch services, affordable prices, and the comfort of knowing
                we come with licensing, knowledge, and experience.</p>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="style-box">
                        <div class="icon">
                            <img src="{{url('/asset/frontend/images/el.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>Residential Electricians</h4>
                            <p>Our residential electricians provide residential electrical services in Los Angeles,
                                taking care of your home and ensuring you and your family’s safety first. From home
                                inspections to minor and major repairs, we are the best.</p>
                            <button><a href="{{url('residential-electricians')}}" style="color:#ffffff;">Read more</a></button>
                        </div>


                    </div>

                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="style-box">
                        <div class="icon">
                            <img src="{{url('/asset/frontend/images/el.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>Commercial Electricians</h4>
                            <p>Our commercial electricians provide commercial electrical services in Los Angeles,
                                ensuring quality, efficiency, and professional solutions to all of your business,
                                corporate, government, and large-scale electrical projects..</p>
                            <button><a href="{{url('commercial-electricians')}}" style="color:#ffffff;">Read more</a></button>
                        </div>


                    </div>

                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="style-box">
                        <div class="icon">
                            <img src="{{url('/asset/frontend/images/el.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>Electrical Subcontractors</h4>
                            <p>As electrical subcontractors, we help fulfill your residential or commercial contracting
                                work in electrical jobs. From project managers to prime contractors, we work with you
                                every step of the way to get it all done right.</p>
                            <button><a href="{{url('electrical-subcontractors')}}" style="color:#ffffff;">Read more</a></button>
                        </div>


                    </div>

                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="style-box">
                        <div class="icon">
                            <img src="{{url('/asset/frontend/images/el.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>Electrical Code Compliance</h4>
                            <p>All of our services follow the National Electric Code (NEC), which is a standard for safe
                                installation and handling of all electrical wiring work. We follow the American National
                                Standards Institute for electrical code compliance.</p>
                            <button><a href="{{url('electrical-code-compliance')}}" style="color:#ffffff;">Read more</a></button>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ========== End serrvies cards ========== -->

@stop
