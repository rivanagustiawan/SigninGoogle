<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse side">

  <div class="side d-flex d-none d-md-flex ">
  <img class="logo-img" src="/asset/logo.png" alt="">
    <div class="brand-text	d-none d-xl-block">
      <h2>LARAVEL SOCIALITE</h2>
      <h3>SIGN IN GOOGLE</h3>
    </div>
    
  </div>
  <div class="box col-lg-12 text-center mt-3 d-none d-md-block">
    <div class="frame-profile">

      <div class="bulat item-center">
        {{-- @if (auth()->user()->picAva) --}}
        {{-- <img class="profile-pic" src="{{ asset('storage/'.auth()->user()->picAva) }}">  --}}
        
        {{-- @else --}}
        <img class="profile-pic" src="{{ Session::get('ava'); }}" > 
        
        {{-- @endif --}}
      </div>
    </div>
      <div class="text-profile">
        <h3>{{ Session::get('name'); }}</h3>
        <p>{{ Session::get('email'); }}</p>
      </div>
      </div>
   
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      
      
  </div>
</nav>
