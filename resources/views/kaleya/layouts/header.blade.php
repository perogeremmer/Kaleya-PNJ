<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Kalender</b>Budaya</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
            </a>
          </li>
        <!-- Messages: style can be found in dropdown.less-->
        
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs"> {{ \Illuminate\Support\Facades\Session::get('name') }}
            </span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <p>
                 {{ \Illuminate\Support\Facades\Session::get('name') }} - KALEYA
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <!-- Menu Body -->
            
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-right">
             {{--  @if(Auth::guest()) --}}
             <a href="/logout">Logout</a>
                        {{-- @else
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        @endif --}}
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
              </ul>
            </div>
          </nav>
        </header>