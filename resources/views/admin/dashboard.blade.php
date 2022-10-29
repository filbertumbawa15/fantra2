@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
  <div class="row">
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0" id="result-count"></h3>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Total Result</h6>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('page_custom_scripts')
<script>
  $(window).ready(function() {
    const accessToken = getCookie('access-token')
    $.ajax({
      url: 'http://localhost/fantra2/public/api/result/count',
      type: 'POST',
      cache: true,
      headers: {
        "Authorization": `Bearer ${accessToken}`,
      },
      success: function(response) {
        $('#result-count').append(response.data);
      }
    })
  });
</script>
@endpush