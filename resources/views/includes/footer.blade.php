<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 border-set ">
                    <div class="style-box">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="text">
                            <p class="Toll">Toll Free Customer Care</p>
                            <p class="number">+15164458035</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 border-set border-left">
                    <div class="style-box">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="text">
                            <p class="Toll">Need live support?</p>
                            <p class="number">email@skincaregardencity.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 border-set">
                    <div class="style-box">
                        <div class="icon">
                            <i class="fa-solid fa-location-arrow"></i>
                        </div>
                        <div class="text">
                            <p class="Toll">Follow Us On Social Media</p>
                            <div class="s-icon">
                                <a href="https://www.facebook.com/profile.php?id=100024018941345"><i class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.instagram.com/explore/tags/skincaregardencity/"> <i class="fa-brands fa-instagram"></i></a>                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- row-2  -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="edit">
                        <a href="index.html">
                            <h3>skin care </h3>
                        </a>
                        <p>Skin care clinic</p>
                        <form name="newsletter_email_frm" class="newsletter_email_frm" method="post" action="{{url('subscribe_newletter')}}">
                            @csrf
                            <input type="email" style="color:white" name="newsletter_email" class="newsletter_email" id="newsletter_email" placeholder="enter the email">
                            <button type="submit" class="subscribe_btn btn-style">Subscribe Now</button>
                        </form>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="edit padding-set">
                        <h2> Menu</h2>
                        <a href="{{url('/')}}">
                            <li>home</li>
                        </a>
                        <a href="{{url('/aboutus')}}">
                            <li>about us </li>
                        </a>
                        <a href="{{url('/updates')}}">
                            <li>updates</li>
                        </a>
                        <a href="{{url('/testimonial')}}">
                            <li>testimonial</li>
                        </a>
                        <a href="{{url('/gallery')}}">
                            <li>gallery</li>
                        </a>
                        <a href="{{url('/contact')}}">
                            <li>contact</li>
                        </a>
                    </div>
                </div>

              
                <div class="col-lg-4 col-md-6">
                    <div class="edit ">
                        <h2> RECENT GALLERY</h2>
                        <div class="img-set">
                            <span><img src="{{url('/asset/frontend/images/post.png')}}" alt=""></span>
                            <span><img src="{{url('/asset/frontend/images/post-1.jpg')}}" alt=""></span>
                            <span><img src="{{url('/asset/frontend/images/post-2.jpg')}}" alt=""></span>

                        </div>
                        <div class="img-set">
                            <span><img src="{{url('/asset/frontend/images/post-3.jpg')}}" alt=""></span>
                            <span><img src="{{url('/asset/frontend/images/post-4.jpg')}}" alt=""></span>
                            <span><img src="{{url('/asset/frontend/images/post-5.jpg')}}" alt=""></span>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </footer>

    <!-- ========== End footer ========== -->
    <!-- js file  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{url('/asset/frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 25,
                autoplay: true,
                autoplayTimeout: 1600,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });

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
        });

        carousel-inner
    </script>