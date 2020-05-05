@extends ('navbar')

@section('content')
<title>rekappeminjaman</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Peminjaman</a></li>
        <li class="active">rekappeminjaman</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          
          <style>
            .left{
              margin-left : 30px;
              margin-top : 40px;
            }
            .wrap{
              margin : auto;
              margin-top: 50px;
              margin-left : 40px;

            }
            .card{
              width : 400px;
              box-shadow:0 4px 8px 0 rgba(0,0,0,0.6);
              transition:0.4s;
              background : #fff;
            }
            .box-footer{
              margin-top : 140px;
            }
            .container{
              margin-left : 60px;
            }
            </style>
          <div class = "wrap">
            <div class = "card">
              <div class = "left">
              <table width="700" border="0" align="left" cellspacing="5">
              <br>
              <h2><b>Peminjaman</b></h2>
              
                <tr>
                  <td width="80" align="left" valign="top">NIS / NIP</td>
                  <td width="5" align="left" valign="top">:</td>
                  <td width="300" align="left" valign="top">023023109</td>
                  <br>
                </tr>  
                
                <tr>
                  <td width="80" align="left" valign="top">Nama</td>
                  <td width="5" align="left" valign="top">:</td>
                  <td width="300" align="left" valign="top">Dina Fadila</td>
                </tr>
                <tr>
                  <td width="80" align="left" valign="top">Kode Buku</td>
                  <td width="5" align="left" valign="top">:</td>
                  <td width="300" align="left" valign="top">02323230902</td>
                </tr>
                <tr>
                  <td width="80" align="left" valign="top">Judul Buku</td>
                  <td width="5" align="left" valign="top">:</td>
                  <td width="300" align="left" valign="top">Ilmu Pengetahuan Alam</td>
                </tr>
                <tr>
                  <td width="80" align="left" valign="top">Tanggal Peminjaman</td>
                  <td width="5" align="left" valign="top">:</td>
                  <td width="300" align="left" valign="top">12 Maret 2020</td>
                </tr>
                <tr>
                  <td width="80" align="left" valign="top">Tanggal Pengembalian</td>
                  <td width="5" align="left" valign="top">:</td>
                  <td width="300" align="left" valign="top">19 Maret 2020</td>
                </tr>
              </table>
              <br>
              
              <div class="box-footer">
              <div class = "container">
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            </div>
          </div>
          <div>


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

@endsection