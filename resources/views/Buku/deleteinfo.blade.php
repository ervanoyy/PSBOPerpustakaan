<?php $thisPage="Buku"; ?>
@extends ('navbar')

@section('content')
<title>Hapus Database</title>
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
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-book"></i>  Pendataan Buku</li>
        <li >  Pengaturan</li>
        <li class="active">  Hapus Database</li>
    
      </ol>
    
      </ol>
    </section>

    <!-- Main content -->
    
    <section class="content">
    <center> 
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Apakah anda yakin ingin menghapus seluruh data buku?</h4>
            Seluruh data buku pada database akan hilang. Data buku yang sudah terhapus tidak dapat dikembalikan.
            Pastikan memiliki backup data sebelum melakukan penghapusan. Backup data dapat dilakukan dengan melakukan 
            export excel pada menu pengaturan.
    </div>
            <img src="../../dist/img/del-01.png" style="width:400px">
            <h4 >Apakah anda yakin ingin menghapus seluruh data buku?</br>
            
            </h4>
            </br>
		
		<a href="/buku/deleteall" class="btn btn-danger my-3 btn-lg" style="width:100px">Hapus</a> 
        &#160;&#160;&#160;&#160;&#160;&#160;
        <a href="/buku" class="btn btn-primary my-3 btn-lg" style="width:100px" >Batal</a> 
        <br/>
        <br/>
	</div>
    </center>
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

