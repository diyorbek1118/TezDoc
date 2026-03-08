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

  
 <style>
    .upload-wrapper {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        background: #f0f2f5;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        margin-top: 80px;
    }

    .upload-container {
        background: white;
        border-radius: 20px;
        padding: 40px;
        max-width: 800px;
        width: 100%;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    .upload-title {
        font-size: 32px;
        margin-bottom: 30px;
        color: #1a202c;
        font-weight: 600;
    }

    .upload-drop-zone {
        border: 3px dashed #cbd5e0;
        border-radius: 12px;
        padding: 60px 20px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        background: #f7fafc;
        margin-bottom: 20px;
    }

    .upload-drop-zone:hover {
        border-color: #667eea;
        background: #edf2f7;
    }

    .upload-drop-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 20px;
        background: #cbd5e0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        color: #718096;
    }

    .upload-drop-text {
        font-size: 18px;
        color: #4a5568;
        margin-bottom: 10px;
    }

    .upload-drop-limit {
        font-size: 14px;
        color: #a0aec0;
    }

    .upload-file-input {
        display: none;
    }

    .upload-file-list {
        margin-top: 20px;
        min-height: 50px;
    }

    .upload-file-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        margin-bottom: 15px;
        background: white;
    }

    .upload-file-info {
        display: flex;
        align-items: center;
        gap: 15px;
        flex: 1;
    }

    .upload-file-icon {
        width: 50px;
        height: 50px;
        background: #bee3f8;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .upload-file-name {
        font-size: 16px;
        font-weight: 600;
        color: #1a202c;
        word-break: break-all;
    }

    .upload-action-btn {
        width: 40px;
        height: 40px;
        border: 2px solid #e2e8f0;
        border-radius: 50%;
        background: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .upload-action-btn:hover {
        border-color: #fc8181;
        color: #fc8181;
    }

    .upload-submit-section {
        margin-top: 30px;
        text-align: center;
        padding: 20px;
        border-top: 2px solid #e2e8f0;
    }

    .upload-submit-btn {
        background: #667eea;
        color: white;
        border: none;
        padding: 12px 40px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .upload-submit-btn:hover {
        background: #5568d3;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
    }

    .upload-submit-btn:disabled {
        background: #cbd5e0;
        cursor: not-allowed;
        transform: none;
    }

    .upload-no-files {
        text-align: center;
        padding: 40px;
        color: #a0aec0;
        font-size: 16px;
    }

    .upload-error-alert {
        background: #fed7d7;
        border: 2px solid #fc8181;
        border-radius: 12px;
        padding: 15px 20px;
        margin-bottom: 20px;
        color: #c53030;
    }

    .upload-success-alert {
        background: #c6f6d5;
        border: 2px solid #48bb78;
        border-radius: 12px;
        padding: 15px 20px;
        margin-bottom: 20px;
        color: #22543d;
    }
</style>

<div class="upload-wrapper">
    <div class="upload-container">
        <h1 class="upload-title">Upload Files</h1>
        
        @if ($errors->any())
            <div class="upload-error-alert">
                <strong>⚠️ Xatolik:</strong>
                <ul style="margin: 10px 0 0 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="upload-success-alert">
                <strong>✓ {{ session('success') }}</strong>
            </div>
        @endif
        @if (session('error'))
            <div class="upload-error-alert">
                <strong>✓ {{ session('error') }}</strong>
            </div>
        @endif

        <form id="uploadForm" action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="upload-drop-zone" onclick="document.getElementById('uploadFileInput').click();">
                <div class="upload-drop-icon">
                    <span>📄</span>
                </div>
                <div class="upload-drop-text">Click to choose DOC/DOCX files</div>
                <div class="upload-drop-limit">Only .doc and .docx files | Max 10 MB</div>
            </div>

            <input type="file" id="uploadFileInput" name="file" class="upload-file-input" accept=".doc,.docx">

            <div class="upload-file-list" id="uploadFileList">
                <div class="upload-no-files">Hali fayl yuklanmagan</div>
            </div>

            <div class="upload-submit-section">
                <button type="submit" class="upload-submit-btn" id="uploadSubmitBtn" disabled>
                    Upload Files
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const uploadFileInput = document.getElementById('uploadFileInput');
    const uploadFileList = document.getElementById('uploadFileList');
    const uploadSubmitBtn = document.getElementById('uploadSubmitBtn');

    let uploadFiles = [];

    uploadFileInput.addEventListener('change', (e) => {
        uploadFiles = [];
        Array.from(e.target.files).forEach(file => {
            const ext = file.name.split('.').pop().toLowerCase();
            if ((ext === 'doc' || ext === 'docx') && file.size <= 10 * 1024 * 1024) {
                uploadFiles.push(file);
            } else if (ext !== 'doc' && ext !== 'docx') {
                alert(`${file.name} - faqat DOC/DOCX fayllar ruxsat etilgan!`);
            } else {
                alert(`${file.name} - maksimal hajm 10 MB!`);
            }
        });
        renderFiles();
    });

    function renderFiles() {
        if (uploadFiles.length === 0) {
            uploadFileList.innerHTML = '<div class="upload-no-files">Hali fayl yuklanmagan</div>';
            uploadSubmitBtn.disabled = true;
            return;
        }

        uploadSubmitBtn.disabled = false;
        uploadFileList.innerHTML = uploadFiles.map((file, index) => `
            <div class="upload-file-item">
                <div class="upload-file-info">
                    <div class="upload-file-icon">📄</div>
                    <div class="upload-file-name">${file.name}</div>
                </div>
                <button type="button" class="upload-action-btn" onclick="removeFile(${index})">🗑️</button>
            </div>
        `).join('');
    }

    function removeFile(index) {
        uploadFiles.splice(index, 1);
        const dt = new DataTransfer();
        uploadFiles.forEach(file => dt.items.add(file));
        uploadFileInput.files = dt.files;
        renderFiles();
    }

    document.getElementById('uploadForm').addEventListener('submit', () => {
        uploadSubmitBtn.disabled = true;
        uploadSubmitBtn.textContent = 'Yuklanmoqda...';
    });
</script>



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
  <div></div>