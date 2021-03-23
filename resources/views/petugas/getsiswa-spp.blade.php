
@extends('partials.petugas.master')
@section('title', 'Proccess')
@section('content')

    @foreach ($siswa as $siswas)
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h2 class="card-title ">Konfirmasi Tagihan SPP<h2>
              </div>
      
              <div class="card-body">
                <form action="{{url('/update/siswa/spp', [$siswas->id])}}" method="POST">
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
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nama</label>
                        <input type="text" class="form-control" disabled value={{$siswas->nama}}>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Telephone</label>
                        <input type="text" class="form-control" disabled value={{$siswas->no_telp}}>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-9">
                      <div class="form-group">
                        <label class="bmd-label-floating">Address</label>
                        <input type="text" class="form-control" disabled value={{$siswas->alamat}}>
                      </div>
                    </div>
      
                    <div class="col-md-3">
                      <div class="form-group">
                        <select class="custom-select" id = "spp_id" name="spp_id"  for="spp_id">
                        {{-- <select class="form-select" id="spp_id" name="spp_id" data-bv-field="spp_id"aria-label=".form-select-sm"> --}}
                                        @foreach($spp as $spps)
                                        <option value={{$spps->id}}>Nominal : {{$spps->nominal}} Tahun : {{$spps->tahun}}</option>
                                        @endforeach 
                                      </select>
                                  </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Proccess</button></h2>  
                </form>
              </div>
      
      
      
            </div>
          </div>
        </div>
        @endforeach

@stop