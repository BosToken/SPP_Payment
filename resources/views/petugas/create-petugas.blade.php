@extends('partials.petugas.navbar')
@section('title', 'Buat Pembantu')
@section('container')

User : {{$petugas->username}}

<form action="{{url('/create/petugas/store')}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" name="username" id = "username"class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" name="password" id = "password" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="nama_petugas" id = "nama_petugas" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@stop