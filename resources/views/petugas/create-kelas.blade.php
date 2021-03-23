@extends('partials.petugas.master')
@section('title', 'Kelas Create')
@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header card-header-primary">
				<h2 class="card-title ">Data Kelas
					<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Tambah <i class="material-icons">add</i></button></h2>

				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
                                <th>No</th>
								<th>Kelas</th>
								<th>Jurusan</th>
								{{-- <th>Action</th> --}}
							</thead>
                            @php $nomer=0; @endphp
                                @foreach($kelas as $kelass)
                            @php $nomer++; @endphp
							<tbody>
								<tr>
                                    <td>{{$nomer}}</td>
									<td>{{$kelass->nama_kelas}}</td>
									<td>{{$kelass->kompetensi_keahlian}}</td>
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
							{{-- <button type="button" class="btn btn-primary center"><a class="btn btn-primary" href="{{url('/generate/kelas')}}">Export</a></button> --}}
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Button trigger modal -->


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{url('/create/kelas/store')}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel" style="color:purple"><b>Tambah Data SPP</b></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="bmd-label-floating" style="color:purple">Kelas</label>
								<input type="text" name="nama_kelas" class="form-control" style="color:black">
							</div>
						</div>

						<div class="col-md-6">
							<!--div class="form-group">
							<label class="bmd-label-floating" style="color:purple">Jurusan</label>
							<input type="text" name="jurusan" id="number" class="form-control" style="color:black">
						</div-->

						<div class="form-group">
                            <select class="custom-select" id = "kompetensi_keahlian" name="kompetensi_keahlian"  for="kompetensi_keahlian">
                            {{-- <select class="form-select" id="kompetensi_keahlian" name="kompetensi_keahlian" data-bv-field="kompetensi_keahlian  "aria-label=".form-select-sm example"> --}}
								<option value="RPL">RPL</option>
								<option value="TKJ">TKJ</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="material-icons">add</i></button>
				</div>
			</div>
		</div>
    </form>
	</div>

@stop