<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <form id="loginForm" method="POST">
                @csrf
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control p_input" name="username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control p_input" name="password">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <!-- Sweetalert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/misc.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <script src="{{ asset('script.js') }}"></script>
  <script>
    $(document).ready(function() {
      const apiUrl = `http://localhost/fantra2/public/api`

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

            window.location.href = 'http://localhost/fantra2/public/admin'
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
  <!-- endinject -->
</body>

</html>