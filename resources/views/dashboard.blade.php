<?php $thisPage="Dashboard"; ?>
@extends ('navbar')

@section('content')
  <title>Dashboard</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i>  Dashboard</li>
      </ol>
    </section>

    <main>
    <!-- Main content -->

        <div class="container">
          <div class="row d-flex align-items-center">
              <div class="col-lg-6 col-md-9 ">
                    <h1 >Aplikasi Perpustakaan<br>SMP Cendekia BAZNAS</h1>
                     <p style="font-size:17px;">SMP Cendekia BAZNAS (SCB) merupakan sekolah tingkat SMP berkonsep asrama, bebas biaya untuk anak dhuafa berprestasi yang lolos seleksi dari berbagai wilayah di Indonesia.</p>
               </div>
              <div class="col-lg-6">
                      <img src="images/dashboard-01.png" alt="" width="350px">
              </div>
            </div>
          </div>
                             
      </main>
      <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>{{$total_buku}}</h3>

                      <p>Total Buku</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-book"></i>
                    </div>
                    <a href="/buku" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
        <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>{{$total_peminjaman}}</h3>

                      <p>Sedang dipinjam</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-reply"></i>
                    </div>
                    <a href="/peminjaman" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
        <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3>{{$total_ksiswa}}</h3>

                      <p>Kunjungan Siswa</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <a href="/kunjungansiswa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
         <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>{{$total_kunjungan}}</h3>

                    <p>Kunjungan Masyarakat</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <a href="/kunjungantamu" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
        <!-- ./col -->
      </div>
      <br/>
      <br/>
      <!-- Chart -->
      <div class="row">
        <div class="col-lg-6">
          <center><div id="chartanggota" ></div></center>
        </div>
        
        <div class="col-lg-6">
          <center><div id="chartkunjungan"></div></center>
        </div>
      </div>
      </section>
      <br/>
      <br/>
      
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('chartanggota', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Anggota Perpustakaan'
    },
    subtitle: {
        text: 'Source: Sistem Perpustakaan SCB'
    },
    xAxis: {
        categories: [
            '',
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Siswa',
        data: [{{$total_siswa}}]

    }, {
        name: 'Pegawai',
        data: [{{$total_pegawai}}]

    }, {
        name: 'Santri Tahfidz',
        data: [{{$total_santri}}]

    }]
});

Highcharts.chart('chartkunjungan', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Persentase Kunjungan Perpustakaan'
    },
    subtitle: {
        text: 'Source: Sistem Perpustakaan SCB'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Persentase',
        colorByPoint: true,
        data: [{
            name: 'Siswa',
            y: {{$total_ksiswa}},
            sliced: true,
            selected: true
        }, {
            name: 'Masyarakat',
            y: {{$total_kunjungan}}
        }]
    }]
});
</script>

@endsection
