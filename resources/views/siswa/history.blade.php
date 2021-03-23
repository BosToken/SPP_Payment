

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
  <title>SPPayment</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"><link rel="stylesheet" href="{{asset('css/templatemo-softy-pinko.css')}}">
</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <nav class="main-nav">
                <ul class="nav">
                  <li><a href="{{url('siswa/dashboard')}}">Dashboard</a></li>
                  <li><a href="{{url('siswa/history')}}">Riwayat Pembayaran</a></li>
                  <li><a href="{{url('siswa/profile')}}">Profil</a></li>
                  <li><a href="{{url('logout')}}">Logout</a></li>
                </ul>
                <a class='menu-trigger'>
                  <span>Menu</span>
                </a>
              </nav>
            </div>
          </div>
        </div>
      </header>

  <section class="section colored" id="pricing-plans">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
          <div class="pricing-item active" style="margin:55px">
            <div class="pricing-header">
              <h3 style="text-align:left">&nbsp&nbsp&nbsp&nbsp Riwayat Pembayaran</h3>
            </div>
            <div class="pricing-body"  style="margin:55px">
              <div class="price-wrapper">
                <table class="table" style="color:white">
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
                  @php $nomer=0; @endphp
                    @foreach($history as $historys)
                @php $nomer++; @endphp
                  <tbody>
                    <tr>
                        <td>{{$nomer}}</td>
                        <td>{{$historys->siswa_id}}</td>
                        <td>{{$historys->siswas->nama}}</td>
                        <td>{{$historys->petugass->nama_petugas}}</td>
                        <td>{{$historys->tgl_bayar}}</td>
                        <td>{{$historys->bulan_dibayar}}</td>
                        <td>{{$historys->tahun_dibayar}}</td>
                        <td>{{$historys->spps->nominal}}</td>
                    </tr>
                  </tbody>
                @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
