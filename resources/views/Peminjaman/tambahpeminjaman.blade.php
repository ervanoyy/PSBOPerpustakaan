<?php $thisPage="Peminjaman"; ?>
@extends ('navbar')

@section('content')
<title>Form Peminjaman</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Peminjaman
      </h1>
      <ol class="breadcrumb">
        <li><a href="/peminjaman"><i class="fa fa-exchange"></i>  Peminjaman Buku</a></li>
        <li class="active">Form Peminjaman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            <!-- <h3 class="box-title">Data Buku</h3> -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIS/NIP</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Buku</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>    
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="/confirmpeminjaman" type="submit" class="btn btn-primary">Pinjam</a>
              
              <a href="/peminjaman"
                <button type="button" class="btn btn-default">Cancel</button>
              </a> 

              </div>
            </form>
          </div>
          <!-- /.box -->

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