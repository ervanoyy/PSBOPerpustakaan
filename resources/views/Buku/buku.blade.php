<?php $thisPage="Buku"; ?>
@extends ('navbar')

@section('content')
<title>Buku</title>

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
        Pendataan Buku
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-book"></i>  Pendataan Buku</li>
    
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
     
              <h3 class="box-title"><a href="/buku/tambahbuku" type="button" class="btn btn-block btn-success" id="tombol">+ Tambah Buku</a></h3>
        
               <h3 class="box-title pull-right"><a href="/buku/pengaturan" type="button" class="btn btn-block btn-warning"><i class="fa fa-cog"></i> &nbsp;Pengaturan</a></h3>
           
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
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

                @foreach($buku_buku as $buku)
                <tr>
                  <td>{{$buku->Kode_Buku}}</td>
                  <td>{{$buku->Judul_Buku}}</td>
                  <td><img class="zoom" src="{{ url('/dist/img/'.$buku->Gambar) }}" alt="" height=100px></img></td>
                  <td>{{$buku->Kategori}}</td>
                  <td>{{$buku->Pengarang}}</td>
                  <td><?php echo $buku->created_at->format('d-F-Y')?></td>
                  <td>{{$buku->Stok}}</td>
                  <td>{{$buku->Status}}</td>
                  
                  <td><a href="/buku/editbuku/{{$buku->id}}" type="button" class="btn btn-block btn-primary btn-sm">Edit</a>
                  <a type="button" class="btn btn-block btn-danger btn-sm" data-bookid="{{$buku->id}}"data-toggle="modal" data-target="#deletebuku" >Delete</a></td>
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
                <h4 class="modal-title">Hapus data buku?</h4>
              </div>

              <div class="modal-footer">
              <a href="/buku" class="btn btn-primary">Hapus</a>
                <button class="btn btn-default"  data-dismiss="modal">Batal</button>
              </div>

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

