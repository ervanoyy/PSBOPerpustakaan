@extends ('navbar')

@section('content')
<title>Buku</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="dist/css/imagezoom.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pendataan Buku
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pendataan Buku</a></li>
    
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <a href="/tambahbuku">
            <div class="box-header">
              <h3 class="box-title"><button type="button" class="btn btn-block btn-success" id="tombol">+ Tambah Buku</button></h3>
            </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Buku</th>
                  <th>Judul Buku</th>
                  <th>Gambar</th>
                  <th>Kategori</th>
                  <th>Pengarang</th>
                  <th>Tanggal Input</th>
                  <th>Stok</th>
                  <th>Status Buku</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>0020099</td>
                  <td>IPS</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>

                <tr>
                  <td>0020099</td>
                  <td>IPS</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>

                <tr>
                  <td>0020099</td>
                  <td>IPS</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>

                <tr>
                  <td>0020099</td>
                  <td>IPS</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>

                <tr>
                  <td>0020099</td>
                  <td>IPS</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>

                <tr>
                  <td>0020099</td>
                  <td>IPS</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>

                <tr>
                  <td>0020099</td>
                  <td>IPS</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>

                <tr>
                  <td>0020099</td>
                  <td>IPS</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>

                <tr>
                  <td>0020099</td>
                  <td>Don't Make Me Think</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>

                <tr>
                  <td>0020099</td>
                  <td>IPS</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>

                <tr>
                  <td>0020099</td>
                  <td>IPS</td>
                  <td><img class="zoom" src="dist/img/gambarbuku.jpg" alt="" height=100px></img></td>
                  <td>Pendidikan</td>
                  <td>Ervanoyy</td>
                  <td><?php echo date('d-F-Y');?></td>
                  <td>25</td>
                  <td></td>
                  <td><a href="/editbuku" type="button" class="btn btn-block btn-primary btn-sm">Edit</a><a type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
                </tr>


                              
            
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


  <!-- Modal popup -->
  
  <div class="modal fade" id="deletebuku">
       <div class="modal-dialog">
  <!-- Modal Content -->
            <div class="modal-content">
              <div class="modal-header">
                <button  type="button" data-dismiss="modal" class="close">&times;</button>
                <h4 class="modal-title">Hapus data buku?</h4>
              </div>

              <div class="modal-footer">
              <a href="/buku" class="btn btn-primary">Hapus</a>
                <button class="btn btn-default"  data-dismiss="modal">Batal</button>
              </div>

            </div>
        </div>




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

