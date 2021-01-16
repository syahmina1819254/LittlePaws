@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4">
  <meta name="author" content="SOENG SOUY">
  <title>Login Page</title>

 
 
</head>

<body class="bg-default">
    <style>

        html, body {margin-left: 25%; margin-right: 10%; height: 100%; overflow: hidden}
      
        {
          .pt-lg-9, .py-lg-9 {
              padding-top: 20rem !important;
          }
        }
        .bg-default {
            background-color: #BDD4E7 !important;
        }

    </style>
    
    <!-- Main content -->
    <div class="center">
    <!-- Header -->
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pb-5">
                       

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <p style="font-family:Cooper Black; font-size:20px">SIGN IN</p>
                            </div>
                            
                            <form method="POST" action="{{ route('login') }}">
                                @csrf                
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <p style="font-family:Comic Sans MS;"> Email:</p><input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="Email" type="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                       <p style="font-family:Comic Sans MS;">Password:</p> <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" style=" background-color:#80ccff;">Sign in</button>
                                </div>
                                <div class="text-center mb-3">
                                    <p class="text-muted">Does't have an account? <a href="{{route('register')}}">Sign up</a></p>
                                </div>                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{URL::to('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/js-cookie/js.cookie.js')}}"></script>
    <script src="{{URL::to('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{URL::to('assets/js/argon.js?v=1.2.0')}}"></script>

</body>
</html>

@endsection
