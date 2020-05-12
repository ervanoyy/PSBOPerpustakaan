<?php $thisPage="Bukutamu"; ?>
@extends ('navbar')

@section('content')
<title>Buku Tamu Non Siswa</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><i class="fa fa-edit"></i>  Buku Tamu</li>
        <li class="active"></i>  Non-Siswa</li>
      </ol>
    </section>
    

    <div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
        <b>Buku Tamu Non Siswa</b>
    </div>
    
     <!-- START LOCK SCREEN ITEM -->
    <div>
      <!-- lockscreen credentials (contains the form) -->
      <form action="/formtamu/catat" method="POST" role="form">

        {{ csrf_field() }} 
      
        <div class="center-box">
        <!-- Nama Lengkap -->
          <div class="center box form-group input-group">
              <div class="input-group">
              <input name="Nama" class="form-control" placeholder="Nama Lengkap" type="text">
              <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
              </div>
          </div>
            
        </div> <!-- form-group// -->

        <!-- Umur -->
        <div class="center box form-group input-group">
          <div class="input-group">
            <input name="Umur" class="form-control" placeholder="Umur" type="text">
            <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
          </div>
        </div> <!-- form-group// -->

        <!-- Alamat -->
        <div class="center box form-group input-group">
          <div class="input-group">
            <input name="Alamat" class="form-control" placeholder="Alamat" type="text">
            <span class="input-group-addon"> <i class="fa fa-map marker"></i> </span>
		      </div>
        </div> <!-- form-group// -->

        <!-- No Telepon -->
        <div class="center box form-group input-group">
          <div class="input-group">
            <input name="NoTelp" class="form-control" placeholder="No Telp" type="text">
            <span class="input-group-addon"> <i class="fa fa-phone"></i> </span>
          </div>
        </div> <!-- form-group// -->

        <!-- Tujuan Kedatangan -->
        <div class="center box form-group input-group">
          <div class="input-group">
            <input name="Tujuan" class="form-control" placeholder="Tujuan Datang" type="text">
            <span class="input-group-addon"> <i class="fa fa-pencil"></i> </span>
          </div>    
        </div> <!-- form-group// -->


        <div class="text-center">
            <button type="submit" class="btn btn-primary"> Simpan  </button>
        </div> <!-- form-group// -->                                                                                                             
        </form> 
        
        <br>
    </div> <!-- card.// -->




     
  <!-- /.content-wrapper -->


    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->

@endsection