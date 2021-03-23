{{-- @extends('partials.petugas.navbar')
@section('title', 'Catetan')
@section('container')

  @foreach ($siswa as $siswas)

<div class="container">
    <form action="{{url('/create/entri/store', [$siswas->id])}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
        <label for="exampleInputEmail1" class="form-label">NISN</label>
            <input type="number" value = {{$siswas->id}} name="siswa_id" id = "siswa_id"class="form-control"readonly>

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

          <label for="exampleInputEmail1">Jumlah Tagihan</label>
          <input class="form-control" value = {{$siswas->spps->nominal}} type="text"readonly>


          <hr>

        <label for="exampleInputEmail1">Bulan</label>
          <div class="input-group mb-3">
            <select class="custom-select" id = "bulan_dibayar" name="bulan_dibayar"  for="bulan_dibayar">
              <option value="Januari">Januari</option>
              <option value="Februari">Februari</option>
              <option value="Maret">Maret</option>
              <option value="April">April</option>
              <option value="Mei">Mei</option>
              <option value="Juni">Juni</option>
              <option value="Juli">Juli</option>
              <option value="Agustus">Agustus</option>
              <option value="September">September</option>
              <option value="Oktober">Oktober</option>
              <option value="November">November</option>
              <option value="Desember">Desember</option>
            </select>
            <label class="input-group-text" for="inputGroupSelect02">Pilih Bulan</label>
        </div>

        <label for="exampleInputEmail1">Tahun</label>
          <div class="input-group mb-3">
            <select class="custom-select" id = "tahun_dibayar" name="tahun_dibayar"  for="tahun_dibayar">
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
              <option value="2030">2030</option>
            </select>
            <label class="input-group-text" for="inputGroupSelect02">Pilih Tahun</label>
        </div>

          <div class="footer mx-5 pt-3 mb-1">
            <button type="submit" class="btn btn-success">Konfirmasi</button>
          </div>
        </form>

    </form>
</div>
@endforeach

@stop --}}


@extends('partials.petugas.master')
@section('title', 'Confirmation')
@section('content')

@foreach ($siswa as $siswas)

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h2 class="card-title ">Konfirmasi Transaksi SPP<h2>
          </div>
  
          <div class="card-body">
            <form action="{{url('/create/entri/store', [$siswas->id])}}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">NISN</label>
                    <input type="text" class="form-control" disabled value={{$siswas->id}}>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">NIS</label>
                    <input type="text" class="form-control" disabled value={{$siswas->nis}}>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Kelas</label>
                    <input type="text" class="form-control" disabled value={{$siswas->kelass->nama_kelas}} {{$siswas->kelass->kompetensi_keahlian}}>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama</label>
                    <input type="text" class="form-control" disabled value={{$siswas->nama}}>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Telephone</label>
                    <input type="text" class="form-control" disabled value={{$siswas->no_telp}}>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tagihan</label>
                    <input type="text" class="form-control" disabled value={{$siswas->spps->nominal}}>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Adress</label>
                    <input type="text" class="form-control" disabled value={{$siswas->no_telp}}>
                  </div>
                </div>
  
                <div class="col-md-2">
                  <div class="form-group float-right">
                    <select class="custom-select" id = "bulan_dibayar" name="bulan_dibayar"  for="bulan_dibayar">
                    {{-- <select class="form-select form-select-sm" aria-label=".form-select-sm"> --}}
                      <option value="1">Januari</option>
                      <option value="2">Februari</option>
                      <option value="3">Maret</option>
                      <option value="4">April</option>
                      <option value="5">Mei</option>
                      <option value="6">Juni</option>
                      <option value="7">Juli</option>
                      <option value="8">Agustus</option>
                      <option value="9">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                    </select>
                  </div>
                </div>
  
                <div class="col-md-2">
                  <div class="form-group">
                    <select class="custom-select" id = "tahun_dibayar" name="tahun_dibayar"  for="tahun_dibayar">
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                      <option value="2026">2026</option>
                      <option value="2027">2027</option>
                      <option value="2028">2028</option>
                      <option value="2029">2029</option>
                      <option value="2030">2030</option>
                    </select>
                  </div>
  
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Confirmation</button>
              <div class="clearfix"></div>
            </form>
          </div>
  
  
  
        </div>
      </div>
    </div>

    @endforeach

@stop