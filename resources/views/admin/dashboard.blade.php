@extends('admin.layouts.app')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="overview-wrap">
            <h2 class="title-1">Dashboard</h2>
          </div>
        </div>
      </div>
      <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
          <div class="overview-item overview-item--c3">
            <div class="overview__inner">
              <div class="overview-box clearfix">
                <div class="icon">
                  <i class="zmdi zmdi-calendar-note"></i>
                </div>
                <div class="text">
                  <h2 id="result-count"></h2>
                  <span>Total Result</span>
                </div>
              </div>
              <div class="overview-chart">
                <canvas id="widgetChart3"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END MAIN CONTENT-->
@endsection

@push('page_custom_scripts')
<script>
  $(window).ready(function() {
    const accessToken = getCookie('access-token')
    $.ajax({
      url: 'http://54.179.27.191/fantra2/public/api/result/count',
      type: 'POST',
      cache: true,
      headers: {
        "Authorization": `Bearer ${accessToken}`,
      },
      success: function(response) {
        $('h2#result-count').append(response.data);
      }
    })
  });
</script>
@endpush