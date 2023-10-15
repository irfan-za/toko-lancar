<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Daftar - Toko Lancar</title>
  <!--  fonts -->
  <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!--  styles -->
  <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-success">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Mendaftar</h1>
              </div>
              <form action="{{ route('register.save') }}" method="POST" class="user">
                @csrf
                <div class="form-group">
                  <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" placeholder="Nama">
                  @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" placeholder="Email Anda">
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" placeholder="Password">
                    @error('password')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" placeholder="Konfirmasi Password">
                    @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block">Daftar</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="{{ route('login') }}">Sudah memiliki akun? Masuk!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  
  <!--  scripts for all pages-->
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>