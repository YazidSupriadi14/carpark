
	<!-- navbar -->
<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="{{url('/')}}" class=""><h3 class="font-weight-bold font-italic" style="color: #3700B3">Oncom Travel </h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-3">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Travel</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Service
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Testimonial</a>
      </li>
    </ul>
    
      @guest
					<!--mobile button-->
						<form class="form-inline d-sm-block d-md-none">
							<button class="btn btn-login my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{url('login')}';">Masuk</button>
						</form>
					<!--desktop button-->

						<form class="form-inline my-2 my-lg-0 d-none d-md-block">
							<a href="{{url('login')}}" title=""><button type="button" class="btn btn-login my-2 my-sm-0 px-4" onclick="event.preventDefault(); location.href='{url('login')}';">Masuk</button></a>
						</form>
      @endguest


      @auth
          <!--mobile button-->
            <form class="form-inline d-sm-block d-md-none" method="POST" action="{{url('logout')}}">
              @csrf
              <button class="btn btn-login my-2 my-sm-0 px-4" type="submit" >Keluar</button>
            </form>
          <!--desktop button-->

            <form class="form-inline my-2 my-lg-0 d-none d-md-block" method="POST" action="{{url('logout')}}">
              @csrf
              <button type="submit" class="btn btn-login my-2 my-sm-0 px-4" >Keluar</button>
            </form>
      @endauth
  </div>
	</nav>
</div>
