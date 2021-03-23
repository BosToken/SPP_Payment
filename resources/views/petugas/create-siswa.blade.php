@extends('partials.petugas.master')
@section('title', 'Siswa Create')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header card-header-primary">
				<h2 class="card-title ">Data Siswa
					<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Tambah <i class="material-icons">add</i></button></h2>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
                                <th>No</th>
								<th>NISN</th>
								<th>NIS</th>
								<th>Nama</th>
								<th>Telepon</th>
								<th>Kelas</th>
                                <th>Alamat</th>
								{{-- <th>Action</th> --}}
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
									<td>{{$siswas->no_telp}}</td>
									<td>{{$siswas->kelass->nama_kelas}} {{$siswas->kelass->kompetensi_keahlian}}</td>
                                    <td>{{$siswas->alamat}}</td>
									{{-- <td>
										<i class="material-icons">edit</i>
										<i class="material-icons">delete</i>
									</td> --}}
								</tr>
							</tbody>
                            @endforeach
						</table>
					</div>

					<div class="row">
						<div class="col-md-5"></div>
						<div class="col-md-4">
							{{-- <button type="button" class="btn btn-primary center"><a class="btn btn-primary" href="{{url('/generate/siswa')}}">Export</a></button> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{url('/create/siswa/store')}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel" style="color:purple"><b>Tambah Data Siswa</b></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="bmd-label-floating" style="color:purple">NISN</label>
								<input type="number" name="id" id="id" class="form-control" style="color:black">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="bmd-label-floating" style="color:purple">NIS</label>
								<input type="text" name="nis" id="nis" class="form-control" style="color:black">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="bmd-label-floating" style="color:purple">Nama</label>
								<input type="text" name="nama" class="form-control" style="color:black">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="bmd-label-floating" style="color:purple">Telepon</label>
								<input type="number" name="no_telp" id="number" class="form-control" style="color:black">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="bmd-label-floating" style="color:purple">Alamat</label>
								<input type="text" name="alamat" class="form-control" style="color:black">
							</div>
						</div>
					</div>

                    <label class="bmd-label-floating" style="color:purple">Kelas</label>
                    <div class="form-group">
                        <select class="custom-select" id = "kelas_id" name="kelas_id"  for="kelas_id">
                        {{-- <select class="form-select" id="kelas_id" name="kelas_id" data-bv-field="kelas_id"aria-label=".form-select-sm example"> --}}
                            @foreach($kelas as $kelass)
                                <option value={{$kelass->id}}>{{$kelass->nama_kelas}}-{{$kelass->kompetensi_keahlian}}</option>
                            @endforeach
                        </select>
                    </div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="material-icons">add</i></button>
				</div>
			</div>
		</div>
        </form>
	</div>
</div>
@endsection