@extends('partials.petugas.master')
@section('title', 'SPP Create')
@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h2 class="card-title ">Tagihan SPP
          {{-- @if($petugas->level === 1)
            <button type="button" class="btn btn-primary pull-right"><a class="btn btn-primary" href="{{url('/generate/tagihan')}}">Export</a></button></h2>
            @else
            @endif   --}}
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>No</th>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Telepon</th>
                  <th>Action</th>
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
                    <td>
                      <button type="button" class="btn btn-primary"><a href="{{url('/create/siswaspp/spp', [$siswas->id])}}">Process</a></button></h2>
                    </td>
                    {{-- <td><a class="btn btn-success" href="{{url('/create/siswaspp/spp', [$siswas->id])}}">Process</a></td> --}}
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@stop