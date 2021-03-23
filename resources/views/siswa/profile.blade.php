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
              <h3 style="text-align:left">&nbsp&nbsp&nbsp&nbsp Profil Siswa</h3>
            </div>
            <div class="pricing-body"  style="margin:55px">
              <div class="price-wrapper">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6 text-left">
                      <h4>NISN</h4>
                      <h4>NIS</h4>
                      <h4>Nama</h4>
                      <h4>Telepon</h4>
                      <h4>Alamat</h4>
                      <h4>Kelas</h4>
                    </div>
                    <div class="col-md-6 text-left">
                      <h4>{{$siswa->id}}</h4>
                      <h4>{{$siswa->nis}}</h4>
                      <h4>{{$siswa->nama}}</h4>
                      <h4>{{$siswa->no_telp}}</h4>
                      <h4>{{$siswa->kelass->nama_kelas}} {{$siswa->kelass->kompetensi_keahlian}}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
