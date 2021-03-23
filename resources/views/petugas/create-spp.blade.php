@extends('partials.petugas.navbar')
@section('title', 'DiTagih')
@section('container')

User : {{$petugas->username}}

<form action="{{url('/create/spp/store')}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nominal</label>
      <input type="number" name="nominal" id = "nominal"class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tahun</label>
        <input type="number" name="tahun" id = "tahun" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@stop