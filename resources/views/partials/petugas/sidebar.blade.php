@if($petugas->level === 1)Admin

<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
  <div class="logo"><a href="" class="simple-text logo-normal">
    SPPayment
  </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('petugas/dashboard')}}">
          <i class="material-icons ">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/siswa')}}">
          <i class="material-icons">person</i>
          <p>Data Siswa</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/petugas')}}">
          <i class="material-icons">person</i>
          <p>Data Petugas</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/kelas')}}">
          <i class="material-icons">person</i>
          <p>Data Kelas</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/spp')}}">
          <i class="material-icons">library_books</i>
          <p>Data SPP</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/siswaspp')}}">
          <i class="material-icons">list</i>
          <p>Tagihan SPP</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/entri')}}">
          <i class="material-icons">content_paste</i>
          <p>Input Transaksi</p>
        </a>
      </li>
    </ul>
  </div>
</div>
@else <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
  <div class="logo"><a href="" class="simple-text logo-normal">
    SPPayment
  </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('petugas/dashboard')}}">
          <i class="material-icons ">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      {{-- <li class="nav-item ">
        <a class="nav-link" href="{{url('create/siswa')}}">
          <i class="material-icons">person</i>
          <p>Data Siswa</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/petugas')}}">
          <i class="material-icons">person</i>
          <p>Data Petugas</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/kelas')}}">
          <i class="material-icons">person</i>
          <p>Data Kelas</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/spp')}}">
          <i class="material-icons">library_books</i>
          <p>Data SPP</p>
        </a>
      </li> --}}
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/siswaspp')}}">
          <i class="material-icons">list</i>
          <p>Tagihan SPP</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('create/entri')}}">
          <i class="material-icons">content_paste</i>
          <p>Input Transaksi</p>
        </a>
      </li>
    </ul>
  </div>
</div>

@endif

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
  });
});
</script>
