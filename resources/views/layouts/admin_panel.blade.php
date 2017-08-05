<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Cell | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Favicon -->
  <link rel="icon" href="/images/ecell.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
  .bootstrap-timepicker-widget table td:not(.separator) {
    min-width: 30px;
    color: black;
}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>Cell</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Entrepreneurship</b>Cell</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/images/esummit_white.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Entrepreneurship Cell</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/images/esummit_black.png" class="img-circle" alt="User Image">

                <p>
                  Entrepreneurship Cell - NIT Raipur
                  <small>Member since Nov. 2017</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/images/esummit_black.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Entrepreneurship Cell</p>
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
        <li class="treeview" id="dashboard_navbar">
          <a href="/admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview" id="dashboard_navbar">
          <a href="#">
            <li><a href="#" data-toggle = "modal" data-target="#send_otp_modal"><i class="fa fa-circle-o"></i> Send OTP</a></li>
          </a>
        </li>
        <li class="treeview" id="events_navbar">
          <a href="#">
            <i class="ion ion-calendar"></i>
            <span>Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/events"><i class="fa fa-circle-o"></i> All Events</a></li>
            <li><a href="#" data-toggle = "modal" data-target="#add_event_modal"><i class="fa fa-circle-o"></i> Add an event</a></li>
          </ul>
        </li>
        <li class="treeview" id="startups_navbar">
          <a href="#">
            <i class="ion ion-stats-bars"></i>
            <span>Startups</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/startups"><i class="fa fa-circle-o"></i> All Startups</a></li>
            <li><a href="#" data-toggle="modal" data-target="#add_startup_modal" ><i class="fa fa-circle-o"></i> Add a Startup</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-rupee"></i>
            <span>Sponsors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/sponsors"><i class="fa fa-circle-o"></i> All Sponsors</a></li>
            <li><a href="#" data-toggle="modal" data-target="#add_sponsor_modal"><i class="fa fa-circle-o"></i> Add a Sponsor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-star-o"></i>
            <span>Speakers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/speakers"><i class="fa fa-circle-o"></i> All Speakers</a></li>
            <li><a href="#" data-toggle="modal" data-target="#add_speaker_modal"><i class="fa fa-circle-o"></i> Add a Speaker</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-question-circle"></i>
            <span>B Quiz</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/questionSets"><i class="fa fa-circle-o"></i> All Question Sets</a></li>
            <li><a href="#" data-toggle="modal" data-target="#add_questionSet_modal"><i class="fa fa-plus-circle"></i> Add A Question Set</a></li>
            <li><a href="/admin/questions"><i class="fa fa-circle-o"></i> All Question</a></li>
            <li><a href="#" data-toggle="modal" data-target="#add_question_modal"><i class="fa fa-plus-circle"></i> Add A Question</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @section('content')
  @show
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.1
    </div>
    <strong>Copyright &copy; 2017 <a href="http://ecell.nitrr.ac.in">Entrepreneurship Cell NIT Raipur</a>.</strong> All rights
    reserved.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- Add Event Modal -->
<div class="modal modal-info fade" id="add_event_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('events.store') }}">
            {{ csrf_field() }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Add an event</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_title">Title</span>
                            <input type="text" class="form-control" placeholder="Event Title" name="title" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                  <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_description">Description</span>
                            <input type="text" class="form-control" placeholder="Event Description" name="description" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_detail">Detail</span>
                            <textarea placeholder="Event Details" class="form-control" rows="5" name="details" required></textarea>
                        </div>
                    </div>
                </div><br> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <label for="event_image">Event Image</label>
                            <input type="file" id="event_image" name="meta" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_venue">Venue</span>
                            <input type="text" class="form-control" placeholder="Event Venue" name="venue" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Event Date:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="date" class="form-control pull-right" id="datepicker" required>
                      </div>
                    </div><br>
                  </div>
                  <div class="col-lg-6">
                    <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <label>Event Time :</label>

                        <div class="input-group">
                          <input type="text" name="time" class="form-control timepicker" required>

                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- End Add Event Modal -->

<!-- Add Startup Modal -->
<div class="modal modal-info fade" id="add_startup_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('startups.store') }}">
            {{ csrf_field() }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Add a startup</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_title">Name</span>
                            <input type="text" class="form-control" placeholder="Event Title" name="name" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                  <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_description">Owner</span>
                            <input type="text" class="form-control" placeholder="Enter Responsible Person Name" name="owner" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_detail">Description</span>
                            <textarea placeholder="Event Details" class="form-control" rows="5" name="description" required></textarea>
                        </div>
                    </div>
                </div><br> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_detail">Address</span>
                            <textarea placeholder="Address" class="form-control" rows="5" name="address" required></textarea>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_image">Image</span>
                            <input type="file" class="form-control" placeholder="Event Image" name="meta" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_time">Contact No</span>
                            <input type="datetime" class="form-control" placeholder="Contact No" name="contact_no" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_time">Contact Email</span>
                            <input type="email" class="form-control" placeholder="Sponsor Email" name="contact_email" required>
                        </div>
                    </div>
                </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>
<!-- End Add Startup Modal -->

<!-- Add Speaker Modal -->
<div class="modal modal-info fade" id="add_speaker_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('speakers.store') }}">
            {{ csrf_field() }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Add a speaker</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_title">Name</span>
                            <input type="text" class="form-control" placeholder="Event Title" name="name" required>
                        </div>
                    </div>
                </div><br>                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_detail">Description</span>
                            <textarea placeholder="Event Details" class="form-control" rows="5" name="description" required></textarea>
                        </div>
                    </div>
                </div><br>                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_image">Image</span>
                            <input type="file" class="form-control" placeholder="Event Image" name="meta" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_time">Contact No</span>
                            <input type="datetime" class="form-control" placeholder="Contact No" name="contact_no" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_time">Contact Email</span>
                            <input type="email" class="form-control" placeholder="Speaker Email" name="contact_email" required>
                        </div>
                    </div>
                </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>
<!-- End Speaker Modal -->

<!-- Add Sponsor Modal -->
<div class="modal modal-info fade" id="add_sponsor_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('sponsors.store') }}">
            {{ csrf_field() }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Add a sponsor</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_title">Name</span>
                            <input type="text" class="form-control" placeholder="Event Title" name="name" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                  <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_description">Owner</span>
                            <input type="text" class="form-control" placeholder="Enter Responsible Person Name" name="owner" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_detail">Description</span>
                            <textarea placeholder="Event Details" class="form-control" rows="5" name="description" required></textarea>
                        </div>
                    </div>
                </div><br> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_detail">Address</span>
                            <textarea placeholder="Address" class="form-control" rows="5" name="address" required></textarea>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_image">Image</span>
                            <input type="file" class="form-control" placeholder="Event Image" name="meta" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_time">Contact No</span>
                            <input type="datetime" class="form-control" placeholder="Contact No" name="contact_no" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_email">Contact Email</span>
                            <input type="email" class="form-control" placeholder="Sponsor Email" name="contact_email" required>
                        </div>
                    </div>
                </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>
<!-- End Add Sponsor Modal -->

<!-- Add Question set modal -->
<div class="modal modal-info fade" id="add_questionSet_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('questionSets.store') }}">
        {{ csrf_field() }}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Create a question set</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-object-group"></i></span>
                <input type="text" class="form-control" placeholder="Set Name" name="set_name" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
                <input type="text" class="form-control" placeholder="Set Number" name="set_number" required>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-lg-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-arrows-alt"></i></span>
                <textarea type="text" row=5 class="form-control" placeholder="Set Description" name="description" required></textarea>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-lg-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-file-picture-o"></i></span>
                <input type="file" name="meta" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline">Save changes</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- End Add Question set modal -->

<!-- Add Question modal -->
<div class="modal modal-info fade" id="add_question_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('questions.store') }}">
        {{ csrf_field() }}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Create A Question</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
                <input type="text" class="form-control" placeholder="Question" name="question" required>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-lg-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-arrows-alt"></i></span>
                <textarea type="text" row=5 class="form-control" placeholder="Question Description" name="description" required></textarea>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                <input type="text" row=5 class="form-control" placeholder="Question Score" name="score" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-file-picture-o"></i></span>
                <input type="file" name="meta" class="form-control" multiple>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-lg-6">
              <div class="input-group">
                <label>Select Question Set</label>
                 <select class="form-control" name="question_set">
                @foreach ($questionSets as $questionSet)
                   <option value="{{ $questionSet->question_set_id }}">{{ $questionSet->name }} {{ $questionSet->set }}</option> 
                @endforeach
                </select> 
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Time Limit</label>
                <div class="row">
                    <div class="col-lg-6">
                      <select class="form-control" name="minutes">
                        @for ($i = 0; $i <= 60; $i++)
                          <option value="{{ $i }}">{{ $i }} Minutes</option>
                        @endfor
                      </select>
                    </div>
                    <div class="col-lg-6">
                      <select class="form-control" name="seconds">
                        @for ($i = 0; $i <= 59; $i++)
                          <option value="{{ $i }}">{{ $i }} Seconds</option>
                        @endfor
                      </select>
                    </div>
                </div>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label>Question Type</label>
                <select class="form-control" name="question_type">
                  <option value="text">Text</option>
                  <option value="image">Image</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline">Save changes</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- End Add Question modal -->

<!-- ./wrapper -->
<div class="modal fade modal-success" tabindex="-1" role="dialog" id="message_modal">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Message</h4>
            </div>
            <div class="modal-body">
                <p id="message_call"></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-success" tabindex="-1" role="dialog" id="send_otp_modal">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form method="POST" action="/admin/sendotp">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Enter Mobile Number</h4>
              </div>
              <div class="modal-body">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-file-picture-o"></i></span>
                        <input type="text" name="number" class="form-control">
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline">Save changes</button>
              </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/bower_components/raphael/raphael.min.js"></script>
<script src="/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/bower_components/moment/min/moment.min.js"></script>
<script src="/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script src="/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- DataTables -->
<script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function (){
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //Time Picker
    $('.timepicker').timepicker({
      showInputs: false
    })

    $('#example1').DataTable()
  })
</script>
</body>
</html>
