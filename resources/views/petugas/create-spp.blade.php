@extends('partials.petugas.master')
@section('title', 'SPP Create')
@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header card-header-primary">
				<h2 class="card-title ">Data SPP
					<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Tambah <i class="material-icons">add</i></button></h2>

				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
                                <th>No</th>
								<th>Tahun</th>
								<th>Nominal</th>
								{{-- <th>Action</th> --}}
							</thead>
                            @php $nomer=0; @endphp
                                @foreach($spp as $spps)
                            @php $nomer++; @endphp
							<tbody>
								<tr>
                                    <td>{{$nomer}}</td>
									<td>{{$spps->tahun}}</td>
									<td>{{$spps->nominal}}</td>
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
                            {{-- <button type="button" class="btn btn-primary center"><a class="btn btn-primary" href="{{url('/generate/spp')}}">Export</a><i class="material-icons"></i></button> --}}
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Button trigger modal -->


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{url('/create/spp/store')}}" method="POST">
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
						<div class="col-md-2">
							<div class="form-group">
                                <select class="custom-select" id = "tahun" name="tahun"  for="tahun">
                                    {{-- <select class="form-select" id="tahun" name="tahun" data-bv-field="tahun"aria-label=".form-select-sm example"> --}}
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
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="bmd-label-floating" style="color:purple">Nominal</label>
								<input type="integer" name="nominal" id="number" class="form-control" style="color:black">
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