<?php $thisPage="Masyarakat"; ?>
@extends ('navbar')

@section('content')
<title>Edit Data Masyarakat</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data Masyarakat
      </h1>
      <ol class="breadcrumb">
        <li><a href="/masyarakat"><i class="fa fa-list"></i>  Data Masyarakat</a></li>
        <li class="active">Edit Data Masyarakat</li>
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
              <h3 class="box-title">Data Santri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="/Masyarakat/editdatamasyarakat/" method="POST" enctype="multipart/form-data" role="form">


              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="Nama" class="form-control"  id="exampleInputEmail1" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" name="Alamat" class="form-control" id="exampleInputPassword1" placeholder="" >
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Umur</label>
                  <input type="text" name="Umur" class="form-control" id="exampleInputPassword1" placeholder="" >
                </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">No.Telp</label>
                  <input type="text" name="Telepon" class="form-control" id="exampleInputPassword1" placeholder="" >
                </div>

                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
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
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- page script -->

@endsection
