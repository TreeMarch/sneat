@extends('layouts/contentNavbarLayout')

@section('title', 'SUMMARIZE')

@section('vendor-style')
  @vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection



@section('vendor-script')
  @vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('content')

  <body class="bg-dark">
  <section class="wrapper bg-dark">
    <div class="container">
      <div class="row">
        <div class="col text-center mb-5">
          <h1 class="display-4 font-weight-bolder">Summarize</h1>
          <p class="lead">Choice one Story to writing </p>
        </div>
      </div>
      <div class="row">

        <div onclick="redirectToPage()" class="col-sm-12 col-md-6 col-lg-4 mb-4">
          <div class="card text-dark card-has-bg click-col"
               style="background-image:url('{{asset('assets2')}}/img/tabs-1.jpg');">
            <img class="card-img d-none" src="{{asset('assets2')}}"
                 alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">

            <div class="card-img-overlay d-flex flex-column">
              <div class="card-body">
                <small class="card-meta mb-2">Story 1</small>
                <h4 class="card-title mt-0  "><a class="" herf="{{asset('assets2')}}">Tom and Jerry</a></h4>
                <small>October 15, 2020</small>
              </div>
            </div>
          </div>
        </div>
        <div onclick="redirectToPage()" class="col-sm-12 col-md-6 col-lg-4 mb-4">
          <div class="card text-dark card-has-bg click-col"
               style="background-image:url('{{asset('assets2')}}/img/tabs-1.jpg');">
            <img class="card-img d-none" src="{{asset('assets2')}}"
                 alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">

            <div class="card-img-overlay d-flex flex-column">
              <div class="card-body">
                <small class="card-meta mb-2">Story 1</small>
                <h4 class="card-title mt-0  "><a class="" herf="#">Tom and Jerry</a></h4>
                <small>October 15, 2020</small>
              </div>
            </div>
          </div>
        </div>
        <div onclick="redirectToPage()" class="col-sm-12 col-md-6 col-lg-4 mb-4">
          <div class="card text-dark card-has-bg click-col"
               style="background-image:url('{{asset('assets2')}}/img/tabs-1.jpg');">
            <img class="card-img d-none" src="{{asset('assets2')}}"
                 alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">

            <div class="card-img-overlay d-flex flex-column">
              <div class="card-body">
                <small class="card-meta mb-2">Story 1</small>
                <h4 class="card-title mt-0  "><a class="" herf="reading-story.html">Tom and Jerry</a></h4>
                <small>October 15, 2020</small>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section>

  </body>

@endsection

@section('page-script')
  @vite('resources/assets/js/dashboards-analytics.js')
@endsection
