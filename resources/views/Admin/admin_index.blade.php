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
  <link href="{{asset('Admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" >
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
      </div>

      {{-- {{$slot}} --}}

       <!-- Container Fluid-->
      @yield('container')
      <!---Container Fluid-->

      <!-- Container Fluid-->
        {{-- <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item " aria-current="page">Dashboard</li>
                </ol>
            </div>

            <div class="row mb-3">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Earnings (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        <div class="mt-2 mb-0 text-muted text-xs">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span>Since last month</span>
                        </div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-primary"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <!-- Earnings (Annual) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Sales</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">650</div>
                        <div class="mt-2 mb-0 text-muted text-xs">
                            <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                            <span>Since last years</span>
                        </div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-shopping-cart fa-2x text-success"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <!-- New User Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">New User</div>
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">366</div>
                        <div class="mt-2 mb-0 text-muted text-xs">
                            <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                            <span>Since last month</span>
                        </div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        <div class="mt-2 mb-0 text-muted text-xs">
                            <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                            <span>Since yesterday</span>
                        </div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-warning"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Monthly Recap Report</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                    </div>
                </div>
                </div>
                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Products Sold</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Month <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Select Periode</div>
                        <a class="dropdown-item" href="#">Today</a>
                        <a class="dropdown-item" href="#">Week</a>
                        <a class="dropdown-item active" href="#">Month</a>
                        <a class="dropdown-item" href="#">This Year</a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="mb-3">
                        <div class="small text-gray-500">Oblong T-Shirt
                        <div class="small float-right"><b>600 of 800 Items</b></div>
                        </div>
                        <div class="progress" style="height: 12px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="small text-gray-500">Gundam 90'Editions
                        <div class="small float-right"><b>500 of 800 Items</b></div>
                        </div>
                        <div class="progress" style="height: 12px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="small text-gray-500">Rounded Hat
                        <div class="small float-right"><b>455 of 800 Items</b></div>
                        </div>
                        <div class="progress" style="height: 12px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="small text-gray-500">Indomie Goreng
                        <div class="small float-right"><b>400 of 800 Items</b></div>
                        </div>
                        <div class="progress" style="height: 12px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="small text-gray-500">Remote Control Car Racing
                        <div class="small float-right"><b>200 of 800 Items</b></div>
                        </div>
                        <div class="progress" style="height: 12px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    </div>
                    <div class="card-footer text-center">
                    <a class="m-0 small text-primary card-link" href="#">View More <i
                        class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                </div>
                <!-- Invoice Example -->
                <div class="col-xl-8 col-lg-7 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Invoice</h6>
                    <a class="m-0 float-right btn btn-danger btn-sm" href="#">View More <i
                        class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Item</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="#">RA0449</a></td>
                            <td>Udin Wayang</td>
                            <td>Nasi Padang</td>
                            <td><span class="badge badge-success">Delivered</span></td>
                            <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">RA5324</a></td>
                            <td>Jaenab Bajigur</td>
                            <td>Gundam 90' Edition</td>
                            <td><span class="badge badge-warning">Shipping</span></td>
                            <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">RA8568</a></td>
                            <td>Rivat Mahesa</td>
                            <td>Oblong T-Shirt</td>
                            <td><span class="badge badge-danger">Pending</span></td>
                            <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">RA1453</a></td>
                            <td>Indri Junanda</td>
                            <td>Hat Rounded</td>
                            <td><span class="badge badge-info">Processing</span></td>
                            <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">RA1998</a></td>
                            <td>Udin Cilok</td>
                            <td>Baby Powder</td>
                            <td><span class="badge badge-success">Delivered</span></td>
                            <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
                </div>
                <!-- Message From Customer-->
                <div class="col-xl-4 col-lg-5 ">
                <div class="card">
                    <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-light">Message From Customer</h6>
                    </div>
                    <div>
                    <div class="customer-message align-items-center">
                        <a class="font-weight-bold" href="#">
                        <div class="text-truncate message-title">Hi there! I am wondering if you can help me with a
                            problem I've been having.</div>
                        <div class="small text-gray-500 message-time font-weight-bold">Udin Cilok · 58m</div>
                        </a>
                    </div>
                    <div class="customer-message align-items-center">
                        <a href="#">
                        <div class="text-truncate message-title">But I must explain to you how all this mistaken idea
                        </div>
                        <div class="small text-gray-500 message-time">Nana Haminah · 58m</div>
                        </a>
                    </div>
                    <div class="customer-message align-items-center">
                        <a class="font-weight-bold" href="#">
                        <div class="text-truncate message-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </div>
                        <div class="small text-gray-500 message-time font-weight-bold">Jajang Cincau · 25m</div>
                        </a>
                    </div>
                    <div class="customer-message align-items-center">
                        <a class="font-weight-bold" href="#">
                        <div class="text-truncate message-title">At vero eos et accusamus et iusto odio dignissimos
                            ducimus qui blanditiis
                        </div>
                        <div class="small text-gray-500 message-time font-weight-bold">Udin Wayang · 54m</div>
                        </a>
                    </div>
                    <div class="card-footer text-center">
                        <a class="m-0 small text-primary card-link" href="#">View More <i
                            class="fas fa-chevron-right"></i></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!--Row-->

            <div class="row">
                <div class="col-lg-12 text-center">
                <p>Do you like this template ? you can download from <a href="https://github.com/indrijunanda/RuangAdmin"
                    class="btn btn-primary btn-sm" target="_blank"><i class="fab fa-fw fa-github"></i>&nbsp;GitHub</a></p>
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

        </div> --}}
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

        <div class="row">
          <div class="col-lg-6">
            <!-- Form Basic -->
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your
                      email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                      <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>

            <!-- Form Sizing -->
            <div class="card mb-3">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Sizing</h6>
              </div>
              <div class="card-body">
                <p>Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code> and <code
                    class="highlighter-rouge">.form-control-sm</code>.</p>
                <p>Example for form general</p>
                <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg">
                <input class="form-control  mb-3" type="text" placeholder="Default input">
                <input class="form-control form-control-sm  mb-3" type="text" placeholder=".form-control-sm">
                <p>Example for Select</p>
                <select class="form-control form-control-lg  mb-3">
                  <option>Large select</option>
                </select>
                <select class="form-control mb-3">
                  <option>Default select</option>
                </select>
                <select class="form-control form-control-sm mb-3">
                  <option>Small select</option>
                </select>
              </div>
            </div>

            <!-- Horizontal Form -->
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Horizontal Form</h6>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-3 pt-0">Radios</legend>
                      <div class="col-sm-9">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio1">First Radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio2">Second Radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" name="radioDisabled" id="customRadioDisabled1"
                            class="custom-control-input" disabled>
                          <label class="custom-control-label" for="customRadioDisabled1">Third Radio Disabled</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <div class="form-group row">
                    <div class="col-sm-3">Checkbox</div>
                    <div class="col-sm-9">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <!-- General Element -->
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">General Element</h6>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                      placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlReadonly">Readonly</label>
                    <input class="form-control" type="text" placeholder="Readonly input here..."
                      id="exampleFormControlReadonly" readonly>
                  </div>
                  <div class="form-group">
                    <label for="validationServer01">Input with Success</label>
                    <input type="text" class="form-control is-valid" id="validationServer01"
                      placeholder="Input with Success" value="Mark" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="validationServer03">Input with Error</label>
                    <input type="text" class="form-control is-invalid" id="validationServer03"
                      placeholder="Input with Error" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Checkbox</label>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                      <label class="custom-control-label" for="customCheck2">Check this custom checkbox 1</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                      <label class="custom-control-label" for="customCheck3">Check this custom checkbox 2</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckDisabled1" disabled>
                      <label class="custom-control-label" for="customCheckDisabled1">Check this custom
                        checkbox</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Radio Button</label>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio4">Or toggle this other custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" name="radioDisabled" id="customRadioDisabled2" class="custom-control-input"
                        disabled>
                      <label class="custom-control-label" for="customRadioDisabled2">Toggle this custom radio</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Switches</label>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                    </div>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                      <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- Input Group -->
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Input Group</h6>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                    aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                  </div>
                </div>
                <label for="basic-url">Your vanity URL</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                  </div>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">With textarea</span>
                  </div>
                  <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Dropdown</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div role="separator" class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with dropdown button">
                </div>
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

       <!-- Container Fluid-->
       {{-- @include('livewire.admin.gallery') --}}
       <!-- Container Fluid-->

      <!-- Footer -->
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
    <!---Container Fluid-->

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
  @stack('scripts')
  @livewireScripts
</body>

</html>
