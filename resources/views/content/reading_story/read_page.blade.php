@extends('layouts/contentNavbarLayout')

@section('title', 'Reading Story')

@section('vendor-style')
  @vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection


@section('content')

  <body class="bg-dark container">
{{--  <nav class="navbar text-light navbar-light bg-light fixed-top">--}}
{{--    <div class="container-fluid">--}}
{{--      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--      </button>--}}
{{--      <a class="navbar-brand" href="#">Offcanvas navbar</a>--}}
{{--      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">--}}
{{--        <div class="offcanvas-header">--}}
{{--          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>--}}
{{--          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>--}}
{{--        </div>--}}
{{--        <div class="offcanvas-body">--}}
{{--          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">--}}
{{--            <li class="nav-item">--}}
{{--              <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--              <a class="nav-link" href="#">Link</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown">--}}
{{--              <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                Dropdown--}}
{{--              </a>--}}
{{--              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">--}}
{{--                <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                <li>--}}
{{--                  <hr class="dropdown-divider">--}}
{{--                </li>--}}
{{--                <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--              </ul>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--          <form class="d-flex">--}}
{{--            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--            <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--          </form>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </nav>--}}
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('assets2')}}/img/features-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets2')}}/img/features-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets2')}}/img/features-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  </body>

@endsection

@section('vendor-script')
  @vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection


@section('page-script')
  @vite('resources/assets/js/dashboards-analytics.js')
@endsection
