@extends ('navbar')

@section('content')
<title>Isi Buku Tamu</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <style>
            .header{
                margin-top:70px;
            }
        </style>
        <br>
        <h2 class="header"><b><center> SISTEM PERPUSTAKAAN</b>
        <br>
        SMP Cendekia Baznas</center></h2>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-edit"></i> Buku Tamu</li>
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
              margin-top : 60px;
            }
            .left2{
              margin-left : 500px;
              margin-top : 60px;
            }
            .card{
              width : 260px;
              box-shadow:0 4px 8px 0 rgba(0,0,0,0.6);
              transition:0.4s;
              background : #fff;
              border-radius : 20px;
              margin-left : 270px;
            }
            .card2{
              width : 260px;
              box-shadow:0 4px 8px 0 rgba(0,0,0,0.6);
              transition:0.4s;
              background : #fff;
              border-radius : 20px;
              margin-left : 310px;

            }
            .box-footer{
              margin-top : 140px;
            }
            .gambar{
                height :30px;
                width :50px;
            }
            </style>
            
            <div class="row">
              <div class="col-sm-6">
                 <div class = "card">
                   <div class = "left">
                   <br>
                   <br>
              <div class="box-footer">
              </div>
            </div>
          </div>
          </div>

          <div class="col-sm-6">
            <div class = "card2">
              <div class = "left2">
              
              <br>
              
              <br>
              
              <div class="box-footer">
              </div>
            </div>
          </div>
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

@endsection