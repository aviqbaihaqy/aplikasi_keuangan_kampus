<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0-beta.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title>CoreUI Free Bootstrap Admin Template</title>
  <!-- Icons-->
  <link href="assets/vendors/css/flag-icon.min.css" rel="stylesheet">
  <link href="assets/vendors/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendors/css/simple-line-icons.css" rel="stylesheet">
  <!-- Main styles for this application-->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/vendors/css/pace.min.css" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <img class="navbar-brand-full" src="assets/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
      <img class="navbar-brand-minimized" src="assets/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
          <i class="icon-bell"></i>
          <span class="badge badge-pill badge-danger">5</span>
        </a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
          <i class="icon-list"></i>
        </a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
          <i class="icon-location-pin"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#">
            <i class="fa fa-bell-o"></i> Updates
            <span class="badge badge-info">42</span>
          </a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-envelope-o"></i> Messages
            <span class="badge badge-success">42</span>
          </a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-tasks"></i> Tasks
            <span class="badge badge-danger">42</span>
          </a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-comments"></i> Comments
            <span class="badge badge-warning">42</span>
          </a>
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="#">
            <i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-usd"></i> Payments
            <span class="badge badge-secondary">42</span>
          </a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-file"></i> Projects
            <span class="badge badge-primary">42</span>
          </a>
          <div class="divider"></div>
          <a class="dropdown-item" href="#">
            <i class="fa fa-shield"></i> Lock Account</a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="nav-icon icon-speedometer"></i> Dashboard
              <span class="badge badge-primary">NEW</span>
            </a>
          </li>
          <li class="nav-title">THEME</li>
          <li class="nav-item">
            <a class="nav-link" href="blank.html">
              <i class="nav-icon icon-drop"></i>Colors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="typography.html">
              <i class="nav-icon icon-pencil"></i> Typography</a>
          </li>
          <li class="nav-title">Components</li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon icon-puzzle"></i> Base</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="base-breadcrumb.html">
                  <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-cards.html">
                  <i class="nav-icon icon-puzzle"></i> Cards</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-carousel.html">
                  <i class="nav-icon icon-puzzle"></i> Carousel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-collapse.html">
                  <i class="nav-icon icon-puzzle"></i> Collapse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-forms.html">
                  <i class="nav-icon icon-puzzle"></i> Forms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-jumbotron.html">
                  <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-list-group.html">
                  <i class="nav-icon icon-puzzle"></i> List group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-navs.html">
                  <i class="nav-icon icon-puzzle"></i> Navs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-pagination.html">
                  <i class="nav-icon icon-puzzle"></i> Pagination</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-popovers.html">
                  <i class="nav-icon icon-puzzle"></i> Popovers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-progress.html">
                  <i class="nav-icon icon-puzzle"></i> Progress</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-scrollspy.html">
                  <i class="nav-icon icon-puzzle"></i> Scrollspy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-switches.html">
                  <i class="nav-icon icon-puzzle"></i> Switches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-tables.html">
                  <i class="nav-icon icon-puzzle"></i> Tables</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-tabs.html">
                  <i class="nav-icon icon-puzzle"></i> Tabs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-tooltips.html">
                  <i class="nav-icon icon-puzzle"></i> Tooltips</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon icon-cursor"></i> Buttons</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="buttons-buttons.html">
                  <i class="nav-icon icon-cursor"></i> Buttons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-button-group.html">
                  <i class="nav-icon icon-cursor"></i> Buttons Group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-dropdowns.html">
                  <i class="nav-icon icon-cursor"></i> Dropdowns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-brand-buttons.html">
                  <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="charts.html">
              <i class="nav-icon icon-pie-chart"></i> Charts</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon icon-star"></i> Icons</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="icons-flags.html">
                  <i class="nav-icon icon-star"></i> Flags
                  <span class="badge badge-success">NEW</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="icons-font-awesome.html">
                  <i class="nav-icon icon-star"></i> Font Awesome
                  <span class="badge badge-secondary">4.7</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="icons-simple-line-icons.html">
                  <i class="nav-icon icon-star"></i> Simple Line Icons</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon icon-bell"></i> Notifications</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="notifications-alerts.html">
                  <i class="nav-icon icon-bell"></i> Alerts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications-badge.html">
                  <i class="nav-icon icon-bell"></i> Badge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications-modals.html">
                  <i class="nav-icon icon-bell"></i> Modals</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="widgets.html">
              <i class="nav-icon icon-calculator"></i> Widgets
              <span class="badge badge-primary">NEW</span>
            </a>
          </li>
          <li class="divider"></li>
          <li class="nav-title">Extras</li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon icon-star"></i> Pages</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="login.html" target="_top">
                  <i class="nav-icon icon-star"></i> Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.html" target="_top">
                  <i class="nav-icon icon-star"></i> Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="404.html" target="_top">
                  <i class="nav-icon icon-star"></i> Error 404</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="500.html" target="_top">
                  <i class="nav-icon icon-star"></i> Error 500</a>
              </li>
            </ul>
          </li>
          <li class="nav-item mt-auto">
            <a class="nav-link nav-link-success" href="https://coreui.io" target="_top">
              <i class="nav-icon icon-cloud-download"></i> Download CoreUI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
              <i class="nav-icon icon-layers"></i> Try CoreUI
              <strong>PRO</strong>
            </a>
          </li>
        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">
      <!-- Breadcrumb-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">
          <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#">
              <i class="icon-speech"></i>
            </a>
            <a class="btn" href="./">
              <i class="icon-graph"></i>  Dashboard</a>
            <a class="btn" href="#">
              <i class="icon-settings"></i>  Settings</a>
          </div>
        </li>
      </ol>

      <div class="container-fluid">
        <div class="animated fadeIn">

          <!-- contoh tampilan dengan 1 kolom -->
          <h4>Penerimaan Barang</h4>
          <div class="row">
                                        <div class="col-md-10">
                                        
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="fa fa-arrow-circle-up" >List Penerimaan</button>
                                        </div>
                                    </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  Laporan Penerimaan
                </div>
                <div class="card-body">
                
                                 
  
    <form action="" method="">
    <table>

    <div class="row">
    <div class="form-group col-md-4">
    <label class="col-form-label" for="cari">Cari </label>
    </div>
    <div class="col-md-6">
      <input class="form-control" type="text" name="cari"/> 
    </div>
    <div class="cold-md-2">
    <button type="button" class="icon-magnifier icons btn btn-secondary" ></button>
    </div>
    </div>

    <div class="row">
    <div class="form-group col-md-4">
    <label class="col-form-label" for="no_lpb">Nomor LPB </label>
    </div>
    <div class="form-group col-md-6">
    <label>001/05/2009**</label>
    </div>
    </div>  

    <div class="row">
    <div class="form-group col-md-4">
    <label class="col-form-label" for="no_lpb">Diterima dari </label>
    </div>
    <div class="form-group col-md-6">
    <label>Pakoe Boemi</label>
    </div>
    </div>  

                                            <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="col-form-label" for="prependedInput">Tanggal diterima</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <select id="select1" name="select1" class="form-control">
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                    <option value="6">06</option>
                                                    <option value="7">07</option>
                                                    <option value="8">08</option>
                                                    <option value="9">09</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <select id="select1" name="select1" class="form-control">
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <select id="select1" name="select1" class="form-control">
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2018">2019</option>
                                                    <option value="2018">2020</option>
                                                </select>
                                            </div>
                                        </div>

    <div class="row">
    <div class="form-group col-md-4">
    <label class="col-form-label" for="no_lpb">Bagian yang menggunakan</label>
    </div>
    <div class="form-group col-md-6">
    <label>Corporate</label>
    </div>
    </div>    


    </table><br>  

    <p><table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>NAMA BARANG</th>
                        <th>SPESIFIKASI</th>
                        <th>QTY DIPESAN</th>
                        <th>QTY DITERIMA</th>
                        <th>JUMLAH HARGA</th>
                        <th>KETERANGAN</th>                  
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>   
                    </tr>
                </tbody>
            </table>
        </p>
        <button type="submit">Simpan</button>
        </form>    
                        
                </div>
              </div>
            </div>
          </div>

      <!-- Tab panes-->

  <!-- Bootstrap and necessary plugins-->
  <script src="assets/vendors/js/jquery.min.js"></script>
  <script src="assets/vendors/js/popper.min.js"></script>
  <script src="assets/vendors/js/bootstrap.min.js"></script>
  <script src="assets/vendors/js/pace.min.js"></script>
  <script src="assets/vendors/js/perfect-scrollbar.min.js"></script>
  <script src="assets/vendors/js/coreui.min.js"></script>
</body>

</html>