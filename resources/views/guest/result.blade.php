@extends('guest.layouts.app')

@section('content')
<!-- ==========Breadcrumb-Section========== -->
<section class="breadcrumb-area">
  <div class="container">
    <div class="content">
      <h2 class="title">
        Results
      </h2>
      <ul class="breadcrumb-list extra-padding">
        <li>
          <a href="{{ route('guest.home') }}">
            Home
          </a>
        </li>

        <li>
          <a href="javascript:void(0)">Results</a>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- ==========Breadcrumb-Section========== -->

<!-- ==========Results-Section========== -->
<section class="results">
  <div class="top-image">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="image">
            <img src="https://pixner.net/fantra/fantra/assets/images/result.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="check-number result-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-4">
          <div class="check-box">
            <h4 class="title">2. Pick a Date</h4>
            <div class="form-area">
              <input type="date">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="check-box">
            <h4 class="title">3. Enter Your Number</h4>
            <div class="form-area input-round-wrapper">
              <input type="text" class="input-round">
              <input type="text" class="input-round">
              <input type="text" class="input-round">
              <input type="text" class="input-round">
              <input type="text" class="input-round">
              <input type="text" class="input-round">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lottery-result result-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
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
            <a class="view-all" href="result.html#">Load more </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==========Results-Section========== -->
<!-- 
<br>
<div id="pagination-container"></div> -->
@endsection