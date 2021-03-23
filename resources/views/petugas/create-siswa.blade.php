@extends('partials.petugas.navbar')
@section('title', 'Buat Anak')
@section('container')

User : {{$petugas->username}}

<form action="{{url('/create/siswa/store')}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">NISN</label>
      <input type="number" name="id" id = "id"class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIS</label>
        <input type="text" name="nis" id = "nis" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="nama" id = "nama" class="form-control">
    </div>
    
    <label for="exampleInputEmail1" class="form-label">Kelas</label>
    <div class="input-group mb-3">
        <select class="form-select" id="kelas_id" name="kelas_id" data-bv-field="kelas_id">
            @foreach($kelas as $kelass)
          <option value={{$kelass->id}}>{{$kelass->nama_kelas}}-{{$kelass->kompetensi_keahlian}}</option>
          @endforeach
        </select>
        <label class="input-group-text" for="inputGroupSelect02">Pilih Kelas</label>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <input type="text" name="alamat" id = "alamat" class="form-control">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No Telp</label>
        <input type="number" name="no_telp" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@stop