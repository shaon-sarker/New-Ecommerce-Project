{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap-social/bootstrap-social.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">

            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                    @csrf

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <code>{{$errors->first('email')}}</code>
                    @endif
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="{{ route('password.request') }}" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    @if ($errors->has('password'))
                        <code>{{$errors->first('password')}}</code>
                    @endif
                  </div>


                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('backend/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('backend/assets/modules/popper.js')}}"></script>
  <script src="{{asset('backend/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('backend/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{asset('backend/assets/js/scripts.js')}}"></script>
  <script src="{{asset('backend/assets/js/custom.js')}}"></script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: sans-serif;
        }

        a {
            color: #666;
            font-size: 14px;
            display: block;
        }

        .login-title {
            text-align: center;
        }

        #login-page {
            display: flex;
        }

        .notice {
            font-size: 13px;
            text-align: center;
            color: #666;
        }

        .login {
            width: 40%;
            height: 100vh;
            background: #FFF;
            padding: 70px;
            margin-top: 100px;
        }

        .login a {
            margin-top: 25px;
            text-align: center;
        }

        .form-login {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: center;
        }

        .form-login label {
            text-align: left;
            font-size: 13px;
            margin-top: 10px;
            margin-left: 20px;
            display: block;
            color: #666;
        }

        .input-email,
        .input-password {
            width: 100%;
            background: #ededed;
            border-radius: 25px;
            margin: 4px 0 10px 0;
            padding: 10px;
            display: flex;
        }

        .icon {
            padding: 4px;
            color: #666;
            min-width: 30px;
            text-align: center;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 4px 0;
            outline: none;
        }

        button[type="submit"] {
            width: 100%;
            border: 0;
            border-radius: 25px;
            padding: 14px;
            background: #008552;
            color: #FFF;
            display: inline-block;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
            transition: ease all 0.3s;
        }

        button[type="submit"]:hover {
            opacity: 0.9;
        }

        .background {
            width: 60%;
            padding: 40px;
            height: 100vh;
            background: linear-gradient(60deg, rgba(158, 189, 19, 0.5), rgba(0, 133, 82, 0.7)), url('https://picsum.photos/1280/720') center no-repeat;
            background-size: cover;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: flex-end;
            align-content: center;
            flex-direction: row;
        }

        .background h1 {
            max-width: 420px;
            color: #FFF;
            text-align: right;
            padding: 0;
            margin: 0;
        }

        .background p {
            max-width: 650px;
            color: #1a1a1a;
            font-size: 15px;
            text-align: right;
            padding: 0;
            margin: 15px 0 0 0;
        }

        .created {
            margin-top: 40px;
            text-align: center;
        }

        .created p {
            font-size: 13px;
            font-weight: bold;
            color: #008552;
        }

        .created a {
            color: #666;
            font-weight: normal;
            text-decoration: none;
            margin-top: 0;
        }

        .checkbox label {
            display: inline;
            margin: 0;
        }
    </style>
</head>

<body>
    <div id="login-page">
        <div class="background">
            <h1>Donec in dapibus augue sed nisi nunc suscipit eget enim sit amet</h1>
        </div>
        <div class="login">
            <h2 class="login-title">Login</h2>
            <p class="notice">Please login to access the system</p>
            <form class="form-login" method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">E-mail</label>
                <div class="input-email">
                    <i class="fas fa-envelope icon"></i>
                    <input id="email" type="email" name="email" placeholder="Enter your e-mail" required autofocus value="{{old('email')}}">
                </div>
                <label for="password">Password</label>
                <div class="input-password">
                    <i class="fas fa-lock icon"></i>
                    <input id="password" type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="checkbox">
                    <label for="remember">
                        <input type="checkbox" name="remember" id="remember-me">
                        Remember me
                    </label>
                </div>
                <button type="submit"><i class="fas fa-door-open"></i> Sign in</button>
            </form>
            <a href="#">Forgot your password?</a>
            <div class="created">
                <p>Created by <a href="https://codepen.io/kelvinqueiroz/">Kelvin Queiróz</a></p>
            </div>
        </div>

    </div>
</body>

</html>
