<?php $thisPage="Siswa"; ?>
@extends ('navbar')

@section('content')
<title>Data Siswa</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-user"></i>  User</li>
        <li><a href="/datasiswa"> Data Siswa</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            
            <!-- /.box -->
            @include('flash-message')
            <div class="box">
              <a href="/datasiswa">
              <div class="box-header">
              <h3 class="box-title"><button type="button" class="btn btn-block btn-success" id="tombol">Simpan</button></h3>
              </a>
              <!-- /.box-header -->
                <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($siswa as $siswa)
                    <tr>
                      <td>{{$siswa->NIS}}</td>
                      <td>{{$siswa->Nama}}</td>
                      <td>{{$siswa->Kelas}}</td>
                      <td><a href="/Siswa/editdatasiswa/{{$siswa->id}}" type="button" class="btn btn-block btn-primary btn-sm" style="width: 100px;">Edit</a>
                      <a type="button" class="btn btn-block btn-danger btn-sm delete" data-bookid="{{$siswa->id}}"data-toggle="modal" data-target="#deletesiswa" style="width: 100px;" >Delete</a></td>
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

      <!-- Pop Up for Delete Confirmation -->
  <!-- Modal popup -->
  
  <div class="modal fade" id="deletesiswa">
       <div class="modal-dialog">
  <!-- Modal Content -->
            <div class="modal-content">
              <div class="modal-header">
                <button  type="button" data-dismiss="modal" class="close">&times;</button>
                <h4 class="modal-title">Konfirmasi Penghapusan</h4>
              </div>
              <form action="/siswa/hapussiswa" method="POST" id="deleteForm">
                {{ csrf_field() }}
                <!-- {{ method_field('DELETE') }} -->

                <div class="modal-body">
                    
                    <h4> Setelah dihapus data akan benar-benar hilang. </h4>
                    <h4> Apakah tetap ingin melanjutkan? </h4>
                    
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    <input type="hidden" name="siswa_id" id="siswa_id" value="">

                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary"> Hapus </button>
                  <button type="button" class="btn btn-default"  data-dismiss="modal">Batal</button>
                </div>
              </form>

            </div>
        </div>

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

  $('#deletesiswa').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var siswa_id = button.data('bookid') 
      var modal = $(this)
      modal.find('.modal-body #siswa_id').val(siswa_id);
  })

</script>

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
