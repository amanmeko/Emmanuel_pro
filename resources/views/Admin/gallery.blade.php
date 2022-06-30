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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" ></script>
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
              <h1 class="h3 mb-0 text-gray-800">Form Basics</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active" aria-current="page">Form Basics</li>
              </ol>
            </div>

            {{-- <div class="row">
              <div class="col-lg-6">
                <!-- Form Basic -->
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Image Insertion Form</h6>
                        </div>
                        <div class="card-body">
                            <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image Title</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                placeholder="Image Title">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <input type="password" class="form-control" id="description" placeholder="Image Description">
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                <!-- Form Basic -->
              </div>


            </div> --}}


            <div class="row">
                <div class="col-lg-12 mb-4">
                  <!-- Simple Tables -->
                  <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                      <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#exampleModal"
                      id="#myBtn">
                        <span class="icon text-white-50">
                          <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Add New Image</span>
                      </a>
                    </div>
                    <div class="table-responsive">
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th>Order ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Detail</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                                <tr>
                                    <td><a href="#">RA0449</a></td>
                                    <td>{{$gallery->name}}</td>
                                    <td><img src="{{asset($gallery->image)}}" alt="user image" width="70px" height="90px"></td>
                                    <td>

                                        {{-- <form action=""> --}}
                                            <div class="custom-control custom-switch">
                                                <input data-id="{{$gallery->id}}" type="checkbox" class="custom-control-input" id="{{asset($gallery->id)}}"data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="InActive" {{ $gallery->status ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="{{asset($gallery->id)}}">
                                                    @if ($gallery->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif

                                                </label>
                                            </div>
                                        {{-- </form> --}}

                                    </td>
                                    <td>
                                        <form action="{{route('gallerys.destroy',$gallery)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit"class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="card-footer"></div>
                  </div>
                </div>
              </div>
              <meta name="csrf-token" content="{{ csrf_token() }}">
            <!--Row-->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Image Insertion Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="card mb-4">

                            <div class="card-body">
                                <form action="{{ route('gallerys.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group">
                                    <label for="name">Image Title</label>
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                                    placeholder="Image Title">

                                </div>
                                <div class="form-group">
                                    <label for="detail">Detail</label>
                                    <input type="text" class="form-control" id="detail" name="detail" placeholder="Image Description">
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image"name="image">
                                    <label class="custom-file-label" for="image">Choose Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Insert</button>
                             </form>
                    </div>
                </div>
                </div>
            </div>

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
  <script>
    $(function() {
      $('.custom-control-input').change(function() {

          var status = $(this).prop('checked') == true ? 1 : 0;
          var user_id = $(this).data('id');

          $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
          });

          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/changeStatus',
              data: {'status': status, 'user_id': user_id},
              success: function(data){

                console.log(data.success)
              }
          });
      })
    })

  </script>
</body>

</html>
