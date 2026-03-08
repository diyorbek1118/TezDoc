 <!-- Pre-header Starts -->
 <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>abdisodiqovdiyorbek@gmail.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>+998 77 056 18 36</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="https://www.instagram.com/__sodikhov"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://t.me/dddddfffffz"><i class="fab fa-telegram"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
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

          <div class="logo">
            <i class="fa-solid fa-file-lines"></i>
            <span>Tez<span class="highlight">Doc</span></span>
          </div>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{ url('/#top') }}" class="active">Asosiy</a></li>
              <li class="scroll-to-section"><a href="{{ url('/#about') }}">Biz Haqimizda</a></li>
              <li class="scroll-to-section"><a href="{{ url('/#services') }}">Xizmatlar</a></li>
              <li class="scroll-to-section"><a href="{{ route('show') }}">Hujjatlar</a></li>
              <li class="scroll-to-section"><a href="{{ url('/#blog') }}">Blog</a></li>
              <li class="scroll-to-section"><a href="{{ url('/#contact') }}">Kontakt</a></li> 
              <li class="scroll-to-section">
                  
               @guest
    <div class="navbar-buttons">
        <a href="/register" class="btn btn-signup">Ro'yxatdan o'tish</a>
        <a href="/login" class="btn btn-login">Kirish</a>
    </div>   
@else
    
                      <button class="profile-button" id="profileBtn">
                        <div class="profile-button-avatar">AD</div>
                        <span class="profile-button-name">Eddy Hernandez</span>
                    </button>

                      <div class="menu-container" id="menuContainer">
                          <div class="header">
                              <div class="header-icons">
                                  <button class="icon-btn">
                                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                          <circle cx="12" cy="12" r="10"/>
                                          <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                      </svg>
                                  </button>
                                  <div class="profile-avatar">EH</div>
                              </div>
                              <h2 class="profile-name">Eddy Hernandez</h2>
                              <div class="profile-username">@eddy</div>
                          </div>

                          <div class="menu-list">
                              <a href="">
                                <div class="menu-item">
                                  <div class="menu-icon">
                                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                          <circle cx="12" cy="7" r="4"/>
                                      </svg>
                                  </div>
                                  <span class="menu-text">Profile</span>
                                  <span class="menu-shortcut">⌘P</span>
                              </div>
                              </a>

                              <a href="">
                                <div class="menu-item">
                                  <div class="menu-icon">
                                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                          <path d="M3 9h18M3 15h18M9 3v18"/>
                                      </svg>
                                  </div>
                                  <span class="menu-text">History</span>
                                  <span class="menu-shortcut">⌘H</span>
                              </div>
                              </a>

                              <a href="">
                                <div class="menu-item">
                                  <div class="menu-icon">
                                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                          <circle cx="12" cy="12" r="3"/>
                                          <path d="M12 1v6m0 6v6M4.22 4.22l4.24 4.24m5.08 5.08l4.24 4.24M1 12h6m6 0h6M4.22 19.78l4.24-4.24m5.08-5.08l4.24-4.24"/>
                                      </svg>
                                  </div>
                                  <span class="menu-text">Settings</span>
                                  <span class="menu-shortcut">⌘S</span>
                              </div>
                              </a>

                              <a href="">
                                <div class="menu-item">
                                  <div class="menu-icon">
                                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                          <rect x="2" y="4" width="20" height="16" rx="2"/>
                                          <path d="M6 8h.01M10 8h.01M14 8h.01"/>
                                      </svg>
                                  </div>
                                  <span class="menu-text">Keyboard shortcuts</span>
                                  <span class="menu-shortcut">⌘K</span>
                              </div>
                              </a>

                              <a href="">
                                <div class="menu-item">
                                  <div class="menu-icon">
                                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                          <path d="M3 3h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3V3zM14 12h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7V12z"/>
                                      </svg>
                                  </div>
                                  <span class="menu-text">Preferences</span>
                                  <span class="menu-shortcut">⇧⌘P</span>
                              </div>
                              </a>

                              <div class="menu-divider"></div>

                              <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="menu-item logout">
                                  <div class="menu-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                      <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                      <polyline points="16 17 21 12 16 7" />
                                      <line x1="21" y1="12" x2="9" y2="12" />
                                    </svg>
                                  </div>
                                  <span class="enu-text">Chiqish</span>
                                  
                                </button>
                              </form>

                          </div>
                      </div>
@endguest
  
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
