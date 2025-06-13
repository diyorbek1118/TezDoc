<!-- Header -->
<header>
    <div class="container">
      <div class="logo">
        <a href="index.html">Tez<span>Doc</span></a>
      </div>
      <nav>
        <ul class="nav-links">
          <li><a href="{{route('home')}}" class="active">Home</a></li>
          @if (Auth::check())
            <li><a href="{{route('doctype')}}">Document Types</a></li>
          @endif
          <li><a href="{{route('about')}}">About Us</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
        @if (Auth::check())
          <form action="{{ route('logout') }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-primary">Log Out</button>
          </form>    
        @else
          <div class="auth-buttons">
            <a href="{{ route('login') }}" class="btn btn-outline">Sign In</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
          </div>
            
        @endif
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
    </div>
  </header>
