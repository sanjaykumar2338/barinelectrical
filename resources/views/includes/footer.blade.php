  <!-- ========== Start foooter ========== -->
  
  <footer>
        <div class="container">
            <div class="bg-color">
                <div class="row">
                    
                    <!--
                        <div class="col-md-4  ">
                            <div class="style set-border">
                                <div class="icons">
                                    <i class="fa-solid fa-font-awesome"></i>
                                </div>
                                <div class="text">
                                    <span>you us</span>
                                    <p class="box-one">Lorem ipsum, . Aperiam, nihil?</p>
                                </div>
                            </div>
                        </div>
                    -->

                    <div class="col-md-6 ">
                        <div class="style set-border">
                            <div class="icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="text">
                                <span> mail us</span>
                                <a href="mailto:giratan966@akoption.com" style="color: #fff;">
                                    <p class="box-one">giratan966@akoption.com</p>
                                </a>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="style ">
                            <div class="icon">
                                <i class="fa-solid fa-tty"></i>
                            </div>
                            <div class="text">
                                <span> call us</span>
                                <p class="box-one"><a style="color: white;" href="tel:8185856123">8185856123</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bg-color close  -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  ">
                    <div class="logo">
                        <a class="navbar-brand" href="#">Barin <span class="Electrical">Electrical</span></a>
                        <p class="f-p">Follow us on social media</p>
                        <div class="icon">
                                <a href="https://www.facebook.com/BarinElectrical"> <i class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.instagram.com/BarinElectrical/"> <i class="fa-brands fa-instagram"></i></a>
                                <a href="https://twitter.com/BarinElectrical/"> <i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>

                </div>




                <div class="col-lg-3 col-md-6 col-sm-12 col-12   set-the-padding ">
                    <div class="menu">
                        <h2>menu</h2>
                        <li><a href="{{url('/')}}"> home</a></li>
                        <li><a href="{{url('aboutus')}}"> about us</a></li>
                        <li><a href="{{url('electrical-services')}}">electrical services </a></li>
                        <li><a href="{{url('service-areas')}}"> areas servies</a></li>
                        <li><a href="{{url('contact-us')}}"> contact us</a></li>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12 ">
                    <div class="menu">
                        <h2>servies-areas</h2>
                        <li><a href="{{url('calabasas-electricians')}}">Calabasas Electricians </a></li>
                        <li><a href="{{url('encino')}}"> Encino Electricians </a></li>
                        <li><a href="{{url('los-angeles-electricians')}}">Los Angeles Electricians</a></li>
                        <li><a href="{{url('sherman-oaks-electricians')}}">sherman osks electricians</a></li>
                        <li><a href="{{url('studio-city')}}">studio-city</a></li>

                        <li><a href="{{url('west-hills-electricians')}}">West Hills Electricians</a></li>
                        <li><a href="{{url('west-hollywood-electricians')}}">West Hollywood Electricians</a></li>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12 p-0">
                    <div class="menu">
                        <h2>Newsletter</h2>
                        <form name="newsletter_email_frm" class="newsletter_email_frm" method="post" action="{{url('subscribe_newletter')}}">
                            @csrf
                            <div class="input-group mb-3 form-style newsletter-signup">
                                <input type="email" name="newsletter_email" required style="color: white;" class="newsletter_email" placeholder="enter the mail"
                                    aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text"><img src="images/send.png" alt=""></span>
                            </div>
                            <div class="set-input" style="display:none">
                                <input type="checkbox" name="" id="" class="checkbox">
                                <span class="I-agree">I agree to all your terms and policies</span>                                
                            </div>
                            <button type="submit" class="CALL subscribe_btn" style="background-color: #f6821e;
                                float: left;
                                margin-top: 7px;
                                color: white;">Subscribe!</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </footer>
    <!-- ========== End foooter ========== -->
    <!-- js file  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{url('/asset/frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script>

        $( ".subscribe_btn" ).click(function(e) {
            e.preventDefault();            
            let email = $('.newsletter_email').val();
            if(email){
                if(validateEmail(email)){
                    $( ".newsletter_email_frm" ).submit();
                }else{
                    alert('enter valid email..');
                }
            }
        });

        function validateEmail(email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if (!emailReg.test(email)) {
                return false;
            } else {
                return true;
            }
        }

        $('#c-one').owlCarousel({
            loop: true,
            margin: 45,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>

    <script>
        $('#c-two').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>