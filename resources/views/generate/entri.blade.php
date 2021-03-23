<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Cetak Pembayaran</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>NISN Siswa</th>
                <th>Siswa</th>
				<th>Petugas</th>
				<th>Tanggal Bayar</th>
				<th>Bulan Dibayar</th>
				<th>Tahun Dibayar</th>
                <th>Nominal</th>
			</tr>
		</thead>
		<tbody>
			@php $nomer=0; @endphp
                    @foreach($entri as $entris)
                @php $nomer++; @endphp
			<tr>
				<td>{{$nomer}}</td>
				<td>{{$entris->siswa_id}}</td>
                <td>{{$entris->siswas->nama}}</td>
				<td>{{$entris->petugass->nama_petugas}}</td>
				<td>{{$entris->tgl_bayar}}</td>
				<td>{{$entris->bulan_dibayar}}</td>
				<td>{{$entris->tahun_dibayar}}</td>
                <td>{{$entris->spps->nominal}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>