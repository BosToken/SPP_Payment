@extends('partials.petugas.navbar')
@section('title', 'Catetan')
@section('container')

  @foreach ($siswa as $siswas)

<div class="container">
    <form action="{{url('/create/entri/store', [$siswas->id])}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
        {{-- <label for="exampleInputEmail1">NISN</label>
          <input class="form-control" value = {{$siswas->id}} type="text" readonly>
           --}}
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

          {{-- <label for="exampleInputEmail1">Jumlah Tagihan</label>
          <input class="form-control" value = {{$siswas->spps->nominal}} type="text"readonly> --}}
          <label for="exampleInputEmail1" class="form-label">Jumlah Tagihan</label>
            <input type="number" value={{$siswas->spps->nominal}} class="form-control"readonly>


          <hr>

        {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Bayar</label>
            <input type="text" name="tgl_bayar" id = "tgl_bayar" class="form-control">
        </div> --}}

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

@stop