@extends('layout.main')
  
@section('content')
    
@section('title', 'Home Page')

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Onlayn hujjat yaratish xizmati</h6>
                    <h2>AI asosidagi yuridik hujjat generatori.</h2>
                    <p>TezDoc – hujjat yaratishni soddalashtiruvchi tizim. Ushbu shablon faqat shaxsiy yoki tijorat loyihalaringizda foydalanish uchun mo‘ljallangan.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Yo‘riqnoma</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('images/document-generator.png') }}" alt="">
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
                  <h6>Biz haqimizda</h6>
                  <h4>Tez hujjatlar,  <em>Oson yechimlar</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>TezDoc loyihasi sizga hujjatlarni tez, qulay va xatolarsiz yaratishda yordam beradi. Platformadan shaxsiy va tijorat maqsadlarida bemalol foydalanishingiz mumkin.TezDoc — zamonaviy O‘zbekiston uchun yaratilgan hujjat tizimi..</p>
                <div class="skills">
  <div class="skill">
    <div class="outer-circle" style="--percent:90; --color:#4da6e7;">
      <div class="inner-circle">
        <h3>90%</h3>
        <p>Tezlik</p>
      </div>
    </div>
  </div>

  <div class="skill">
    <div class="outer-circle" style="--percent:85; --color:#7b61ff;">
      <div class="inner-circle">
        <h3>85%</h3>
        <p>Qulaylik</p>
      </div>
    </div>
  </div>

  <div class="skill">
    <div class="outer-circle" style="--percent:95; --color:#ff7b39;">
      <div class="inner-circle">
        <h3>95%</h3>
        <p>Samaradorlik</p>
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
            <h6>Bizning xizmatlar</h6>
            <h4>Platformamiz  <em>imkoniyatlari</em></h4>
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
                        <span class="icon"><img src="{{ asset('images/ai-doc-gen.png') }}" alt=""></span>
                        AI generatsiya
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ asset('images/service-icon-03.png') }}" alt=""></span>
                        AI  &amp; tahrir
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ asset('images/template-doc.png') }}" alt=""></span>
                        Shablonlar
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ asset('images/convert-doc.png') }}" alt=""></span>
                        PDF/DOC convert
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ asset('images/safe-doc.png') }}" alt=""></span>
                        Xavfsiz saqlash
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
                                <h4>Yangi Avlod Kontent Yaratish Texnologiyasi</h4>
                                <p>Sun’iy intellekt asosida ishlovchi ilg‘or tizim yordamida siz matn, maqola, reklama yoki hujjatlarni bir necha soniyada yaratishingiz mumkin. AI texnologiyasi sizning uslubingizni, maqsadingizni va soha talablarini tahlil qilib, aniq va sifatli natija taqdim etadi.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Matn yaratish</span> <span><i class="fa fa-check"></i> AI tahrir</span> <span><i class="fa fa-check"></i> Avto kontent</span>
                                  <span><i class="fa fa-check"></i> AI yordamchi</span> <span><i class="fa fa-check"></i> Kreativ yozuv</span> <span><i class="fa fa-check"></i> Yozuv tizimi</span></div>
                                <p>Har bir foydalanuvchi uchun moslashuvchan, tezkor va ishonchli yechimlarni taklif etadi.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ asset('images/ai-generator.png') }}" alt="">
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
                                <h4>AI  &amp; Tahrirlash</h4>
                                <p>AI bilan tahrirlash yordamida yuqori darajasidagi natijani qisqa vaqt ichida qo‘lga kiritadi. Ushbu texnologiya kontentchi, marketing mutaxassislari va yozuvchilar uchun ideal yechim bo‘lib, matnlarni yaratish jarayonini avtomatlashtiradi.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Ai tahrir</span> <span><i class="fa fa-check"></i> Gramatika</span> <span><i class="fa fa-check"></i> Kontent</span>
                                  <span><i class="fa fa-check"></i> Uslub</span> <span><i class="fa fa-check"></i> Optimizatsiya</span> </div>
                                <p>
                                  Sun’iy intellekt yordamida matnni tahrirlash — yozuvni tez, aniq.
                                </p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ asset('images/edit-doc.png') }}" alt="">
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
                                <h4>Optimallashtirilgan Shablonlar</h4>
                                <p>Shablonlar — bu oldindan tayyorlangan matn, dizayn yoki strukturali kontent andozalari bo‘lib, ularni ishlatib tez va samarali kontent yaratish mumkin.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Shablonlar</span> <span><i class="fa fa-check"></i> Moslashuvchan</span> <span><i class="fa fa-check"></i> Professional</span>
                                  <span><i class="fa fa-check"></i> Automatlashtirilgan</span> <span><i class="fa fa-check"></i> Samarali</span> <span><i class="fa fa-check"></i> Tezkor</span></div>
                                <p>Moslashuvchan shablonlar bilan yozuv jarayoni samarali bo‘ladi.</p>
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
                                <h4>Tez va oson PDF/DOC konvertatsiya vositasi</h4>
                                <p>PDF/DOC konvertor — bu hujjatlarni bir formatdan boshqa formatga tez va oson o‘zgartirish vositasi. Foydalanuvchi PDF faylni DOC (Word) ga yoki aksincha DOC faylni PDF ga aylantirishi mumkin.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Avtomatik</span> <span><i class="fa fa-check"></i> PDF ↔ DOC</span> <span><i class="fa fa-check"></i> Sifatli</span>
                                  <span><i class="fa fa-check"></i> Tezkor</span> <span><i class="fa fa-check"></i> Format</span> <span><i class="fa fa-check"></i> Professional</span></div>
                                <p>PDF va DOC fayllarni oson, tez va professional tarzda konvertatsiya qilish imkoniyati.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ asset('images/convertor-doc.png') }}" alt="">
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
                                <h4>Ma’lumotlaringiz xavfsizligini ta’minlash tizimi</h4>
                                <p>Xavfsizlik — bu foydalanuvchi va tizim ma’lumotlarini himoya qilish jarayoni. U ma’lumotlarni ruxsatsiz kirishlardan, buzilishlardan, o‘g‘rilik va zararli dasturlardan saqlashni ta’minlaydi.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Xavfsizlik</span> <span><i class="fa fa-check"></i>Shifrlash</span> <span><i class="fa fa-check"></i> Autentifikatsiya</span>
                                  <span><i class="fa fa-check"></i> Nazorat</span> <span><i class="fa fa-check"></i> Ma’lumot xavfsizligi</span> <span><i class="fa fa-check"></i>Ishonchli tizim</span></div>
                                <p>Xavfsizlik foydalanuvchi ishonchini oshiradi, kontent va ma’lumotlarni himoyalaydi hamda tizimning uzluksiz ishlashini ta’minlaydi.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ asset('images/security-doc.png') }}" alt="">
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
            <h6>Bizning Hujjatlar</h6>
            <h4>Tezkor Hujjatlar<em> Yarating</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>

    @include('home.carusel');

  
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
            <h6>Biz bilan bog'lanish</h6>
            <h4>Biz bilan bog'laning <em>Hozir</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="{{ asset('images/contact-dec-v3.png') }}" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
<iframe 
  src="https://maps.google.com/maps?q=Samarkand,+Uzbekistan&t=&z=13&ie=UTF8&iwloc=&output=embed" 
  width="100%" 
  height="636px" 
  frameborder="0" 
  style="border:0" 
  allowfullscreen>
</iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('images/phone-icon.png') }}" alt="">
                          <a href="#">+998 77 056 18 36</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('images/email-icon.png') }}" alt="">
                          <a href="#">sodikhovd@gmail.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('images/location-icon.png') }}" alt="">
                          <a href="#">Tatu Samarqand filiali</a>
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

  @endsection