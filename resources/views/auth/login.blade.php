<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Login</title>

  <!-- Fontfaces CSS-->
  <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="{{ asset('vendors/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="{{ asset('vendors/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/wow/animate.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/slick/slick.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

</head>

<!-- <style>
  .page-content--bge5 {
    background: url(images/auth/Login_bg.jpg);
  }
</style> -->

<body class="animsition">
  <div class="page-wrapper">
    <div class="page-content--bge5">
      <div class="container">
        <div class="login-wrap">
          <div class="login-content">
            <div class="login-logo">
              <a href="#">
                <img src="{{ asset('images/manilalotto.png') }}" alt="CoolAdmin" style="width: auto;height: 100px;">
              </a>
            </div>
            <div class="login-form">
              <form id="loginForm" method="POST">
                @csrf
                <div class="form-group">
                  <label>Username</label>
                  <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Jquery JS-->
  <script src="{{ asset('vendors/jquery-3.2.1.min.js') }}"></script>
  <!-- Bootstrap JS-->
  <script src="{{ asset('vendors/bootstrap-4.1/popper.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-4.1/bootstrap.min.js') }}"></script>
  <!-- Vendors JS       -->
  <script src="{{ asset('vendors/slick/slick.min.js') }}">
  </script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('vendors/wow/wow.min.js') }}"></script>
  <script src="{{ asset('vendors/animsition/animsition.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
  </script>
  <script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendors/counter-up/jquery.counterup.min.js') }}">
  </script>
  <script src="{{ asset('vendors/circle-progress/circle-progress.min.js') }}"></script>
  <script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('vendors/chartjs/Chart.bundle.min.js') }}"></script>
  <script src="{{ asset('vendors/select2/select2.min.js') }}">
  </script>
  <script src="{{ asset('script.js') }}"></script>

  <!-- Main JS-->
  <script src="js/main.js"></script>
  <script>
    $(document).ready(function() {
      const apiUrl = `http://54.179.27.191/fantra2/public/api`

      $('#loginForm').submit(function(event) {
        event.preventDefault()

        let form = $(this)

        clearErrorMessages(form)

        $.ajax({
          url: `${apiUrl}/auth/login`,
          method: 'POST',
          dataType: 'JSON',
          data: form.serializeArray(),
          success: response => {
            document.cookie = `access-token=${response.token}`
            document.cookie = `user=${JSON.stringify(response.user)}`

            window.location.href = 'http://54.179.27.191/fantra2/public/admin'
          },
          error: error => {
            if (error.status === 422) {
              setErrorMessages(form, error.responseJSON.errors)
            }
          }
        })
      })
    })
  </script>

</body>

</html>
<!-- end document-->