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
  <div class="lottery-result result-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="result-list" id="list-all">

          </div>
          <div class="text-center">
            <div id="pagination-container"></div>
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
