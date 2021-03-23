@extends('partials.petugas.navbar')
@section('title', 'Ditagihnoo')
@section('container')

User : {{$petugas->username}}

{{-- <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NISN</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
      <th scope="col">Telphone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @php $nomer=0; @endphp
  @foreach($siswa as $siswas)
  @php $nomer++; @endphp

  <tbody>
    <tr>
      <td>{{$nomer}}</td>
      <td>{{$siswas->id}}</td>
      <td>{{$siswas->nis}}</td>
      <td>{{$siswas->nama}}</td>
      <td>{{$siswas->kelass->nama_kelas}} {{$siswas->kelass->kompetensi_keahlian}}</td>
      <td>{{$siswas->alamat}}</td>
      <td>{{$siswas->no_telp}}</td>
      <td>Test</td>
    </tr>
  </tbody>
</table>
@endforeach --}}
<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>NISN</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Kelas</th>
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
      <td>{{$siswas->nis}}</td>
      <td>{{$siswas->nama}}</td>
      <td>{{$siswas->kelass->nama_kelas}} {{$siswas->kelass->kompetensi_keahlian}}</td>
      <td>{{$siswas->no_telp}}</td>
      <td><a class="btn btn-success" href="{{url('/create/siswaspp/spp', [$siswas->id])}}">Process</a></td>
    </tr>
  </tbody>
  @endforeach
</table>

@stop