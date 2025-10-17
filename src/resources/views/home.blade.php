<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>DigiMedia - Creative SEO HTML5 Template</title>

<!-- ================= CSS Fayllar ================= -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/animated.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.css') }}">
<link rel="stylesheet" href="{{ asset('css/templatemo-digimedia-v3.css') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

<style>
  .flash-message {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    padding: 15px 25px;
    border-radius: 8px;
    box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
    z-index: 1000;
    font-family: 'Montserrat', sans-serif;
    max-width: 90%;
    animation: fadeInOut 5s forwards;
}

.flash-success { 
    background-color: #4CAF50; /* yashil rang */
    color: #fff; 
}

.close-btn {
    margin-left: 15px;
    cursor: pointer;
    font-weight: bold;
}

/* xabar 5 soniyada avtomatik yo‘qoladi */
@keyframes fadeInOut {
    0% {opacity: 0;}
    10% {opacity: 1;}
    90% {opacity: 1;}
    100% {opacity: 0;}
}





.navbar-buttons {
    display: flex;
    gap: 10px; /* tugmalar orasidagi bo'shliq */
}

.btn {
    padding: 8px 20px;
    font-size: 14px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

/* Sign up tugmasi */
.btn-signup {
    color: #000;
    background-color: transparent;
    border: 1px solid #000;
}

.btn-signup:hover {
    background-color: #000;
    color: #fff;
}

/* Log in tugmasi */
.btn-login {
    color: #fff !important;
    background-color: #0b0a23; /* siz yuklagan rasmga mos rang */
    border: none;
}

.btn-login:hover {
    background-color: #1b1a47;
}


</style>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>digimedia@company.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>010-020-0340</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="{{ asset('images/logo-v3.png') }}" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Projects</a></li>
              <li class="scroll-to-section"><a href="#blog">Blog</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
              <li class="scroll-to-section">
                  
                <div class="navbar-buttons">
                    <a href="/register" class="btn btn-signup">Sign up</a>
                    <a href="/login" class="btn btn-login">Log in</a>
                </div>
  
              </li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

    <!-- Success xabar -->
  @if(Session::has('success'))
      <div class="flash-message flash-success">
          {{ Session::get('success') }}
          <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
      </div>
  @endif

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Digital Media Agency</h6>
                    <h2>We Boost Your Website Traffic</h2>
                    <p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Free Quote</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('images/slider-dec-v3.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('images/about-dec-v3.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Who is DigiMedia <em>Agency</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>We hope this DigiMedia template is useful for your work. You can use this template for any purpose. You may <a rel="nofollow" href="http://paypal.me/templatemo" target="_blank">contribute a little amount</a> via PayPal to <a href="https://templatemo.com/contact" target="_blank">support TemplateMo</a> in creating new templates regularly.</p>
                <div class="skills">
  <div class="skill">
    <div class="outer-circle" style="--percent:90; --color:#4da6e7;">
      <div class="inner-circle">
        <h3>90%</h3>
        <p>Coding</p>
      </div>
    </div>
  </div>

  <div class="skill">
    <div class="outer-circle" style="--percent:80; --color:#7b61ff;">
      <div class="inner-circle">
        <h3>80%</h3>
        <p>Photoshop</p>
      </div>
    </div>
  </div>

  <div class="skill">
    <div class="outer-circle" style="--percent:80; --color:#ff7b39;">
      <div class="inner-circle">
        <h3>80%</h3>
        <p>Animation</p>
      </div>
    </div>
  </div>
</div>

              
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Our Services</h6>
            <h4>What Our Agency <em>Provides</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="{{ asset('images/service-icon-03.png') }}" alt=""></span>
                        Apartments
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ asset('images/service-icon-03.png') }}" alt=""></span>
                        Food &amp; Life
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ asset('images/service-icon-03.png') }}" alt=""></span>
                        Cars
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ asset('images/service-icon-04.png') }}" alt=""></span>
                        Shopping
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ asset('images/service-icon-03.png') }}" alt=""></span>
                        Traveling
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>SEO Analysis &amp; Daily Reports</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ asset('images/services-image.jpg') }}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Healthy Food &amp; Life</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ asset('images/services-image-02.jpg') }}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Car Re-search &amp; Transport</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ asset('images/services-image-03.jpg') }}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Online Shopping &amp; Tracking ID</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ asset('images/services-image-04.jpg') }}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Enjoy &amp; Travel</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ asset('images/services-image.jpg') }}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div id="free-quote" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Get Your Free Quote</h6>
            <h4>Grow With Us Now</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <form id="search" action="#" method="GET">
            <div class="row">
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <input type="web" name="web" class="website" placeholder="Your website URL..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <button type="submit" class="main-button">Get Quote Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Our Portofolio</h6>
            <h4>See Our Recent <em>Projects</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>

    @include('carusel');

  
 <div id="blog" class="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="section-heading">
          <h6>Recent News</h6>
          <h4>Check Our Blog <em>Posts</em></h4>
          <div class="line-dec"></div>
        </div>
      </div>

      <!-- Asosiy post (o'ng tomonda) -->
      <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
        <div id="main-post" class="blog-post">
          <div class="thumb">
            <img src="{{ asset('images/blog-post-01.jpg') }}" alt="">
          </div>
          <div class="down-content">
            <span class="category">SEO Analysis</span>
            <span class="date">03 August 2021</span>
            <h4>Lorem Ipsum Dolor Sit Amet</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <span class="author">
              <img src="{{ asset('images/author-post.jpg') }}" alt="">By: Andrea Mentuzi
            </span>
            <div class="border-first-button"><div>Discover More</div></div>
          </div>
        </div>
      </div>

      <!-- Chap tomondagi scrollable bloglar -->
      <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="blog-posts scrollable-posts">
          <div class="row">

            <div class="col-lg-12">
              <div class="post-item" onclick="showPost(this)"
                   data-img="{{ asset('images/blog-post-02.jpg') }}"
                   data-title="New SEO Strategy"
                   data-text="Learn about new SEO trends for 2025."
                   data-date="24 September 2021"
                   data-author="John Doe">
                <div class="thumb">
                  <img src="{{ asset('images/blog-post-02.jpg') }}" alt="">
                </div>
                <div class="right-content">
                  <span class="category">SEO Analysis</span>
                  <span class="date">24 September 2021</span>
                  <h4>New SEO Strategy</h4>
                  <p>Learn about new SEO trends for 2025.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="post-item" onclick="showPost(this)"
                   data-img="{{ asset('images/blog-post-03.jpg') }}"
                   data-title="Marketing Tips"
                   data-text="Effective marketing ideas that work."
                   data-date="10 October 2021"
                   data-author="Sarah Lee">
                <div class="thumb">
                  <img src="{{ asset('images/blog-post-03.jpg') }}" alt="">
                </div>
                <div class="right-content">
                  <span class="category">Marketing</span>
                  <span class="date">10 October 2021</span>
                  <h4>Marketing Tips</h4>
                  <p>Effective marketing ideas that work.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="post-item last-post-item" onclick="showPost(this)"
                   data-img="{{ asset('images/blog-post-04.jpg') }}"
                   data-title="Design Inspiration"
                   data-text="Creative web design ideas and layouts."
                   data-date="15 November 2021"
                   data-author="Mark Liu">
                <div class="thumb">
                  <img src="{{ asset('images/blog-post-04.jpg') }}" alt="">
                </div>
                <div class="right-content">
                  <span class="category">Design</span>
                  <span class="date">15 November 2021</span>
                  <h4>Design Inspiration</h4>
                  <p>Creative web design ideas and layouts.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>



  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="{{ asset('images/contact-dec-v3.png') }}" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('images/phone-icon.png') }}" alt="">
                          <a href="#">010-020-0340</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('images/email-icon.png') }}" alt="">
                          <a href="#">our@email.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('images/location-icon.png') }}" alt="">
                          <a href="#">123 Rio de Janeiro</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
<div class="footer-5-column">
  <div class="footer-container">
    <!-- Footer Navigation Start -->
    <div class="footer-navbar-container">
      <div class="footer-company-details">
        <!-- <div class="footer-details-inner"> -->
        <div class="footer-logo">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" color="#000" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
          </svg>
        </div>
        <div class="footer-content">
          <p>
            Frontend-Snippets is 100% free production-ready code snippets for front-end development. It offers a
            wide variety of code snippets for HTML, CSS, SCSS, and JavaScript. Make your Front-End Development 2X
            Faster.
          </p>
        </div>
        <div class="footer-icons">
          <ul>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path
                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <!-- </div> -->
      </div>
      <div class="footer-navbar">
        <div class="footer-navbar-col">
          <h5>Solutions</h5>
          <ul>
            <li><a href="#"> Marketing </a></li>
            <li><a href="#"> Analyst </a></li>
            <li><a href="#"> Insight </a></li>
            <li><a href="#"> Commerce </a></li>
          </ul>
        </div>
        <div class="footer-navbar-col">
          <h5>Support</h5>
          <ul>
            <li><a href="#"> Insight </a></li>
            <li><a href="#"> Analyst </a></li>
            <li><a href="#"> Marketing </a></li>
            <li><a href="#"> Commerce </a></li>
          </ul>
        </div>
        <div class="footer-navbar-col">
          <h5>Company</h5>
          <ul>
            <li><a href="#"> Analyst </a></li>
            <li><a href="#"> Commerce </a></li>
            <li><a href="#"> Marketing </a></li>
            <li><a href="#"> Insight </a></li>
          </ul>
        </div>
        <div class="footer-navbar-col">
          <h5>Legal</h5>
          <ul>
            <li><a href="#"> Commerce </a></li>
            <li><a href="#"> Analyst </a></li>
            <li><a href="#"> Insight </a></li>
            <li><a href="#"> Marketing </a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Footer Navigation End -->
    <div class="footer-copyright">
      <p>© 2023 Frontend-Snippets - All Rights Reserved</p>
    </div>
  </div>
</div>
<!-- Footer End-->

    <!-- ================= JS Fayllar ================= -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

  


</body>
</html>