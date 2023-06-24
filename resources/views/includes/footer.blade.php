  <!-- ========== Start foooter ========== -->
  <footer>
        <div class="container">
            <div class="bg-color">
                <div class="row">
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
                    <div class="col-md-4 ">
                        <div class="style set-border">
                            <div class="icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="text">
                                <span> mail us</span>
                                <p class="box-one">giratan966@akoption.com</p>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="style ">
                            <div class="icon">
                                <i class="fa-solid fa-tty"></i>
                            </div>
                            <div class="text">
                                <span> call us</span>
                                <p class="box-one">8185856123</p>
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
                        <p class="f-p">Lorem d amet, sit consectetur adipisicing elit. Necessitatibus, officiis.</p>
                        <div class="icon">
                            <a href="#"> <i class="fa-brands fa-facebook"></i>
                                <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                                <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>

                </div>




                <div class="col-lg-3 col-md-6 col-sm-12 col-12   set-the-padding ">
                    <div class="menu">
                        <h2>menu</h2>
                        <li><a href="#"> home</a></li>
                        <li><a href="#"> about us</a></li>
                        <li><a href="#">electrical services </a></li>
                        <li><a href="#"> areas servies</a></li>
                        <li><a href="#"> contact us</a></li>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12 ">
                    <div class="menu">
                        <h2>servies</h2>
                        <li><a href="#"> Loaded Electricity </a></li>
                        <li><a href="#"> Place Power</a></li>
                        <li><a href="#">Wire Cutters </a></li>
                        <li><a href="#"> HighBar Electricals</a></li>
                        <li><a href="#">Power Market </a></li>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12 p-0">
                    <div class="menu">
                        <h2>Newsletter</h2>
                        <form action="">
                            <div class="input-group mb-3 form-style">
                                <input type="text" class="" placeholder="enter the mail"
                                    aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text"><img src="images/send.png" alt=""></span>
                            </div>
                            <div class="set-input">
                                <input type="checkbox" name="" id="" class="checkbox">
                                <span class="I-agree">I agree to all your terms and policies</span>
                            </div>
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