<nav class="navbar navbar-static-top pl-30">
    <!-- Sidebar toggle button-->
    <div>
        <ul class="nav">
          <li class="btn-group nav-item">
              <a href="{{ url("#") }}" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
                  <i class="nav-link-icon mdi mdi-menu"></i>
              </a>
          </li>
          <li class="btn-group nav-item">
              <a href="{{ url("#") }}" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
                  <i class="nav-link-icon mdi mdi-crop-free"></i>
              </a>
          </li>			
          <li class="btn-group nav-item d-none d-xl-inline-block">
              <a href="{{ url("#") }}" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
                  <i class="ti-check-box"></i>
              </a>
          </li>
          <li class="btn-group nav-item d-none d-xl-inline-block">
              <a href="{{ url("calendar.html") }}" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
                  <i class="ti-calendar"></i>
              </a>
          </li>
        </ul>
    </div>
      
    <div class="navbar-custom-menu r-side">
      <ul class="nav navbar-nav">
        <!-- full Screen -->
        {{-- <li class="search-bar">		  
            <div class="lookup lookup-circle lookup-right">
               <input type="text" name="s">
            </div>
        </li>			 --}}
        
        <!-- User Account-->
        <li class="dropdown user user-menu">	
          <a href="{{ url("#") }}" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
              <img src="{{ asset("/backend/images/avatar/avatar.png") }}" alt="">
          </a>
          <ul class="dropdown-menu animated flipInX">
            <li class="user-body">
               <a class="dropdown-item" href="{{ url("#") }}"><i class="ti-user text-muted mr-2"></i>@if (Auth::check())
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                @endif
                </a>
               <a class="dropdown-item" href="{{ url("#") }}"><i class="ti-email text-muted mr-2"></i>@if (Auth::check())
                <span class="hidden-xs">{{ Auth::user()->email }}</span>
                @endif
                </a>
               <div class="dropdown-divider"></div>
               <form action="{{ route('logout') }}" method="post">
                @csrf
               <button type="submit" class="dropdown-item " style="width: 95%"><i class="ti-lock text-muted mr-2"></i> Logout</in>
            </form>
            </li>
          </ul>
        </li>	
          
      </ul>
    </div>
  </nav>