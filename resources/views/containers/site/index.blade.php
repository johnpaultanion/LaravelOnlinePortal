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
                <li class="nav-item enroll"><a class="nav-link js-scroll-trigger" href="#">Enroll Now!</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Program</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Lecturers</a></li>
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
                <div class="masthead-subheading">Ace the Philippine Psychometrician board exam with the help of board topnotchers, industry experts, and lecturers from top universities. </div>
                    
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <img class="mx-auto rounded-circle" style="width: 150px;" src="img/Marie Therese Ocampo-Rigor, RPsy.png" alt="" />
                        </span>
                        <h4 class="my-3 mt-5 text-lecturers">Marie Therese Ocampo-Rigor, RPsy</h4>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 17px;">Top 7 Psychologists' Licensure Exam (2017)</b>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 17px;">Top 10 Psychometricians' Licensure Exam (2015)</b>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 17px;">Lecturer, Ateneo De Manila University</b>
                    </div>
                    
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <img class="mx-auto rounded-circle" style="width: 150px;" src="img/Maricris Lad-ey Neyney, RGC, RPm.png" alt="" />
                        </span>
                        <h4 class="my-3 mt-5  text-lecturers">Maricris Lad-ey Neyney, RGC, RPm</h4>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 15px;">Top 3 Guidance Counselor Licensure Exam</b>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 15px;">Top 8 Pychometricians' Licensure Exam</b>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 15px;">Instructor, Ilocos Sur Polytechnic State College</b>
                    </div>

                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <img class="mx-auto rounded-circle" style="width: 150px;" src="img/Gerald Penaranda, CSIOP, RPsy.png" alt="" />
                        </span>
                        <h4 class="my-3 mt-5 text-lecturers">Gerald Penaranda, CSIOP, RPsy</h4>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 15px;">Faculty Member, De La Salle University - Manila</b>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 15px;">HR and OD Trainer-Consultant</b>
                    </div>

                </div>

                <br>

                <div class="row text-center">
                    <div class="col-md-6">
                        <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <img class="mx-auto rounded-circle" style="width: 150px;" src="img/pearlviacoballes.jpg" alt="" />
                        </span>
                        <h4 class="my-3 mt-5 text-lecturers">Pearl Via Coballes</h4>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 17px;">Top 2, Psychometricians’ Licensure Exam (2014)</b> <br>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 17px;">Top5, Guidance Counselor Licensure Examination (2012) </b> <br>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 17px;">Assistant Professor , St. Mary's University - Bayumbong</b>
                        
                    </div>
                    
                    <div class="col-md-6">
                        <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <img class="mx-auto rounded-circle" style="width: 150px;" src="img/jimrey.jpg" alt="" />
                        </span>
                        <h4 class="my-3 mt-5  text-lecturers">Jim Rey Baloloy, Ph.D., RPsy </h4>
                        <b class="subtext-lecturers p-0 m-0" style="font-size: 15px;">Assistant Professorial Lecturer, De La Salle University – Manila</b>

                    </div>

                 

                </div>
                <br>

                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Enroll Now!</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">YOU HAVE A GOOD FUTURE AHEAD OF YOU. WE WILL HELP YOU GET THERE.</h2>
                    <h3 class="section-subheading text-muted">We are a fully digital review program that is guaranteed comprehensive and top-quality. We created this program with one goal in mind: to lead you towards your dream of becoming a registered psychometrician.  </h3>
                </div>
                
         
                    <h2 class="section-heading text-uppercase text-center mb-5">WHEN YOU ENROLL WITH US, WE PROMISE TO HELP YOU SUCCEED.</h2>
                    
                    <p class="text-muted large font-weight-bold" style="font-size: 18px;">Enroll and you’ll instantly receive:</p>

                
                    <li class="text-muted large my-2" style="font-size: 18px;">High-quality and comprehensive video lessons based on the licensure exam tables of specifications.</li>
                    <li class="text-muted large my-2" style="font-size: 18px;">Access to hundreds of free practice exam questions to develop your test-taking skills and gain confidence in taking the board exam. </li>
                    <li class="text-muted large my-2" style="font-size: 18px;">Downloadable handouts and resources designed to help you gain mastery of the topics</li>
                    <li class="text-muted large my-2" style="font-size: 18px;">Exclusive pass to live-streamed exam rationalization sessions where you’ll get to interact with the lecturer</li>
                    <li class="text-muted large my-2" style="font-size: 18px;">Lifetime access to the program until you pass the board exam</li>
                  
                    <br>


                    <h2 class="section-heading text-uppercase text-center "> Review Program Package</h2>
                    <h1 class="section-heading text-uppercase text-center  text-warning" style="font-size: 35px;">Price: Php 6,750.00</h1>

                    <br>
                    <div class="text-center">
                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger " href="#services">Enroll Now!</a>
                    </div>

        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><code class="section-heading text-uppercase text-center  text-warning" style="font-size: 50px;"> FREE</code> SERVICES</h2>
                    <h3 class="section-subheading text-muted">WE TAKE YOUR DREAM SERIOUSLY. WE GIVE TOTAL SUPPORT BY PROVIDING THESE SERVICES FOR FREE:</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>2009-2011</h4> -->
                                <h4 class="subheading">Psychological Preparation Program</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Get exclusive access to our webinars that will keep you disciplined, inspired, and excited to keep moving forward. Reviewing for the board exam is a tough battle. We will equip you with every success strategy available. Know the skills of mastering your emotions, improving your focus, and sharpening your learning skills.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>March 2011</h4> -->
                                <h4 class="subheading">CAREER PREPARATION PROGRAM</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">We help prepare you for life after the board exam. Through our online training program, we’ll help you set career goals. You will also learn effective communication skills, how to make a good impression at job interviews, and how to dress successfully. We’ll teach you all that you need to know in order to gain the confidence you need to go after your dream job.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>December 2012</h4> -->
                                <h4 class="subheading">One-on-One Mental Wellness Support </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Preparing for the board exam can cause worry and anxiety. You are not alone in your journey. You can request for a one-on-one session with our mental health professionals when you feel troubled or mentally exhausted. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <!-- <h2 class="section-heading text-uppercase">Our Amazing Team</h2> -->
                    <h2 class="section-subheading text-muted">Our team of mental health professionals dedicated to the purpose of helping you achieve your dream of becoming a registered psychometrician</h2>
                   
                </div>

                <br> <h3 class="section-subheading text-muted">Photos of mental health professionals: </h3>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/icelmonsale.jpg" alt="" />
                            <h4>Dr. Icel Monsale ,<code class="text-muted"> RGC</code></h4>
                             
                           
                    
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/Irish Movido, RPsy.png" alt="" />
                            <h4>Irish Movido ,<code class="text-muted"> RPsy</code></h4>
                            
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/ileenmendoza.jpg" alt="" />
                            <h4>Ileen Mendoza ,<code class="text-muted"> RPsy</code></h4>
                           
                            <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                </div>
                
                <br><br>
                <h2 class="section-heading text-uppercase">Final Bonus: </h2>
                

                <div class="text-center">
                <h3 class="section-heading text-uppercase text-warning">Referral Program:</h3>
                    <h3 class="col-lg-12 mx-auto text-center">As our way of thanking our reviewees for encouraging others to enroll with us, we give a cash incentive of Php1,000.00 for every successful referral. </h3>
                
                </div>

        </section>


        <section class="page-section" id="/">


        <h2 class="section-heading text-uppercase text-center ">UNLIMITED ACCESS SO YOU CAN GAIN MASTERY OF THE COURSES</h2>
        <h3 class="col-lg-10 mx-auto text-muted">Our learning platform is accessible 24 hours a day, seven days a week. Study at your own pace; you can watch part of a lecture, pause it, and take some time to digest the lessons to ensure that you are mastering the topic before moving on to the next section. Review at your own speed and get the most out of the review program.  </h3>

            <div class="row">
                <img class="col-lg-10 mx-auto" src="img/portal.png" style="height: 30em;" alt="">
            </div>
            
        </section>

        <section class="page-section" id="/">


        <h2 class="section-heading text-uppercase text-center ">EASILY NAVIGATE OUR INTERACTIVE PLATFORM</h2>
        <h3 class="col-lg-10 mx-auto text-muted">Our user-friendly virtual space will enable you to access all the resources you need. It will also allow you to have an online discussion with your fellow reviewees about the course videos. You don’t need to learn in isolation, you can interact and share ideas with your fellow reviewees. </h3>
        <br>
        <h6 class="col-lg-10 mx-auto text-muted">Here’s a sneak peak inside iMove Digital Learning:</h6>
        
            <div class="row">
            <iframe class="col-lg-10 mx-auto text-muted" src="img/vid.mp4" width="500" height="400" frameborder="0" allow="autoplay"></iframe>
            </div>
            
        </section>


        <!-- Clients-->
        <!-- <div class="py-5">
            <div class="container">
                <h2 class="section-heading text-uppercase text-center">WHEN YOU ENROLL WITH US, WE PROMISE TO HELP YOU SUCCEED.</h2>
                <p class="text-muted large font-weight-bold" style="font-size: 18px;">Enroll and you’ll instantly receive:</p>
                <li class="text-muted large my-2" style="font-size: 18px;">High-quality and comprehensive video lessons on Theories of Personality, Abnormal Psychology, Psychological Assessment, Industrial Psychology, Sikolohiyang Pilipino, Psychological Statistics, and Ethics in Psychology by credible and competent lecturers.</li>
                <li class="text-muted large my-2" style="font-size: 18px;">Unlimited access to test drills to develop your test-taking strategies</li>
                <li class="text-muted large my-2" style="font-size: 18px;">Quick reference guides for each subject designed to help you gain mastery of the topics</li>
                <li class="text-muted large my-2" style="font-size: 18px;">Exclusive pass to live-streamed exam rationalization sessions</li>
                <li class="text-muted large my-2" style="font-size: 18px;">Unlimited access to the program until the last day of the board exam</li>
                <h2 class="section-heading text-uppercase text-center my-4">Price: Php 6,750.00</h2>

            </div>
        </div> -->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
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
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Finish</li>
                                        <li>Category: Identity</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Lines</li>
                                        <li>Category: Branding</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Southwest</li>
                                        <li>Category: Website Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
