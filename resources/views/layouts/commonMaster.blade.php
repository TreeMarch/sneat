<!DOCTYPE html>
{{-- Thêm thư viện ở đây  --}}

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('title') | Sneat - HTML Laravel Free Admin Template </title>
  <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
  <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Canonical SEO -->
  <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Favicons GENERATE-STORY -->
  <link href="{{asset('assets2')}}/img/favicon.png" rel="icon">
  <link href="{{asset('assets2')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files GENERATE-STORY -->
  <link href="{{asset('assets2')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href={{asset('assets2')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File GENERATE-STORY -->
  <link href="{{asset('assets2')}}/css/main.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/css/Generate-Story.css" rel="stylesheet">

  <script src="{{asset('assets2')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets2')}}/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('assets2')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('assets2')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('assets2')}}/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File  GENERATE-->
  <script src="{{asset('assets2')}}/js/main.js"></script>
  <script src="{{asset('assets2')}}/js/GenerateStory.js"></script>


  <link href="{{asset('assets2')}}/img/favicon.png" rel="icon">
  <link href="{{asset('assets2')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets2')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/aos/aos.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File SUMMARIZE-->
  <link href="{{asset('assets2')}}/css/main.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/Summarize.css" rel="stylesheet">


  <!-- Vendor JS Files SUMMARIZE -->
  <script src="{{asset('assets2')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets2')}}/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('assets2')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('assets2')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('assets2')}}/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File SUMMARIZE -->
  <script src="{{asset('assets2')}}/js/main.js"></script>


  <!-- Main CSS Reading Story File -->
  <link href="{{asset('assets2')}}/css/main.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/css/reading-story.css" rel="stylesheet">

  <!-- Vendor JS Reading Story Files -->
  <script src="{{asset('assets2')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets2')}}/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('assets2')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('assets2')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('assets2')}}/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets2')}}/js/main.js"></script>


  <!-- Include Styles -->
  @include('layouts/sections/styles')

  <!-- Include Scripts for customizer, helper, analytics, config -->
  @include('layouts/sections/scriptsIncludes')
</head>

<body>

  <!-- Layout Content -->
  @yield('layoutContent')
  <!--/ Layout Content -->



  <!-- Include Scripts -->
  @include('layouts/sections/scripts')

</body>

</html>
