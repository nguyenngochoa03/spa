@extends('layout.main')
@section('content')

  <body class="navbar-fixed sidebar-fixed" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

  <!-- ====================================
  ——— WRAPPER
  ===================================== -->
  <div class="wrapper">


    <!-- ====================================
      ——— LEFT SIDEBAR WITH OUT FOOTER
    ===================================== -->
    <aside class="left-sidebar sidebar-dark" id="left-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="{{route('')}}">
            <img src="{{route('app/views/images/logo.png')}}" alt="Mono">
            <span class="brand-name">MONO</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="active">
              <a class="sidenav-item-link" href="{{route('')}}">
                <i class="mdi mdi-briefcase-account-outline"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li class="section-title">
              Apps
            </li>
            <li>
              <a class="sidenav-item-link" href="{{route('list-category')}}">
                <i class="mdi mdi-wechat"></i>
                <span class="nav-text">Category</span>
              </a>
            </li>
            <li>
              <a class="sidenav-item-link" href="{{route('list-product')}}">
                <i class="mdi mdi-phone"></i>
                <span class="nav-text">Product</span>
              </a>
            </li>
            <li>
              <a class="sidenav-item-link" href="{{route('list-account')}}">
                <i class="mdi mdi-account-group"></i>
                <span class="nav-text">Account</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="sidebar-footer">
          <div class="sidebar-footer-content">
            <ul class="d-flex">
              <li>
                <a href="{{route('account-setting')}}" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
              <li>
                <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </aside>



    <!-- ====================================
    ——— PAGE WRAPPER
    ===================================== -->
    <div class="page-wrapper">

      <!-- Header -->
      <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <span class="page-title">Account</span>
          <div class="navbar-right ">
            <!-- search form -->
            <div class="search-form">
              <form action="{{route('')}}" method="get">
                <div class="input-group input-group-sm" id="input-group-search">
                  <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
                  <div class="input-group-append">
                    <button class="btn" type="button">/</button>
                  </div>
                </div>
              </form>
              <ul class="dropdown-menu dropdown-menu-search">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('')}}">Morbi leo risus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('')}}">Dapibus ac facilisis in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('')}}">Porta ac consectetur ac</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('')}}">Vestibulum at eros</a>
                </li>
              </ul>
            </div>
            <ul class="nav navbar-nav">
              <!-- Offcanvas -->
              <li class="custom-dropdown">
                <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:" >
                  <i class="mdi mdi-contacts icon"></i>
                </a>
              </li>
              <li class="custom-dropdown">
                <button class="notify-toggler custom-dropdown-toggler">
                  <i class="mdi mdi-bell-outline icon"></i>
                  <span class="badge badge-xs rounded-circle">21</span>
                </button>
                <div class="dropdown-notify">
                  <header>
                    <div class="nav nav-underline" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="{{route('')}}" role="tab" aria-controls="nav-home"
                         aria-selected="true">All (5)</a>
                      <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="{{route('')}}" role="tab" aria-controls="nav-profile"
                         aria-selected="false">Msgs (4)</a>
                      <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="{{route('')}}" role="tab" aria-controls="nav-contact"
                         aria-selected="false">Others (3)</a>
                    </div>
                  </header>
                  <div class="" data-simplebar style="height: 325px;">
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">
                        <div class="media media-sm bg-warning-10 p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="{{route('')}}">
                              <img src="{{route('app/views/images/user/user-sm-02.jpg')}}" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="{{route('')}}">
                              <span class="title mb-0">Nguyen Van Thanh</span>
                              <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                              <span class="time">
                                    <time>Just now</time>...
                                  </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">
                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-01.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">Selena Wagner</span>
                              <span class="discribe">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                              <span class="time">
                                    <time>15 min ago</time>...
                                  </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="{{route('app/views/images/user/user-xs-01.jpg')}}" class="user-image rounded-circle" alt="User Image" />
                  <span class="d-none d-lg-inline-block">Nguyen Van Thanh</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a class="dropdown-link-item" href="{{route('account-setting')}}">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">My Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-footer">
                    <a class="dropdown-link-item" href="{{route('sign-out')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- ====================================
      ——— CONTENT WRAPPER
      ===================================== -->
      <div class="content-wrapper">
        <div class="content"><!-- For Components documentaion -->

          <!-- Products Inventory -->
          <div class="card card-default">
            <div class="card-header">
              <h2>Accounts Edit</h2>
              <a href="{{route('list-account')}}"><button type="button" class="btn btn-sm btn-outline-primary">RETURN</button></a>
            </div>
            <div class="card-body">
              <div class="collapse" id="collapse-data-tables">

              </div>
              {{--            ERROR--}}
              @if(isset($_SESSION['errors']) && isset($_GET['msg']))
                <ul>
                  @foreach($_SESSION['errors'] as $er)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Warning! </strong>{{$er}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                  @endforeach
                </ul>
              @endif
              {{--            SUCCESS--}}
              @if(isset($_SESSION['success']) && isset($_GET['msg']))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success! </strong>Cập nhật thành công.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
              @endif

              <form action="{{route('update-account-post/'.$account->id)}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Name</label>
                  <input type="text" name="name_ac" value="{{$account->fullname}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email</label>
                  <input type="email" name="email_ac" value="{{$account->email}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Password</label>
                  <input type="text" name="password_ac" value="{{$account->password}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Address</label>
                  <input type="text" name="address_ac" value="{{$account->address}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Phone</label>
                  <input type="number" name="phone_ac" value="{{$account->phone}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect12">Role</label>
                  <select class="form-control" name="role_ac" id="exampleFormControlSelect12">
                    <option value="0" <?php echo $account->role == 0 ? 'selected' : ''?> >Client</option>
                    <option value="1" <?php echo $account->role == 1 ? 'selected' : ''?> >Admin</option>
                  </select>
                </div>
                <div class="form-footer mt-6">
                  <input type="submit" name="update" class="btn btn-primary btn-pill" value="Submit">
                  <input type="reset" class="btn btn-light btn-pill" value="Reset">
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer -->
      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <p>
            &copy; <span id="copy-year"></span> Copyright Template by <a class="text-primary" href="https://www.facebook.com/vanthanh1108" target="_blank" >Nguyen Van Thanh</a>.
          </p>
        </div>
        <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
        </script>
      </footer>

    </div>
  </div>

  <!-- Card Offcanvas -->
  <div class="card card-offcanvas" id="contact-off" >
    <div class="card-header">
      <h2>Contacts</h2>
      <a href="{{route('add-account')}}" class="btn btn-primary btn-pill px-4">Add New</a>
    </div>
    <div class="card-body">
      <div class="mb-4">
        <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="Search contacts...">
      </div>
      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="{{route('')}}">
            <img src="{{route('app/views/images/user/user-sm-01.jpg')}}" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="{{route('')}}">
            <span class="title">Nguyen Van Thanh</span>
            <span class="discribe">Developer</span>
          </a>
        </div>
      </div>
    </div>
  </div>




  <script src="{{route('app/views/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{route('app/views/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{route('app/views/plugins/simplebar/simplebar.min.js')}}"></script>
  <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



  <script src="{{route('app/views/'.'plugins/prism/prism.js')}}"></script>



  <script src="{{route('app/views/'.'plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>



  <script src="{{route('app/views/'.'plugins/apexcharts/apexcharts.js')}}"></script>


  <script src="{{route('app/views/js/mono.js')}}"></script>
  <script src="{{route('app/views/js/chart.js')}}"></script>
  <script src="{{route('app/views/js/map.js')}}"></script>
  <script src="{{route('app/views/js/custom.js')}}"></script>




  <!--  -->


  </body>
@endsection

