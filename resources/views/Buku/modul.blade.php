<?php $thisPage="Modul"; ?>
@extends ('navbar')

@section('content')
<title>Modul</title>

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
        Daftar Modul
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-book"></i> Bahan Pustaka</li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box">
            <div class="box-header">

              <h3 class="box-title"><a href="/buku/tambahbuku" type="button" class="btn btn-block btn-success" id="tombol">+ Tambah Bahan Pustaka</a></h3>

               <h3 class="box-title pull-right"><a href="/buku/pengaturan" type="button" class="btn btn-block btn-warning"><i class="fa fa-cog"></i> &nbsp;Pengaturan</a></h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>Kode Buku Inventaris</center></th>
                  <th><center>Kode Buku Lemari</center></th>
                  <th><center>Judul Buku</center></th>
                  <th><center>Gambar</center></th>
                  <th><center>Kategori</center></th>
                  <th><center>Jenis Pustaka</center></th>
                  <th><center>Pengarang</center></th>
                  <th><center>Tanggal Input</center></th>
                  <th><center>Stok</center></th>
                  <th><center>Status Buku</center></th>
                  <th><center>Keterangan</center></th>
                  <th><center>Aksi</center></th>
                </tr>
                </thead>


                <tbody>

                @foreach($buku_buku as $buku)
                <tr>
                  <td>{{$buku->Kode_BukuInventaris}}</td>
                  <td>{{$buku->Kode_BukuLemari}}</td>
                  <td>{{$buku->Judul_Buku}}</td>
                  <td><center><img class="zoom" src="{{ url('/dist/img/'.$buku->Gambar) }}" alt="" height=100px></img></center></td>
                  <td>{{$buku->Kategori}}</td>
                  <td>{{$buku->JenisPustaka}}</td>
                  <td>{{$buku->Pengarang}}</td>
                  <td><?php echo $buku->created_at->format('d-F-Y')?></td>
                  <td>{{$buku->Stok}}</td>
                  <td>{{$buku->Status}}</td>
                  <td>{{$buku->Keterangan}}</td>
                  <td><a href="/buku/editbuku/{{$buku->id}}" type="button" class="btn btn-block btn-primary btn-sm">Edit</a>
                  <a type="button" class="btn btn-block btn-danger btn-sm delete" data-bookid="{{$buku->id}}"data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
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

  <div class="modal fade" id="deletebuku">
       <div class="modal-dialog">
  <!-- Modal Content -->
            <div class="modal-content">
              <div class="modal-header">
                <button  type="button" data-dismiss="modal" class="close">&times;</button>
                <h3 class="modal-title">Konfirmasi Penghapusan</h3>
              </div>
              <form action="/buku/hapusbuku" method="POST" id="deleteForm">
                {{ csrf_field() }}
                <!-- {{ method_field('DELETE') }} -->

                <div class="modal-body">

                    <h4> Setelah dihapus data akan benar-benar hilang. </h4>
                    <h4> Apakah tetap ingin melanjutkan? </h4>

                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    <input type="hidden" name="buku_id" id="buku_id" value="">

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

  $('#deletebuku').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var book_id = button.data('bookid')
      var modal = $(this)
      modal.find('.modal-body #buku_id').val(book_id);
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

