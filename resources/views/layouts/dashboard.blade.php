<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('pages.index') }}" class="nav-link" target="_blank">Home</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Super Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          <li class="nav-item">
            <a class="nav-link" id="usersButton">
              <i class="fas fa-users"></i>
              &nbsp;
              &nbsp;
              &nbsp;
              <p>
                Users
              </p>
            </a>
          </li>
          

          <li class="nav-item has-treeview">
            <a class="nav-link" id="optionsButton">
              <i class="nav-icon fas fa-copy"></i>
              &nbsp;
              &nbsp;
              &nbsp;
              <p>
                Options
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  
                  <p>
                    <i class="far fa-circle nav-icon"></i>
                    Add New Option
                  </p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="container">
      
      <div class="row">
        
        <div class="col-md-12 text-center" style="">
          <table class="table table-striped" style="display: none;" id="table">

          </table>
        </div>

      </div>

    </div>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">


  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('dashboard/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('dashboard/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('dashboard/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('dashboard/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dashboard/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard/dist/js/demo.js')}}"></script>
<script type="text/javascript">

  // Delete Users
  function deleteUser(){


        $('.deleteUser').click(function(){

              let id = $(this).data("id");
              
              console.log(id);

              var token = $("meta[name='csrf-token']").attr("content");
   
              $.ajax(
              {
                  url: "/school/users/"+id,
                  type: 'DELETE',
                  data: {
                      "id": id,
                      "_token": token,
                  },
                  success: function (res){

                      console.log(res.message);
                      
                  }
              });             

        });


  }

  // Delete Order
  function deleteOrder(){

      $('.deleteOrder').click(function(){

        var id = $(this).data("id");

        console.log(id);

        var token = $("meta[name='csrf-token']").attr("content");
   
              $.ajax(
              {
                  url: "/school/orders/"+id,
                  type: 'DELETE',
                  data: {
                      "id": id,
                      "_token": token,
                  },
                  success: function (res){

                      console.log(res.message);
                      
                  }
              });

      });

  }

  
  $(document).ready(function(){

        //  Show all Users
          $('#usersButton').click(function(){
            $.get('{{route("users.index")}}', function(res){


                  $('#table').append(`

                        <thead>
                          <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Name</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>

                  `);

                  res.forEach(function(user, i){

                      $('#table').append(`

                        <tbody>
                          <tr class="userRow" data-id="${user.id}">

                              <th>${i+1}</th>
                              <td>${user.name}</td>
                              <td>${user.email}</td>
                              <td><button href="#" class="btn btn-primary deleteUser" data-id="${user.id}">delete</button></td>

                          </tr>
                        </tbody>

                      `);

                  })

                  $(document).ready(function(){
                      
                      deleteUser();

                  });


            })
            // fadeToggle might help
            $('#table').show();

            $('#table tbody, #table thead').remove();

          });

        // show all Orders
          $('#optionsButton').click(function(){

                
              $('#table tbody, #table thead').remove();


              $.get('{{ route("orders.index")}}', function(res){

                  // console.log(res);

                  $('#table').append(`

                        <thead>
                          <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Name</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>

                  `);

                  res.forEach(function(order, i){

                      $('#table').append(`

                        <tbody>
                          <tr class="orderRow" data-id="${order.id}">

                              <th>${i+1}</th>
                              <td>${order.name}</td>
                              <td>${order.display_name}</td>
                              <td><button href="#" class="btn btn-primary deleteOrder" data-id="${order.id}">delete</button></td>

                          </tr>
                        </tbody>


                      `);

                  });

                  $(document).ready(function(){
                      
                      deleteOrder();

                  });

              });


              $('#table').show();

              $('#table tbody, #table thead').remove();


          });


  });


</script>
</body>
</html>