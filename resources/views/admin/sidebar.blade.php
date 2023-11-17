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
        <i data-feather="users"></i>
        <span>Users Management</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('user.index') }}"><i class="ti-user"></i>Users</a></li>
        <li><a href="{{ route('supplier.index') }}"><i class="ti-truck"></i>Suppliers</a></li>
      </ul>
    </li>
    
    <li class="header nav-small-cap">Products</li> 
    <li class="treeview">
      <a href="{{ url("#") }}">
        <i data-feather="box"></i>
        <span>Products</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-cutlery"></i>Food & drink</a></li>
        <li><a href="#"><i class="fa fa-mortar-board"></i>Uniform</a></li>
      </ul>
    </li>

      
    <li>
      <a href="{{ route('logout') }}">
        <i data-feather="lock"></i>
        <span>Log Out</span>
      </a>
    </li> 
    
  </ul>
</section>