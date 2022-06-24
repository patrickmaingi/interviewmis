<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!--<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                @if(!empty(Auth::user()->photo))
                    <img class="user-image img-circle elevation-2"
                         src="{{asset('storage/uploads/'.Auth::user()->photo)}}"
                         alt="User Image">
                @else
                    <img class="user-image img-circle elevation-2"
                         src="{{asset('assets/img/AdminLTELogo.png')}}"
                         alt="User profile picture">
                @endif
                <span class="d-none d-md-inline">PATRICK MAINGI</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    @if(!empty(Auth::user()->photo))
                        <img class="user-image img-circle elevation-2"
                        src="{{asset('assets/img/AdminLTELogo.png'.Auth::user()->photo)}}"
                             alt="User Image">
                    @else
                        <img class="user-image img-circle elevation-2"
                             src="{{asset('assets/img/AdminLTELogo.png')}}"
                             alt="User profile picture">
                    @endif
                    <p>
                        PATRICK MAINGI
                        <small></small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="{{url('user/profile')}}"
                       class="btn btn-default btn-flat">
                       {{trans_choice('Profile',1)}}
                    </a>
                    <a href="#" onclick="logout()" class="btn btn-default btn-flat float-right">
                       {{trans_choice('Logout',1)}}
                    </a>
                    <form action="{{url('logout')}}" method="post" id="logout_form">
                        {{csrf_field()}}
                    </form>
                    <script>function logout() {
                            $("#logout_form").submit();
                        }</script>
                </li>
            </ul>
        </li>
    </ul>
  </nav>