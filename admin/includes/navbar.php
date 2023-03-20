<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      
      <h1>TOP1 RAFFLE</h1>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../image/<?php echo $user['photo']; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user['firstname'].' '.$user['lastname']; ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
     

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-gamepad"></i>
              <p>
              Slot Machine Manage
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="machine" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Machine Settings</p>
                </a>
              </li>
            </ul>

             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="winner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Winner List</p>
                </a>
              </li>
            </ul>
          </li>






          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                ACCOUNT SETTINGS
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#profile" data-toggle="modal"  id="admin_profile" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PROFILE SETTINGS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LOGOUT</p>
                </a>
              </li>
            
            </ul>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   <?php include 'includes/profilemodal.php'; ?>