@extends('partials.petugas.navbar')
@section('title', 'Buat Basecamp')
@section('container')

User : {{$petugas->username}}

<form action="{{url('/create/kelas/store')}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
      <input type="text" name="nama_kelas" id = "nama_kelas"class="form-control">
    </div>

    <label for="exampleInputEmail1" class="form-label">Kompetensi Keahlian</label>
    <div class="input-group mb-3">
        <select class="form-select" id="inputGroupSelect02" id="kompetensi_keahlian" name="kompetensi_keahlian" data-bv-field="kompetensi_keahlian">
          <option value="RPL">RPL</option>
          <option value="TKJ">TKJ</option>
        </select>
        <label class="input-group-text" for="inputGroupSelect02">Pilih Keahlian</label>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop