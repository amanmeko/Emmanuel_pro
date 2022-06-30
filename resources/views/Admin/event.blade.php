<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('Admin/img/logo/logo.png')}}" rel="icon">
  <title>Emanuel Church Dashboard</title>
  <link href="{{asset('Admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('Admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('Admin/css/ruang-admin.min.css')}}" rel="stylesheet">
  @livewireStyles
</head>

<body id="page-top">
  <div id="wrapper">

    <!-- SideBar -->
        @include('Admin.sidebar')
    <!-- SideBar -->

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
            @include('Admin.topbar')
        <!-- Topbar -->


      {{-- {{$slot}} --}}

       <!-- Container Fluid-->
        @yield('container')
      <!---Container Fluid-->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Event form</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active" aria-current="page">Form Basics</li>
              </ol>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <!-- Form Basic -->
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Event Insertion Form</h6>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Event Title</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                          placeholder="Image Title">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                          email with anyone else.</small> --}}
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="password" class="form-control" id="description" placeholder="Event Description">
                      </div>

                      <div class="form-group" id="simple-date1">
                        <label for="simpleDataInput">Simple Data Input</label>
                          <div class="input-group date">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" value="01/06/2020" id="simpleDataInput">
                          </div>
                      </div>


                      <div class="form-group">
                        {{-- <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                          <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                        </div> --}}
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>




              </div>


            </div>
            <!--Row-->

            <!-- Documentation Link -->
            <div class="row">
              <div class="col-lg-12 text-center">
                <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                    target="_blank">
                    bootstrap forms documentations.</a> and <a
                    href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                    groups documentations</a></p>
              </div>
            </div>

            <!-- Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="login.html" class="btn btn-primary">Logout</a>
                  </div>
                </div>
              </div>
            </div>

        </div>
        <!---Container Fluid-->

        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
                <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
              </span>
            </div>
          </div>
        </footer>
        <!-- Footer -->
      </div>
    </div>
  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('Admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('Admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('Admin/js/ruang-admin.min.js')}}"></script>
  <script src="{{ asset('Admin/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('Admin/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{ asset('Admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  @stack('scripts')
  @livewireScripts
  <script>
    $(document).ready(function () {
        $('#simple-date1 .input-group.date').datepicker({
            format: 'dd/mm/yyyy',
            todayBtn: 'linked',
            todayHighlight: true,
            autoclose: true,
        });

        });
  </script>
</body>

</html>
