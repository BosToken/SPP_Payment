@extends('partials.petugas.navbar')
@section('title', 'Catetan')
@section('container')

{{-- @foreach ($siswa as $siswas)
<form action="{{url('/update/siswa/spp', [$siswas->id])}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">NISN</label>
      <input type="number" value = {{$siswas->id}} class="form-control" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIS</label>
        <input type="text" value = {{$siswas->nis}} class="form-control" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" value = {{$siswas->nama}} class="form-control" readonly>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kelas</label>
        <input type="text" value = "{{$siswas->kelass->nama_kelas}} {{$siswas->kelass->kompetensi_keahlian}}" class="form-control" readonly>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <input type="text" value = {{$siswas->alamat}} class="form-control" readonly>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Telphone</label>
        <input type="number" value = {{$siswas->no_telp}} class="form-control" readonly>
    </div>

    <hr>
    <label for="exampleInputEmail1" class="form-label">SPP</label>
    <div class="input-group mb-3">
        <select class="form-select" id="spp_id" name="spp_id" data-bv-field="spp_id">
            @foreach($spp as $spps)
          <option value={{$spps->id}}>Nominal : {{$spps->nominal}} Tahun : {{$spps->tahun}}</option>
          @endforeach
        </select>
        <label class="input-group-text" for="inputGroupSelect02">Pilih Pembayaran SPP</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endforeach --}}
  @foreach ($siswa as $siswas)

<div class="container">
    <form action="{{url('/update/siswa/spp', [$siswas->id])}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
        <label for="exampleInputEmail1">NISN</label>
          <input class="form-control" value = {{$siswas->id}} type="text" readonly>

        <label for="exampleInputEmail1">NIS</label>
          <input class="form-control" value = {{$siswas->nis}} type="text"readonly>

          <label for="exampleInputEmail1">Nama</label>
          <input class="form-control" value = {{$siswas->nama}} type="text"readonly>

          <label for="exampleInputEmail1">Kelas</label>
          <input class="form-control" value = "{{$siswas->kelass->nama_kelas}} {{$siswas->kelass->kompetensi_keahlian}}" type="text"readonly>

          <label for="exampleInputEmail1">Alamat</label>
          <input class="form-control" value = {{$siswas->alamat}} type="text"readonly>

          <label for="exampleInputEmail1">Telphone</label>
          <input class="form-control" value = {{$siswas->no_telp}} type="text"readonly>

          <hr>

          <label for="exampleInputEmail1" class="form-label">SPP</label>
    <div class="input-group mb-3">
        <select class="custom-select" id = "spp_id" name="spp_id"  for="spp_id">
            @foreach($spp as $spps)
          <option value={{$spps->id}}>Nominal : {{$spps->nominal}} Tahun : {{$spps->tahun}}</option>
          @endforeach
        </select>
        <label class="input-group-text" for="inputGroupSelect02">Pilih Pembayaran SPP</label>
    </div>
          <div class="footer mx-5 pt-3 mb-1">
            <button type="submit" class="btn btn-success">Process</button>
          </div>
        </form>

    </form>
</div>
@endforeach

@stop