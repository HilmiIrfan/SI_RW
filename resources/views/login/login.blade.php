<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI_RW Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body style="background-image: url('adminlte/docs/assets/img/Login.png');background-size: cover; background-position: center; height: 100vh; margin: 0; padding: 0; ">

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{{ asset('adminlte/docs/assets/img/LogoMalang.png') }}" alt="LogoMalang" style="max-width: 150px;">
    <br>
    <a href="../../index2.html" style="color:black"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" style="border-radius: 8px;">
    <div class="card-body login-card-body" style="border-radius: 10px;">
      <p class="login-box-msg"></p>
      
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
      <form action="{{ url('/login') }}" method="POST">
        @csrf
        <div class="text-center" style="color:black">
          <label for="username">Username</label> <br>
          <input type="text" id="username" name="username" class="form-control text-center" font="ubuntu" style="background-color: #B0C4DE "placeholder="Masukkan Username" required>
          <div class="input-group-append">
            
          </div>
          <br>
        </div>
        <div class="text-center" style="color:black">
          <label for="password">Password</label> 
          <div class="input-group mb-3">
          <input type="Password" id="password" name="password" class="form-control text-center" font="ubuntu" style="background-color: #B0C4DE; border-radius: 0px" placeholder="Masukkan Password " required>
          <div class="input-group-append" style="background-color: #B0C4DE; border-radius: 4px;">
            <div class="input-group-text">
              <span class="fas fa-eye-slash"></span>
            </div>
          </div>
        </div>
      
          <!-- /.col -->
          <!-- /.col -->
      <div class="text-center">
         <button type="submit" class="btn btn-primary" font="buenard"><b>Login</b></button>
        </div>
        <br><br>
<!-- /.col -->

      </form>
       <!-- Tombol Kembali ke Dashboard -->
       <div class="text-center">
        <a href="{{ url('/welcome') }}" class="btn btn-secondary"><b>Kembali ke Dashboard</b></a>
      </div>
      <br><br>
        <div class="rectangle" style="width: 360px; height: 35px; background-color: #A79898; border: -5px solid #;
        border-radius: 5px; padding: 0px; margin:-20px;">
        <a href="#" class="btn btn-block btn-linear">
          
          <p> &copy;<strong>RW 01 Kesatrian Dalam</strong></p>
        </a>
        </div>
      </div>
      <!-- /.social-auth-link -->

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
