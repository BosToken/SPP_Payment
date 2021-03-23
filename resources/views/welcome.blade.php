

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
  <title>SPPayment</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"><link rel="stylesheet" href="{{asset('css/templatemo-softy-pinko.css')}}">
</head>

<body>

  <div class="welcome-area" id="welcome">
    <div class="header-text">
      <div class="container">
        <div class="row">
          <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
            <h1><strong>Selamat Datang</strong> di Website SPPayment</h1>
            <a href="" class="main-button-slider" data-toggle="modal" data-target="#exampleSiswa">Log In sebagai siswa</a>
            <a href="" class="main-button-slider" data-toggle="modal" data-target="#examplePetugas">Log In sebagai petugas</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Siswa -->
  <div class="modal fade" id="exampleSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{url('/login/siswa/check')}}" method="POST">
        {{ csrf_field() }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel" style="color:purple">Log In Siswa</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating" style="color:purple">NISN</label>
                <input name="id" type="id" class="form-control" placeholder="NISN" value="{{ old('id') }}"required>
                        @if ($errors->has('id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id') }}</strong>
                            </span>
                        @endif
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating" style="color:purple">Nama</label>
                <input name="nama" type="nama" class="form-control" placeholder="Nama" value="{{ old('nama') }}" required>
                        @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" style="background-color:purple">log in</button>
        </div>
      </div>
    </div>
</form>
  </div>
  <!-- End Modal-->

  <!-- Modal Petugas -->
  <div class="modal fade" id="examplePetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{url('/login/petugas/check')}}" method="POST">
        {{ csrf_field() }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel" style="color:purple">Log In Petugas</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating" style="color:purple">Username</label>
                <input name="username" type="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating" style="color:purple">Password</label>
                <input name="password" type="password" class="form-control" placeholder="Password" value="{{ old('password') }}"required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" style="background-color:purple">log in</button>
        </div>
      </div>
    </div>
</form>
  </div>
  <!-- End Modal-->

  <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
  <script src="{{asset('js/popper.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script><script src="{{asset('js/scrollreveal.min.js')}}"></script>
  <script src="{{asset('js/waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('js/imgfix.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
