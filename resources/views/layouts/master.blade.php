<html>
<head>
    <title>UJIAN LARAVEL</title>
    <!-- css boostreet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<!-- navbar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h1>Klinik & Apotek V22</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">DASHBOARD<span class="sr-only">(current)</span></a>
      </li>

      <!-- membuat percabanan, untuk menghilangkan nama menu saat pasien login  -->
      @if(auth()->user()->role == 'admin')
            <li class="nav-item active">
              <a class="nav-link" href="/registrasi">ABOUT<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="/pasien">NAMA PASIEN<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="/dokter">NAMA DOKTER<span class="sr-only">(current)</span></a>
            </li>
      @endif


      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      

      <li class="nav-item active">
        <a class="nav-link" href="/logout">LOGOUT / {{auth()->user()->name}}  <span class="sr-only"> </span></a>  
        <ul class="dropdown-menu">
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
      </li> 

      <!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>{{auth()->user()->name}}</span> </a>
							<ul class="dropdown-menu">
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li> -->


   
    </ul>
    <form class="form-inline my-2 my-lg-0" method="GET" action="/pasien">
      <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    
  </div>
    </form>

    
  
</nav>



    <!-- pembungkus boostreet -->
    <div class="container">

    @yield('content')

    </div>









<!-- js boostreet -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
