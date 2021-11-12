<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="{{asset('sosmed/stylelog.css')}}">
</head>
<body>
   <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-5 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5"><b>Register</b></h5>
              <hr>

            <form action="{{ route('register') }}" method="post">
              @csrf
              <div class="form-floating mb-2">
                <label for="floatingInputUsername">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInputUsername" placeholder="Masukkan Nama" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              </div>
                 @error('name')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                   </span>
                 @enderror

                <div class="form-floating mb-2">
                <label for="floatingInputUsername">Umur</label>
                <input type="number" class="form-control @error('name') is-invalid @enderror" id="umur" placeholder="Masukkan umur" name="umur" value="{{ old('umur') }}" required autocomplete="umur">
              </div>
                 @error('umur')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                   </span>
                 @enderror


              <div class="form-floating mb-2">
                <label for="floatingInputUsername">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus></textarea>
              </div>
                 @error('alamat')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                   </span>
                 @enderror


              <div class="form-floating mb-2">
                <label for="floatingInputUsername">Bio</label>
                <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" placeholder="Masukkan Bio" name="bio" value="{{ old('bio') }}" required autocomplete="bio" autofocus></textarea>
              </div>
                 @error('bio')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                   </span>
                 @enderror


              <div class="form-floating mb-2">
                <label for="floatingInputEmail">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInputEmail" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email">
              </div>
                 @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror


              <hr>

              <div class="form-floating mb-2">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required autocomplete="current-password">
              </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                    </span>
               @enderror


               <div class="form-floating mb-3">
                <label for="floatingPassword"> Confirm Password</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingPasswordConfirm" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
              </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                    </span>
               @enderror


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
                            </div>
                        </div>

              <a class="d-block text-center mt-2 small" href="/login">Sudah Punya Akun? Sign In</a>

              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


<script src="{{asset('sosmed/index.js')}}"></script>
</body>
</html>
