@extends('layouts/contentNavbarLayout')
@section('title', 'Dashboard - Analytics')


@section('vendor-style')
@vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection



@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('content')
  <body class="service-details-page bg-dark text-light ">

  <main  class="main bg-dark position-relative " id="">
    <div class="container container-edit-size position-absolute top-0 start-50 translate-middle-x z-3">
      <form method="/" action="/" class="w-100">
        <h2 class="mt-5 mb-4 text-center">Background</h2>
        <div class="radio-group align-items-center text-center">
          <label class="form-check custom-radio" for="countryside">
            <input type="radio" name="option" value="1" id="countryside">
            <span class="radio-mark"></span>
            Countryside
          </label>
          <label class="form-check custom-radio" for="city">
            <input type="radio" name="option" value="2" id="city">
            <span class="radio-mark"></span>
            City
          </label>
          <label class="form-check custom-radio" for="royal-city">
            <input type="radio" name="option" value="2" id="royal-city">
            <span class="radio-mark"></span>
            Royal palace
          </label> <br>
          <label class="form-check custom-radio" for="small-group">
            <input type="radio" name="option" value="2" id="small-group">
            <span class="radio-mark"></span>
            In a small group
          </label>
          <label class="form-check custom-radio" for="large-group">
            <input type="radio" name="option" value="2" id="large-group">
            <span class="radio-mark"></span>
            In a large group
          </label>
        </div>

        <!--Character-->
        <h2 class="mt-5 mb-2 text-center">Character</h2>
        <div class="form-floating w-100 m-auto text-area align-items-center">
          <textarea class="form-control " placeholder="Dog&Cat is best friend..." id="floatingTextarea2" ></textarea>
        </div>
        <!--Lessons-->
        <h2 class="mt-5 mb-4 text-center">Lessons</h2>
        <div class="checkbox-group text-center">
          <label class="custom-checkbox" for="brave">
            <input type="checkbox" name="option1" id="brave">
            <span class="checkmark"></span>
            Brave
          </label>
          <label class="custom-checkbox" for="Friendship">
            <input type="checkbox" name="option2" id="Friendship">
            <span class="checkmark"></span>
            Friendship
          </label>
          <label class="custom-checkbox" for="family">
            <input type="checkbox" name="option2" id="family">
            <span class="checkmark"></span>
            Family unity
          </label>
          <label class="custom-checkbox" for="hardworking">
            <input type="checkbox" name="option2" id="hardworking">
            <span class="checkmark"></span>
            Hardworking
          </label>
          <label class="custom-checkbox" for="lies">
            <input type="checkbox" name="option2" id="lies">
            <span class="checkmark"></span>
            The Impact of Lies
          </label>
          <label class="custom-checkbox" for="truthful">
            <input type="checkbox" name="option2" id="truthful">
            <span class="checkmark"></span>
            Truthful
          </label>
          <label class="custom-checkbox" for="science">
            <input type="checkbox" name="option2" id="science">
            <span class="checkmark"></span>
            Science
          </label>
        </div>

        <h2 class="mt-5 mb-4 text-center">Age range</h2>
        <div class="radio-group align-items-center text-center">
          <label class="form-check custom-radio" for="baby">
            <input type="radio" name="option" value="1" id="baby">
            <span class="radio-mark"></span>
            4 - 6 year old
          </label>
          <label class="form-check custom-radio" for="kid">
            <input type="radio" name="option" value="2" id="kid">
            <span class="radio-mark"></span>
            6 - 9 year old
          </label>
          <label class="form-check custom-radio" for="youth">
            <input type="radio" name="option" value="2" id="youth">
            <span class="radio-mark"></span>
            9 - 13 year old
          </label>
          <label class="form-check custom-radio" for="over13">
            <input type="radio" name="option" value="2" id="over13">
            <span class="radio-mark"></span>
            Over 13 year old
          </label>

        </div>

        <h2 class="mt-5 mb-4 text-center">Size Type</h2>
        <div class="radio-group align-items-center text-center">
          <label class="form-check custom-radio" for="short">
            <input type="radio" name="option" value="1" id="short">
            <span class="radio-mark"></span>
            Short (150 - 300 words)
          </label>
          <label class="form-check custom-radio" for="medium">
            <input type="radio" name="option" value="2" id="medium">
            <span class="radio-mark"></span>
            Medium (300 - 600 words)
          </label>
          <label class="form-check custom-radio" for="long">
            <input type="radio" name="option" value="2" id="long">
            <span class="radio-mark"></span>
            Long (600 - 900 words)
          </label>
          <label class="form-check custom-radio" for="ex-long">
            <input type="radio" name="option" value="2" id="ex-long">
            <span class="radio-mark"></span>
            Extremely long (900+ words)
          </label>
        </div>

        <div class="d-flex justify-content-center mt-5 pb-5">
          <button  type="submit" class="btn bg-light d-flex"><a href="/public/Summarize.html">Submit</a></button>
        </div>
      </form>
    </div>
  </main>
  </body>
@endsection

@section('page-script')
@vite('resources/assets/js/dashboards-analytics.js')
@endsection


