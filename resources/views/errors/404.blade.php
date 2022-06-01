@extends('templates.newDesign.master')
@section('content')

    <!-- error-404 start -->
  <div class="error">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <img src="{{ asset('assets/errors/images/404.png') }}" alt="@lang('image')">
          <h2 class="title"><b>@lang('404')</b> @lang('Page not found')</h2>
          <p>@lang('page you are looking for doesn\'t exit or an other error occured') <br> @lang('or temporarily unavailable.')</p>
          <a href="{{ route('home') }}" class="cmn-btn mt-4">@lang('Go to Home')</a>
        </div>
      </div>
    </div>
  </div>
  <!-- error-404 end -->

@endsection
