@extends ('navbar')

@section('content')
<title>Peminjaman Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Peminjaman Buku
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-exchange"></i>  Peminjaman Buku</a></li>
    
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <!-- Tanggal Pinjam dan Kembali -->
        <?php
        $pinjam       = date("d-F-Y");
        $tujuh_hari   = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
        $kembali      = date("d-F-Y", $tujuh_hari);
        ?>

          <!-- /.box -->

          <div class="box">
            <a href="/tambahpeminjaman">
            <div class="box-header">
              <h3 class="box-title"><button type="button" class="btn btn-block btn-success" id="tombol">+ Peminjaman Buku</button></h3>
            </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Kode Buku</th>
                  <th>Judul Buku</th>
                  <th>Tanggal Peminjaman</th>
                  <th>Batas Pengembalian</th>
                  <th>Tanggal Pengembalian</th>
                  <th>Status Pengembalian</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm disabled">Sudah dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#pengembalian">Belum dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm disabled">Sudah dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#pengembalian">Belum dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm disabled">Sudah dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#pengembalian">Belum dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm disabled">Sudah dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#pengembalian">Belum dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm disabled">Sudah dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#pengembalian">Belum dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm disabled">Sudah dikembalikan</button></td>
                </tr>

                <tr>
                  <td>9987223</td>
                  <td>Siti Nurhasanah</td>
                  <td>002344</td>
                  <td>Belajar Ngoding</td>
                  <td><?php echo "$pinjam"; ?></td>
                  <td><?php echo "$kembali"; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#pengembalian">Belum dikembalikan</button></td>
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

</div>
<!-- ./wrapper -->

<!-- Modal popup -->
  
<div class="modal fade" id="pengembalian">
       <div class="modal-dialog">
  <!-- Modal Content -->
            <div class="modal-content">
              <div class="modal-header">
                <button  type="button" data-dismiss="modal" class="close">&times;</button>
                <h4 class="modal-title">Ubah status buku menjadi sudah dikembalikan?</h4>
              </div>

              <div class="modal-footer">
              <a href="/peminjaman" class="btn btn-primary">Ya</a>
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
