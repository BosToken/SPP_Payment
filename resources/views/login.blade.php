@extends('navbar')
@section('title', 'Log-in')
@section('container')

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<div class="w-auto p-5">
<h1><p class="text-center">
    Diminta Untuk Masuk, Tolong Masuk
                </p></h1>
</div>

<center>
<button type="button" class="btn btn-outline-success w-25 p-3" data-toggle="modal" data-target="#login">
    Login Siswa
                </button>
</center>

<div class="w-auto p-5">
    <h3><p class="text-center">
        Atau
                </p></h3>
</div>

<center>
    <button type="button" class="btn btn-outline-info w-25 p-3" data-toggle="modal" data-target="#register">
        Login Petugas
                </button>
</center>

<form action="{{url('/login/siswa/check')}}" method="POST">
    {{ csrf_field() }}
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title w-80 dark-grey-text my-3" id="myModalLabel"><strong>
            Login Siswa</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Nama
                        <input name="nama" type="nama" class="form-control" placeholder="Nama" value="{{ old('nama') }}" required>
                        @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        NISN
                        <input name="id" type="id" class="form-control" placeholder="NISN" value="{{ old('id') }}"required>
                        @if ($errors->has('id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer mx-5 pt-3 mb-1">
        <button type="submit" class="btn btn-primary">
            Masuk
            </button>
      </div>
      </div>
    </div>
  </div>
</form>

  <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="{{url('/login/petugas/check')}}" method="POST">
    {{ csrf_field() }}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Login Petugas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Username
                        <input name="username" type="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Password
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
        <div class="modal-footer mx-5 pt-3 mb-1">
        <button type="submit" class="btn btn-primary">
            Masuk
            </button>   
      </div>
      </div>
    </div>
</form>
</div>

@stop
