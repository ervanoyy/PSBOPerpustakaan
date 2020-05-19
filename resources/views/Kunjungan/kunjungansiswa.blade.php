<?php $thisPage="Kunjungansiswa"; ?>
@extends ('navbar')

@section('content')
<title>Data Kunjungan</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kunjungan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa  fa-calendar-check-o"></i> Data Kunjungan</a></li>
        <li clas="active">Siswa</li>
    
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->
          @include('flash-message')
          <div class="box">
          <div class="box-header"> 
             <h3 class="box-title"><a href="/kunjungansiswa/export_excel" type="button" class="btn btn-block btn-success" id="tombol"> Export Data</a></h3>
             <h3 class="box-title pull-right"><a href="/kunjungansiswa/deletesiswa" type="button" class="btn btn-block btn-danger">Hapus Data</a></h3>
          </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                </tr>
                </thead>
                <tbody>



                @foreach($kunjungan as $siswa)
                  <tr>
                    <td><?php echo $siswa->created_at->format('d-F-Y')?></td>
                    <td>{{$siswa->Siswa->NIS}}</td>
                    <td>{{$siswa->Siswa->Nama}}</td>
                    <td>{{$siswa->Siswa->Kelas}}</td>
                  </tr>
                @endforeach

                
            
            </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

@endsection
