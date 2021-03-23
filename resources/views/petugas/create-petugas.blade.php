{{-- User : {{$petugas->username}}

<form action="{{url('/create/petugas/store')}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" name="username" id = "username"class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" name="password" id = "password" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="nama_petugas" id = "nama_petugas" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form> --}}

@extends('partials.petugas.master')
@section('title', 'Petugas Create')
@section('content')

  <div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header card-header-primary">
				<h2 class="card-title ">Data Petugas
					<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Tambah <i class="material-icons">add</i></button></h2>

				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
                                <th>No</th>
								<th>Nama Petugas</th>
								<th>Username</th>
								<th>Hak Akses</th>
								{{-- <th>Action</th> --}}
							</thead>
                            @php $nomer=0; @endphp
                                @foreach($all as $petugass)
                            @php $nomer++; @endphp
							<tbody>
								<tr>
                                    <td>{{$nomer}}</td>
									<td>{{$petugass->nama_petugas}}</td>
									<td>{{$petugass->username}}</td>
									<td>@if($petugass->level === 1)Admin
                                        @elseif($petugass->level === 2)Petugas
                                        @else Tidak Ada Kuasa
                                        @endif
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
							<button type="button" class="btn btn-primary center">Export</button>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{url('/create/petugas/store')}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel" style="color:purple"><b>Tambah Data Petugas</b></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="bmd-label-floating" style="color:purple">Nama Petugas</label>
								<input type="text" class="form-control" style="color:black" name="nama_petugas">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="bmd-label-floating" style="color:purple">Username</label>
								<input type="text" class="form-control" style="color:black" name="username">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="bmd-label-floating" style="color:purple">Password</label>
								<input type="password" class="form-control" style="color:black" name="password">
							</div>
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