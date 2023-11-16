<section class="sidebar">	
		
    <div class="user-profile">
        <div class="ulogo">
             <a href="{{ url("index.html") }}">
              <!-- logo for regular state and mobile devices -->
                 <div class="d-flex align-items-center justify-content-center">					 	
                      <img src="{{ asset("/backend/images/logo-db.png") }}" alt="" style="width: 200px">
                 </div>
            </a>
        </div>
    </div>
  
  <!-- sidebar menu-->
  <ul class="sidebar-menu" data-widget="tree">  
      
    <li>
      <a href="{{ route('dashboard') }}">
        <i data-feather="pie-chart"></i>
        <span>Dashboard</span>
      </a>
    </li>  
     
    <li class="header nav-small-cap">Users</li>
      
    <li class="treeview">
      <a href="{{ url("#") }}">
        <i data-feather="grid"></i>
        <span>Users Management</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('user.index') }}"><i class="ti-more"></i>Users</a></li>
        <li><a href="{{ url("components_badges.html") }}"><i class="ti-more"></i>Suppliers</a></li>
      </ul>
    </li>
    
    <li class="header nav-small-cap">EXTRA</li>		  
      
    <li class="treeview">
      <a href="{{ url("#") }}">
        <i data-feather="layers"></i>
        <span>Multilevel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url("#") }}">Level One</a></li>
        <li class="treeview">
          <a href="{{ url("#") }}">Level One
            <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url("#") }}">Level Two</a></li>
            <li class="treeview">
              <a href="{{ url("#") }}">Level Two
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url("#") }}">Level Three</a></li>
                <li><a href="{{ url("#") }}">Level Three</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="{{ url("#") }}">Level One</a></li>
      </ul>
    </li>  
      
    {{-- <li>
      <a href="{{ url("auth_login.html") }}">
        <i data-feather="lock"></i>
        <span>Log Out</span>
      </a>
    </li>  --}}
    
  </ul>
</section>