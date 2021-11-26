
<header class="navbar navbar-dark sticky-top bg-dark shadow">
  <a class="navbar-brand d-flex align-items-center bg-dark" href="#"> <img src="/asset/logo.png" alt="">
   
  </a>
    
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        {{-- <form action="/logout" method="POST"> --}}
          @csrf 
          <a href="/" style="text-decoration: none"><Button type="submit" class="btn-red px-3 mx-3 my-3 d-none d-md-block"  ><span data-feather="log-out"></span> Logout</Button></a>

          <button class="navbar-toggler d-md-none collapsed mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        {{-- </form> --}}
      </div>
    </div>
  </header>
