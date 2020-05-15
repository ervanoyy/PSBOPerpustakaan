<?php $thisPage="Buku"; ?>
@extends ('navbar')

@section('content')
<title>Edit Buku</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit buku
      </h1>
      <ol class="breadcrumb">
        <li><a href="/buku"><i class="fa fa-book"></i>  Pendataan Buku</a></li>
        <li class="active">Edit Buku</li>
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
              <h3 class="box-title">Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="/buku/editbuku/{{ $buku->id }}/proses" method="POST" enctype="multipart/form-data" role="form">
              
              {{ csrf_field() }}
              {{ method_field('PUT') }}

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Buku</label>
                  <input type="text" name="Judul_Buku" class="form-control" id="exampleInputEmail1" placeholder="" value="  {{$buku->Judul_Buku}} ">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Gambar Buku</label>
                  <br>
                  <img class="zoom" src="{{ url('/dist/img/'.$buku->Gambar) }}" alt="" height=100px></img>
                  <input name="file" type="file" id="exampleInputFile">

                  <p class="help-block">Format file : PNG,JPG,JPEG</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Buku</label>
                  <input type="text" name="Kode_Buku" value="{{$buku->Kode_Buku}}" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group">
                  <label>Kategori Buku</label>
                  <select name="Kategori" class="form-control">
                    @if($buku->Kategori=='Pendidikan')
                    <option value="Pendidikan" selected>Pendidikan</option>
                    @else
                    <option value="Pendidikan">Pendidikan</option>
                    @endif
                    @if($buku->Kategori=='Fiksi')
                    <option value="Fiksi" selected>Fiksi</option>
                    @else
                    <option value="Fiksi">Fiksi</option>
                    @endif
                    @if($buku->Kategori=='Non_Fiksi')
                    <option value="Non_Fiksi" selected>Non Fiksi</option>
                    @else
                    <option value="Non_Fiksi">Non Fiksi</option>
                    @endif
                    @if($buku->Kategori=='Agama')
                    <option value="Agama" selected>Agama</option>
                    @else
                    <option value="Agama">Agama</option>
                    @endif
                    
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Pengarang</label>
                  <input type="text" name="Pengarang" value="{{$buku->Pengarang}}" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Buku</label>
                  <input type="text" name="Jumlah_Buku" value="{{$buku->Stok}}" class="form-control" id="exampleInputPassword1" placeholder="">
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
