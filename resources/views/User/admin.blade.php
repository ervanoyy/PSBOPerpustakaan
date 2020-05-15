<?php $thisPage="Admin"; ?>
@extends ('navbar')

@section('content')
<title>Admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/imagezoom.css')}}">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-user"></i>  User</li>
        <li class="active">Admin</li>
    
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <a href="/admin/tambahadmin">
            <div class="box-header">
              <h3 class="box-title"><button type="button" class="btn btn-block btn-success" id="tombol">+ Tambah Admin</button></h3>
            </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
                </thead>


                <tbody>

                @foreach($user_user as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  
                  <td>
                  <div class="grid-container">
                  <div class="grid-item"><a type="button" class="btn btn-block btn-danger btn-sm" style="width: 80px; float:left;" data-userid="{{$user->id}}"data-toggle="modal" data-target="#deleteModal">Delete</a></div>
                  </div>  
                  </td>
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
  <footer class="main-footer">
    
  </footer>

    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- Pop Up for Delete Confirmation -->
  <!-- Modal popup -->
  
  <div class="modal fade" id="deleteModal">
       <div class="modal-dialog">
  <!-- Modal Content -->
            <div class="modal-content">
              <div class="modal-header">
                <button  type="button" data-dismiss="modal" class="close">&times;</button>
                <h3 class="modal-title">Konfirmasi Penghapusan</h3>
              </div>
              <form action="/admin/hapus" method="POST" id="deleteForm">
                {{ csrf_field() }}
                <!-- {{ method_field('DELETE') }} -->

                <div class="modal-body">
                    
                    <h4> Setelah dihapus data akan benar-benar hilang. </h4>
                    <h4> Apakah tetap ingin melanjutkan? </h4>
                    
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    <input type="hidden" name="admin_id" id="admin_id" value="">

                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary"> Hapus </button>
                  <button type="button" class="btn btn-default"  data-dismiss="modal">Batal</button>
                </div>
              
              </form>
            </div>
        </div>



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

<script>

  $('#deleteModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var admin_id = button.data('userid') 
      var modal = $(this)
      modal.find('.modal-body #admin_id').val(admin_id);
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

