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
              padding-top: 16rem !important;
          }
        }
        .bg-default {
            background-color: #BDD4E7 !important;
        }

    </style>
    
    <!-- Main content -->
    <div class="main-content header py-7 py-lg-8 pt-lg-9">
    <!-- Header -->
    <!-- Page content -->
    <div class="center">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="transparent ">
                        

                        <div class="card-body px-lg-5 py-lg-5">
                            <div >
                                <p style="font-family:Cooper Black; font-size:20px">REGISTER </p>
                            </div>
                            
                            <form method="POST" action="{{ route('register') }}">
                                @csrf                
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <p style="font-family:Comic Sans MS;">Enter First Name:</p> <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Enter first Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <p style="font-family:Comic Sans MS;">Enter Last Name:</p>  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Enter Last Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <p style="font-family:Comic Sans MS;">Address:</p> <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Address">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <p style="font-family:Comic Sans MS;">Phone Number:</p><input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Phone Number">
                                        @error('name')
                                           
                                        @enderror
                                    </div>
                                </div>
                               

                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <p style="font-family:Comic Sans MS;">Email:</p> <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="Email" type="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <p style="font-family:Comic Sans MS;">Password:</p> <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"  autocomplete="password" autofocus placeholder="Password">
                                        @error('password')
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
                                        <p style="font-family:Comic Sans MS;">Repeat Password: </p><input type="password" class="form-control" name="password_confirmation" placeholder="Repeat-Password">
                                    </div>
                                </div>
<br>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" style=" background-color:#80ccff;">Sign up</button>
                                </div>
                                <div class="text-center mb-3">
                                    <p class="text-muted">Have an account? <a href="{{route('login')}}">Sign In</a></p>
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
