@include('layout.header')

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <div class="row justify-content-md-center">
        <img src="/img/avatar.png" alt="SAS-backend"  style=" width:5vh;  object-fit: cover; object-position: 50% 100%;" >
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="row user-panel mt-5 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/user2-160x160.jpg" class="img-circle elevation-2" alt="SAS-backend">
        </div>
        <div class="info">
         <a href="/user/edit/{{Auth::user()->id}}" class="d-block">
            {{ Auth::user()->name }}
         </a>
         <a href="/logout" >
            <i class="fas fa-sign-out-alt"></i> 
         </a>
       </div>
      </div>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Store
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/store/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New store</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/store/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List store</p>
                </a>
              </li>              
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dog"></i>
              <p>
                Book
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/book/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New book</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/book/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List book</p>
                </a>
              </li>              
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
