<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('guest/css/bootstrap.min_2.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/css/all.min_2.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/css/magnific-popup_2.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/css/owl.carousel.min_2.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/css/owl.theme.default.min_2.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/css/nice-select_2.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/css/bootstrap-popover-x.min_2.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/css/main_2.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/css/responsive_2.css') }}">
  <link rel="shortcut icon" href="{{ asset('guest/images/favicon_2.png') }}" type="image/x-icon">
  <title>Fantra - Online Lotto & Lottery HTML Template</title>


</head>

<style>
  #tiles>span {
    width: 70px;
    font: 36px "Comfortaa", cursive;
    font-weight: 700;
    text-align: center;
    color: #e8127a;
    position: relative;
  }

  #tiles .test {
    font: 30px 'Droid Sans', Arial, sans-serif;
    text-align: center;
    color: green;
    position: relative;
  }

  #countdown .labels {
    width: 100%;
    height: 25px;
    text-align: center;
    position: absolute;
    bottom: 8px;
  }

  /* e8127a */
</style>

<body>

  @include('guest.layouts.header')

  @yield('content')

  @include('guest.layouts.footer')

  <!-- All js link starts hear -->
  <script src="{{ asset('guest/js/jquery-3.3.1.min_2.js') }}"></script>
  <script src="{{ asset('guest/js/modernizr-3.6.0.min_2.js') }}"></script>
  <script src="{{ asset('guest/js/plugins_2.js') }}"></script>
  <script src="{{ asset('guest/js/bootstrap.min_2.js') }}"></script>
  <script src="{{ asset('guest/js/magnific-popup.min_2.js') }}"></script>
  <script src="{{ asset('guest/js/owl.carousel.min_2.js') }}"></script>
  <script src="{{ asset('guest/js/countdown.min_2.js') }}"></script>
  <script src="{{ asset('guest/js/bootstrap-popover-x.min_2.js') }}"></script>
  <script src="{{ asset('guest/js/amd_2.js') }}"></script>
  <script src="{{ asset('vendors/jquery.countdown-2.1.0/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('guest/js/nice-select_2.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
  <script>
    $(document).ready(function() {
      var hours, minutes, seconds;
      $("#owl").owlCarousel({
        items: 4,
        itemsDesktop: [1299, 4],
        itemsTablet: [995, 3],
        itemsTabletSmall: [767, 1],
        itemsMobile: [479, 1],
        lazyLoad: true,
        pagination: false,
        navigation: true
      });

      $.ajax({
        url: `http://54.179.27.191/fantra2/public/api/result/getcountdown`,
        method: "GET",
        dataType: "JSON",
        async: true,
        success: response => {
          var result_time;
          const remaining_date = new Date();
          remaining_date.setHours(15);
          remaining_date.setMinutes(30);
          remaining_date.setSeconds(00);
          result_remaining_time = remaining_date.getTime();
          console.log(result_remaining_time);
          if (new Date() >= result_remaining_time) {
            result_time = new Date(result_remaining_time + 86400 * 1000).toLocaleString('eu-ES', {
              year: 'numeric',
              month: '2-digit',
              day: '2-digit',
              hours24: true,
              hour: '2-digit',
              minute: '2-digit',
              second: '2-digit',
            });
            console.log("baca atas " + result_time);
          } else {
            result_time = new Date(result_remaining_time).toLocaleString('eu-ES', {
              year: 'numeric',
              month: '2-digit',
              day: '2-digit',
              hours24: true,
              hour: '2-digit',
              minute: '2-digit',
              second: '2-digit',
            });
            console.log("baca bawah " + result_time);
          }


          $("#countdown")
            .countdown(result_time, function(event) {
              hours = event.strftime('%H');
              minutes = event.strftime('%M');
              seconds = event.strftime('%S');
              $('#tiles').html("<span>" + hours + " : </span><span>" + minutes + " : </span><span>" + seconds + "</span>")
            });

          $('#result_datetime').html(`<h1>NEXT RESULT:<br> ${
            new Date(result_time).toLocaleString('en-EN', {
              weekday: 'long',
              year: 'numeric',
              month: 'long',
              day: '2-digit',
              hours24: true,
              hour: '2-digit',
              minute: '2-digit',
            })
            }
            (GMT +8)</h1>`);
        }

      })

      $.ajax({
        url: `http://54.179.27.191/fantra2/public/api/result/current`,
        method: "GET",
        dataType: "JSON",
        success: response => {
          let currentResult = response.data.number
          let resultNumbers = currentResult.split('')

          $('#result_time').text(`${
            new Date(response.data.out_at * 1000).toLocaleString('en-EN', {
              weekday: 'long',
              year: 'numeric',
              month: 'long',
              day: '2-digit',
              hours24: true,
              hour: '2-digit',
              minute: '2-digit',
            })
            }
            `);

          $('#result_number').html(`
            ${
              $.map(resultNumbers, (resultNumber) => {
                return `<li><span> ${resultNumber} </span></li>`
              }).join('')
            }
          `)
          // console.log(currentResult);
          // $.each(response.data, (index, result) => {

          // })
        }
      })


      $.ajax({
        url: "http://54.179.27.191/fantra2/public/api/result/listhistory?limit=3",
        type: 'GET',
        cache: true,
        success: function(response) {
          var counter = response.count;
          $.each(response.data, function(key, value) {
            weekday = new Date(value.out_at * 1000).toLocaleString(0, {
              weekday: 'short',
            })
            date = new Date(value.out_at * 1000).toLocaleString(0, {
              day: '2-digit',
            })
            month = new Date(value.out_at * 1000).toLocaleString(0, {
              month: 'short',
            })
            year = new Date(value.out_at * 1000).toLocaleString(0, {
              year: 'numeric',
            })
            $('#result-list-only').append("<div class='single-list'>\
              <div class='light-area'>\
                <div class='light-area-bottom'>\
                  <div class='left'>\
                    <p>Winning Numbers:</p>\
                    <div class='numbers'>\
                      <span>" + value.number[0] + "</span>\
                      <span>" + value.number[1] + "</span>\
                      <span>" + value.number[2] + "</span>\
                      <span>" + value.number[3] + "</span>\
                      <span>" + value.number[4] + "</span>\
                      <span>" + value.number[5] + "</span>\
                    </div>\
                  </div>\
                  <div class='right'>\
                    <span>Draw No.</span>\
                    <h6>#" + counter-- + "</h6>\
                  </div>\
                </div>\
              </div>\
              <div class='color-area'>\
                <div class='top'>\
                  <span>Date</span>\
                  <h6>" + weekday + ", " + month + " " + date + " " + year + "</h6>\
                </div>\
              </div>\
        </div>");
          });
        }
      });

      $.ajax({
        url: "http://54.179.27.191/fantra2/public/api/result/listhistory",
        type: "GET",
        cache: true,
        success: function(response) {
          var counter = response.count;
          $.each(response.data, function(key, value) {
            weekday = new Date(value.out_at * 1000).toLocaleString(0, {
              weekday: 'short',
            })
            date = new Date(value.out_at * 1000).toLocaleString(0, {
              day: '2-digit',
            })
            month = new Date(value.out_at * 1000).toLocaleString(0, {
              month: 'short',
            })
            year = new Date(value.out_at * 1000).toLocaleString(0, {
              year: 'numeric',
            })
            $('#list-all').append("<div class='single-list'>\
              <div class='light-area'>\
                <div class='light-area-bottom'>\
                  <div class='left'>\
                    <p>Winning Numbers:</p>\
                    <div class='numbers'>\
                      <span>" + value.number[0] + "</span>\
                      <span>" + value.number[1] + "</span>\
                      <span>" + value.number[2] + "</span>\
                      <span>" + value.number[3] + "</span>\
                      <span>" + value.number[4] + "</span>\
                      <span>" + value.number[5] + "</span>\
                    </div>\
                  </div>\
                  <div class='right'>\
                    <span>Draw No.</span>\
                    <h6>#" + counter-- + "</h6>\
                  </div>\
                </div>\
              </div>\
              <div class='color-area'>\
                <div class='top'>\
                  <span>Date</span>\
                  <h6>" + weekday + ", " + month + " " + date + " " + year + "</h6>\
                </div>\
              </div>\
        </div>");
          });
          var items = $("#list-all .single-list");
          var numItems = response.data.length;
          var perPage = 3;

          items.slice(perPage).hide();

          $('#pagination-container').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "&laquo;",
            nextText: "&raquo;",
            onPageClick: function(pageNumber) {
              var showFrom = perPage * (pageNumber - 1);
              var showTo = showFrom + perPage;
              items.hide().slice(showFrom, showTo).show();
            }
          });
        }

      });
    });
  </script>

  <script src="{{ asset('guest/js/main_2.js') }}"></script>



</body>

</html>