<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>iMOVE DEGITAL LEARNING</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/landingpage.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/"><img class="logo" src="img/logo-top.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <!-- <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul> -->

                    <ul class="navbar-nav text-uppercase ml-auto">
                <!-- <li class="nav-item">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-navbar" placeholder="Search">
                        <div class="input-group-append icon-s">
                            <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </li> -->
                <li class="nav-item enroll"><a class="nav-link js-scroll-trigger" href="/">Enroll Now!</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#program">Program</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#lecturers">Lecturers</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                
                <div class="btn-group">
                    <button type="button" class="btn btn-primary text-uppercase dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accounts
                    </button>
                    <div class="dropdown-menu">
                    
                            @if (Auth::user())
                                @if (Auth::user()->role == 'teacher')
                                   
                                        <a class="dropdown-item" href="/admin/dashboard">Dashboard</a>
                                   
                                @endif

                               
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            @else
                               
                                    <a class="dropdown-item" href="/login">Login</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/register">Sign Up</a>
                                
                            @endif

                       
                       

                    </div>
                </div>
                    




            </ul>



                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <br>
                    <div class="row">
                            <div class="col-md-12 text-md-left">
                                <div class="masthead-subheading"><b class="text-top">Ace the Philippine Psychometrician board exam with the help of board topnotchers, industry experts, and lecturers from top universities. </b> </div>
                           </div>
                    
                            <div class="col-md-4">
                            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger " href="#toplecturers">Our Lecturers <i class="fas fa-arrow-down"></i></a>
                            </div>
                        
                </div>

            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="toplecturers">
        
            <div class="container">


            <div class="row">
                    <div class="col-md-4 card p-2 ">

                        <div class="text-center header-card">
                            <span class="fa-stack fa-4x">
                                <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                                <img class="mx-auto rounded-circle" style="width: 150px;" src="img/Marie Therese Ocampo-Rigor, RPsy.png" alt="" />
                            </span>
                            <h5 class="my-3 mt-5 text-warning">Marie Therese Ocampo-Rigor, RPm, RPsy</h5>
                        </div>

                        <div class="text-md-left ">
                       
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Top 7 – 2017 Psychologist Board Exam</b></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Top 10 – 2015 Psychometrician Board Exam</b></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Faculty, Ateneo De Manila University </b></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Counseling Psychologist, Ateneo Bulatao Center for Psychological Services</b></li>
                        
                        </div>

                    </div>
                    <br>


                    <div class="col-md-4 card p-2 ">
                        <div class="text-center">
                            <span class="fa-stack fa-4x">
                                <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                                <img class="mx-auto rounded-circle" style="width: 150px;" src="img/diez.png" alt="" />
                            </span>
                            <h5 class="my-3 mt-5  text-warning">Mahjalin Airaza Bugtong-Diez, RPm, RPsy</h5>
                        </div>

                        <div class="text-md-left ">
                        
                        <li><b class="subtext-lecturers p-0 m-0  text-dark" style="font-size: 15px;">Psychologist, GrayMatters Psychological and Consultancy, Inc. </b></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Faculty, University of Batangas</b></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Certified Mental Health First Responder </b></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Top 5 – 2019 Psychologist Board Exam</b></li>
                        </div>
                    </div>

                    <div class="col-md-4 card p-2 ">
                        <div class="text-center">
                            <span class="fa-stack fa-4x">
                                <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                                <img class="mx-auto rounded-circle" style="width: 150px;" src="img/jimrey.jpg" alt="" />
                            </span>
                            <h5 class="my-3 mt-5  text-warning">Dr. Jim Rey Baloloy, RPsy</h5>
                        </div>
                        <br>
                        <div class="text-md-left">
                        
                        <li> <b class="subtext-lecturers p-0 m-0  text-dark" style="font-size: 15px;">Faculty, Dela Salle University- Manila</b> </li>
                        <li><b class="subtext-lecturers p-0 m-0  text-dark" style="font-size: 15px;">Consulting Psychologist, ChildFam Possibilities Psychosocial Services</b></li>
                        </div>
                    </div>
                    
                    

                </div>

            

            <div class="row">

                    <div class="col-md-4 card p-2">

                        <div class="text-center">
                            <span class="fa-stack fa-4x">
                                <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                                <img class="mx-auto rounded-circle" style="width: 150px;" src="img/Maricris Lad-ey Neyney, RGC, RPm.png" alt="" />
                            </span>
                            <h5 class="my-3 mt-5  text-warning">Maricris Lad-ey Neyney, RGC, RPm, LPT</h5>
                        </div>

                            <div class="text-md-left ">
                        
                            <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Top 3 – 2011 Guidance Counselor Licensure Exam</b></li>
                            <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Top 8 – 2018 Psychometrician Board Exam</b></li>
                            <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Faculty, Ilocos Sur Polytechnic State College </b></li>
                            </div>
                    </div>

                    <div class="col-md-4 card p-2">
                        <div class="text-center">
                        <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <img class="mx-auto rounded-circle" style="width: 150px;" src="img/pearlviacoballes.jpg" alt="" />
                        </span>
                        <h5 class="my-3 mt-5 text-warning">Pearl Via Coballes, RGC, RPm</h5>
                        </div>

                        <div class="text-md-left">
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Top 2, 2014 Psychometrician Licensure Exam</b> <br></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Top 5, 2012 Guidance Counselor Licensure Exam</b> <br></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Faculty, St. Mary’s University – Bayombong</b></li>
                        </div>
                    </div>
                    










                    

                    <div class="col-md-4 card p-2">
                        <div class="text-center">
                        <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <img class="mx-auto rounded-circle" style="width: 150px;" src="img/imgperuelo.png" alt="" />
                        </span>
                        <h5 class="my-3 mt-5  text-warning">Carla Marez Peruelo, RN, RPsy</h5>
                        
                        </div>
                        <div class="text-md-left">
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Psychologist, National Center for Mental Health</b></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Top 8 – 2017 Psychologist Board Exam </b></li>
                        </div>
                    </div>
            </div>

                <div class="row">

                <div class="col-md-4"></div>

                <div class="col-md-4 card p-2">
                        <div class="text-center">
                        <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <img class="mx-auto rounded-circle" style="width: 150px;" src="img/Gerald Penaranda, CSIOP, RPsy.png" alt="" />
                        </span>
                        <h5 class="my-3 mt-5 text-warning">Gerald B. Penaranda, MSc., CSIOP, RPsy</h5>
                        </div>
                        <div class="text-md-left">
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">HR and OD Trainer-Consultant</b></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Certified Specialist in Industrial / Organizational Psychology</b></li>
                        <li><b class="subtext-lecturers p-0 m-0 text-dark" style="font-size: 15px;">Faculty, De La Salle University – Manila</b></li>
                        </div>
                </div>

                <div class="col-md-4"></div>


                </div>            
                
                <br>
                <br>
                <div class="text-center">
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Enroll Now!</a>
                </div>
            </div>

        </section>


        <section class="page-section bg-dark" id="/">
            <div class="container">
                <div class="text-center text-white text-sm-left">
                    <h3 class="section-heading text-uppercase">YOU HAVE A GOOD FUTURE AHEAD OF YOU. WE WILL HELP YOU GET THERE.</h3>
                    <br>
                    <h5 class="text-md-left  font-weight-normal">We are a fully digital review program that is guaranteed comprehensive and top-quality. We created this program with one goal in mind: to lead you towards your dream of becoming a registered psychometrician.  </h5>
                </div>
                
        </section>

         <section class="page-section" id="/">
            <div class="container">
                    <h3 class="section-heading text-uppercase text-center mb-5 ">WHEN YOU ENROLL WITH US, WE PROMISE TO HELP YOU SUCCEED.</h3>
                    
                    <p class=" large font-weight-bold" style="font-size: 18px;">REVIEW PROGRAM INCLUSIONS:</p>

                
                    <li class="font-weight-normal large my-2" style="font-size: 18px;">High-quality and comprehensive video lessons based on the licensure exam tables of specifications.</li>
                    <li class="font-weight-normal large my-2" style="font-size: 18px;">Access to hundreds of free practice exam questions to develop your test-taking skills and gain confidence in taking the board exam. </li>
                    <li class="font-weight-normal large my-2" style="font-size: 18px;">Downloadable handouts and resources designed to help you gain mastery of the topics</li>
                    <li class="font-weight-normal large my-2" style="font-size: 18px;">Exclusive pass to live-streamed exam rationalization sessions where you’ll get to interact with the lecturers</li>
                    <li class="font-weight-normal large my-2" style="font-size: 18px;">Lifetime access to the program until you pass the board exam</li>
                  
                    <br>

                     <div class=" m-1 p-1">     
                    
                      
                        <h1 class="section-heading text-uppercase text-center  text-warning" style="font-size: 35px;">Php 6,750.00 <code class="text-warning"> only </code></h1>

                        <br>
                        <div class="text-center">
                        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger " href="#services">Enroll Now!</a>
                        </div>

                        <br>
                        
                    </div>

            </div>
        </section>
        <!-- About-->

        <section class="page-section bg-blue" id="program">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase  text-white"><code class="section-heading text-uppercase text-center  text-warning" style="font-size: 50px;"> FREE</code> SERVICES</h2>
                    <h3 class="section-subheading text-white">WE TAKE YOUR DREAM SERIOUSLY. WE GIVE TOTAL SUPPORT BY PROVIDING THESE SERVICES FOR FREE:</h3>
                </div>


                
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-white">
                                <!-- <h4>2009-2011</h4> -->
                                <h4 class="subheading text-justify">Psychological Preparation Program</h4>
                            </div>
                            <div class="timeline-body text-sm-left font-weight-light text-justify"><p class="text-white">Get exclusive access to our webinars that will keep you disciplined, inspired, and excited to keep moving forward. Reviewing for the board exam is a tough battle. We will equip you with every success strategy available. Know the skills of mastering your emotions, improving your focus, and sharpening your learning skills.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-white">
                                <!-- <h4>March 2011</h4> -->
                                <h4 class="subheading ">Career Preparation Program</h4>
                            </div>
                            <div class="timeline-body font-weight-light text-justify"><p class="text-white">We help prepare you for life after the board exam. Through our online training program, we’ll help you set career goals. You will also learn effective communication skills, how to make a good impression at job interviews, and how to dress successfully. We’ll teach you all that you need to know in order to gain the confidence you need to go after your dream job.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-white">
                                <!-- <h4>December 2012</h4> -->
                                <h4 class="subheading text-md-left">One-on-One Mental Wellness Support </h4>
                            </div>
                            <div class="timeline-body font-weight-light text-justify"><p class="text-white">Preparing for the board exam can cause worry and anxiety. You are not alone in your journey. You can request for a one-on-one session with our mental health professionals when you feel troubled or mentally exhausted. </p></div>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </section>


        <section class="page-section" id="lecturers">
            <div class="container">
                <div class="text-center">
                    
                    <h6 class=" section-heading text-uppercase">Our team of mental health professionals dedicated to the purpose of helping you achieve your dream of becoming a registered psychometrician</h6>
                   
                </div>

                <br> 
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/icelmonsale.jpg" alt="" />
                            <h4>Dr. Icel Monsale , RGC</h4>
                             
                           
                    
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/Irish Movido, RPsy.png" alt="" />
                            <h4>Irish Movido , RPsy</h4>
                            
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/ileenmendoza.jpg" alt="" />
                            <h4>Ileen Mendoza , RGC</h4>
                           
                            <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                </div>
                

        </section>

        <section class="page-referal cover" id="/">

                <div class="container referal">
                    
                    <div class="cover-body p-2">
                        <div class="text-md-left">
                        <h3 class="section-heading text-uppercase ">Final Bonus : Referral Program</h3><br>
                            <h4 class="col-lg-12 mx-auto text-center font-weight-light">As our way of thanking our reviewees for encouraging others to enroll with us, we give a cash incentive of Php1,000.00 for every successful referral. </h4>
                        
                        </div>
                    </div>     


                </div>


        
        </section>


        <section class="page-section bg-blue" id="/">

            <div class="container">
                <h3 class="section-heading text-uppercase text-center text-white">UNLIMITED ACCESS SO YOU CAN GAIN MASTERY OF THE COURSES</h3>
                <br>
                <div class="row">
                    <div class="col-md-5 pt-5"> 
                        <h5 class="text-white font-weight-light text-justify">Our learning platform is accessible 24 hours a day, seven days a week. Study at your own pace; you can watch part of a lecture, pause it, and take some time to digest the lessons to ensure that you are mastering the topic before moving on to the next section. Review at your own speed and get the most out of the review program.  </h5>
                    </div>
                    <div class="col-md-7 pt-5 p1 ">
                        <div class="col-md-12">
                           
                            <div class="col-md-12">
                                <h5 class="text-white font-weight-bold">Here’s a sneak peak inside iMove Digital Learning:</h5>
                            </div>

                            <div class="col-md-12 cover-body">
                                <iframe class=" col-md-12" src="img/vid.mp4" width="500" height="400" frameborder="0"></iframe>
                            </div>
                           
                        </div>

                    </div>
                    <div class="col-md-12 pt-5 text-center">
                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Enroll Now!</a>
                    </div>

                </div>
            </div>
        </section>

      


        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © iMOVE DEGITAL LEARNING  2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/landingpage.js"></script>
    </body>
</html>
