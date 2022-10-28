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
                <ul>
                  <li>
                    <span>1</span>
                  </li>
                  <li>
                    <span>2</span>
                  </li>
                  <li>
                    <span>3</span>
                  </li>
                  <li>
                    <span>4</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <p class="text">Sunday 23 October, 07:00 PM</p>
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
        <div class="steps">
          <h1>NEXT RESULT:<br> Monday 24 October, 07:00 PM (GMT -4)</h1>
        </div>
        <div class="time-wrapper">
          <div class="time-counter">
            <img src="https://pixner.net/fantra/fantra/assets/images/clock.png" alt="">
            <p class="time-countdown" data-countdown="05/05/2023"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==========Timer-Section========== -->

<!-- ==========Lottery-Result-Section========== -->
<section class="lottery-result">
  <img class="bg-image" src="{{ asset('guest/images/result-background_2.jpg') }}" alt="">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="result-box">
          <h4 class="box-header">Lottery Winning Numbers</h4>
          <div class="result-list">
            <div class="single-list">
              <div class="light-area">
                <div class="light-area-bottom">
                  <div class="left">
                    <p>Winning Numbers:</p>
                    <div class="numbers">
                      <span>1</span>
                      <span>8</span>
                      <span>2</span>
                      <span>9</span>
                    </div>
                  </div>
                  <div class="right">
                    <span>Est. Jackpot</span>
                    <h6>$116 M Win BTC</h6>
                  </div>
                </div>
              </div>
              <div class="color-area">
                <div class="top">
                  <span>Date</span>
                  <h6>Wed, Oct 28, 2020</h6>
                </div>
              </div>
            </div>
            <div class="single-list">
              <div class="light-area">
                <div class="light-area-bottom">
                  <div class="left">
                    <p>Winning Numbers:</p>
                    <div class="numbers">
                      <span>1</span>
                      <span>8</span>
                      <span>2</span>
                      <span>9</span>
                    </div>
                  </div>
                  <div class="right">
                    <span>Est. Jackpot</span>
                    <h6>$116 M Win BTC</h6>
                  </div>
                </div>
              </div>
              <div class="color-area">
                <div class="top">
                  <span>Date</span>
                  <h6>Wed, Oct 28, 2020</h6>
                </div>
              </div>
            </div>
            <div class="single-list">
              <div class="light-area">
                <div class="light-area-bottom">
                  <div class="left">
                    <p>Winning Numbers:</p>
                    <div class="numbers">
                      <span>1</span>
                      <span>8</span>
                      <span>2</span>
                      <span>9</span>
                    </div>
                  </div>
                  <div class="right">
                    <span>Est. Jackpot</span>
                    <h6>$116 M Win BTC</h6>
                  </div>
                </div>
              </div>
              <div class="color-area">
                <div class="top">
                  <span>Date</span>
                  <h6>Wed, Oct 28, 2020</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <a class="view-all" href="result.html">View All Result ></a>
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