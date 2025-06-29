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

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/')}}" class="logo"  >
                        <img src="assets/images/logo.png" alt="" style="height: auto; width: auto;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{url('/')}}" class="active">Home</a></li>
                        <li><a href="{{url('explore')}}">Explore</a></li>
                        



                         

    @if (Route::has('login'))

    @auth

    <li>
        <a href="{{url('book_history')}}">My History</a>
    </li>
       
            <!-- Show Logout -->
            <li>
                <form method="POST" action="{{ Route('logout') }}">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: black; cursor: pointer;">
                        Logout
                    </button>
                </form>
            </li>


    @else
        <li><a href="{{ route('login') }}">Login</a></li>
        @if (Route::has('register'))
            <li><a href="{{ route('register') }}">Register</a></li>
        @endif
    @endauth
@endif

                        
                        
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
