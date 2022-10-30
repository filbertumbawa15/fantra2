@extends('guest.layouts.app')

@section('content')
<!-- ==========Banner-Section========== -->
<section class="banner-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="banner-subtitle">Live Draw </p>
        <div class="row">
          <div class="col-lg-12">
            <div class="header-item">
              <div class="single-number">
                <ul id="result_number">
                  <li>
                    <span></span>
                  </li>
                  <li>
                    <span></span>
                  </li>
                  <li>
                    <span></span>
                  </li>
                  <li>
                    <span></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <p class="text" id="result_time"></p>
      </div>
    </div>
  </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Timer-Section========== -->
<section class="singlelottery">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="steps" id="result_datetime">
        </div>
        <div class="time-wrapper">
          <div class="time-counter">
            <img src='https://pixner.net/fantra/fantra/assets/images/clock.png' alt=''>
            <div id="countdown">
              <div id='tiles'></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==========Timer-Section========== -->

<!-- ==========Lottery-Result-Section========== -->
<section class="lottery-result">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="result-box">
          <h4 class="box-header">Lottery Winning Numbers</h4>
          <div class="result-list" id="result-list-only">
          </div>
          <div class="text-center">
            <a class="view-all" href="{{ route('guest.result') }}">View All Result ></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==========Lottery-Result-SeFction========== -->

<!-- ==========Check-Number-Section========== -->
<section class="check-number">
  <img class="img-left" src="{{ asset('guest/images/check-num-left_2.png') }}" alt="">
  <img class="img-right" src="{{ asset('guest/images/check-num-right_2.png') }}" alt="">
</section>
<!-- ==========Check-Number-Section========== -->
@endsection