@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
  <h1>Blank Page</h1>
</div>
@endsection

@push('page_custom_scripts')
<!-- <script>
  $(window).ready(function() {
    const accessToken = getCookie('access-token')
    $.ajax({
      url: 'http://localhost/miami/public/api/result/count',
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
</script> -->
@endpush