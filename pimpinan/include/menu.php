
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $user; ?></p>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
         
            <li>
              <a href="?page=newdata/newdata.php">
                <i class="fa fa-th"></i> <span>New Data</span>
              </a>
            </li>
             <li>
              <a href="?page=olddata/olddata.php">
                <i class="fa fa-th"></i> <span> Data</span>
              </a>
            </li>
         
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>