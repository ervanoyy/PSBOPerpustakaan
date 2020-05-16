<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--- Logo Title --->
  <link rel="icon" type="image/png" href="{{ asset('dist/img/Logoscb.png')}}"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!-- Mulai copy -->
<div class="wrapper">


  <header class="main-header">
    <!-- Logo -->
    <a href="/dashboard" class="logo" style="text-decoration:none">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>CB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Perpustakaan</b>Baznas</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" style="text-decoration:none" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    <!-- COPY INI NAV BAR ATAS -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          
          <li class="hidden-xs">
                    <a>
                        <i class="fa fa-calendar"></i>&nbsp;

                        <script type="text/javascript">

                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay(),
                                thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);

                        </script>

                    </a>
                </li>

        
                <li class="hidden-xs">
                    <a>
                        <i class="fa fa-clock-o"></i> <span id="jamweke">12:49:27</span>
                        <script type="text/javascript">
							
                            function startTime() {
                                var today = new Date(),
                                    curr_hour = today.getHours(),
                                    curr_min = today.getMinutes(),
                                    curr_sec = today.getSeconds();
                                curr_hour = checkTime(curr_hour);
                                curr_min = checkTime(curr_min);
                                curr_sec = checkTime(curr_sec);
                                document.getElementById('jamweke').innerHTML = curr_hour + ":" + curr_min + ":" + curr_sec;
                            }
                            function checkTime(i) {
                                if (i < 10) {
                                    i = "0" + i;
                                }
                                return i;
                            }
                            setInterval(startTime, 500);
                            //-->
                        </script>
                    </a>
                </li>


          <li class="user user-menu">
            <a href="/logout">
              <span><i class="fa fa-sign-out"></i>    Keluar</a></span>
            </a>
            
            
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>


    </nav>


  </header>



  <!-- COPY INI SIDE BAR -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/Logoscb.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($thisPage == "Dashboard") echo "class='active'"; ?>><a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li <?php if($thisPage == "Bukutamu") echo "class='active'"; ?>><a href="/formsiswa"><i class="fa fa-edit"></i> <span>Isi Buku Tamu</span></a></li>  
        <li <?php if($thisPage == "Buku") { 
                      echo "class='treeview active'"; 
                  } elseif($thisPage == "Buku") { 
                      echo "class='treeview active'"; 
                  }else {
                      echo "class='treeview'";
                  }      
        ?>>
       
          <a href="">
          <i class="fa fa-book"></i> <span>Bahan Pustaka</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($thisPage == "Buku") echo "class='active'"; ?>><a href="/peminjaman"><i class="fa fa-circle-o"></i> Buku</a></li>
            <li <?php if($thisPage == "Buku") echo "class='active'"; ?>><a href="/dashboard"><i class="fa fa-circle-o"></i> Modul</a></li>
            <li <?php if($thisPage == "Buku") echo "class='active'"; ?>><a href="/dashboard"><i class="fa fa-circle-o"></i> Jurnal</a></li>
                 
          </ul>
        </li>
        
        
        <li <?php if($thisPage == "Peminjaman") { 
                      echo "class='treeview active'"; 
                  } elseif($thisPage == "Peminjaman") { 
                      echo "class='treeview active'"; 
                  }else {
                      echo "class='treeview'";
                  }      
        ?>>
       
          <a href="">
          <i class="fa fa-exchange"></i> <span>Peminjaman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($thisPage == "Peminjaman") echo "class='active'"; ?>><a href="/peminjaman"><i class="fa fa-circle-o"></i> Siswa</a></li>
            <li <?php if($thisPage == "Peminjaman") echo "class='active'"; ?>><a href="/dashboard"><i class="fa fa-circle-o"></i> Pegawai</a></li>
            <li <?php if($thisPage == "Peminjaman") echo "class='active'"; ?>><a href="/dashboard"><i class="fa fa-circle-o"></i> Santri Tahfidz</a></li>
                 
          </ul>
        </li>  
        <li <?php if($thisPage == "Kunjungansiswa") { 
                      echo "class='treeview active'"; 
                  } elseif($thisPage == "Kunjungannonsiswa") { 
                      echo "class='treeview active'"; 
                  } else {
                      echo "class='treeview'";
                  }      
        ?>>
          <a href="">
            <i class="fa  fa-calendar-check-o"></i> <span>Data Kunjungan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($thisPage == "Kunjungansiswa") echo "class='active'"; ?>><a href="/kunjungansiswa"><i class="fa fa-circle-o"></i> Siswa</a></li>
            <li <?php if($thisPage == "Kunjungannonsiswa") echo "class='active'"; ?>><a href="/kunjungantamu"><i class="fa fa-circle-o"></i> Masyarakat</a></li>
          </ul>
        </li>
        <li <?php if($thisPage == "Siswa") { 
                      echo "class='treeview active'"; 
                  } elseif($thisPage == "Pegawai") { 
                      echo "class='treeview active'"; 
                  }else {
                      echo "class='treeview'";
                  }      
        ?>>
       
          <a href="">
            <i class="fa fa-user"></i> <span>Anggota Perpustakaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($thisPage == "Siswa") echo "class='active'"; ?>><a href="/datasiswa"><i class="fa fa-circle-o"></i> Siswa</a></li>
            <li <?php if($thisPage == "Pegawai") echo "class='active'"; ?>><a href="/datapegawai"><i class="fa fa-circle-o"></i> Pegawai</a></li>
            <li <?php if($thisPage == "Pegawai") echo "class='active'"; ?>><a href="/"><i class="fa fa-circle-o"></i> Santri Tahfidz</a></li> 
            <li <?php if($thisPage == "Pegawai") echo "class='active'"; ?>><a href="/"><i class="fa fa-circle-o"></i> Masyarakat</a></li>      
          </ul>
        </li>
        <li <?php if($thisPage == "Admin") echo "class='active'"; ?>> <a href="/admin"><i class="fa fa-gears"></i> <span>Pengaturan Admin</span></a></li>
        
       
                         
      </ul>
    
    </section>
    <!-- /.sidebar -->
</aside>


    @yield('content')



</body>
</html>
