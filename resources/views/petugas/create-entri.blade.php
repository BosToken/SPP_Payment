@extends('partials.petugas.navbar')
@section('title', 'Catetan')
@section('container')

  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Tagihan</th>
        <th>Telphone</th>
        <th>Action</th>
      </tr>
    </thead>
    @php $nomer=0; @endphp
    @foreach($siswa as $siswas)
    @php $nomer++; @endphp
    <tbody>
      <tr>
        <td>{{$nomer}}</td>
        <td>{{$siswas->id}}</td>
        <td>{{$siswas->nama}}</td>
        <td>{{$siswas->kelass->nama_kelas}} {{$siswas->kelass->kompetensi_keahlian}}</td>
        <td>{{$siswas->spps->nominal}}</td>
        <td>{{$siswas->no_telp}}</td>
        <td><a class="btn btn-primary" href="{{url('/create/entri/siswa', [$siswas->id])}}">Entri Transaksi</a></td>
      </tr>
    </tbody>
    @endforeach
  </table>

@stop