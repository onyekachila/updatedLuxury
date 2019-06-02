<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Stan</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
            <li class=""><a href="#"><i class="fa fa-circle-o"></i> Posts</a></li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Categories</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: block;">
                    <li><a href="{{ route('addcategory') }}"><i class="fa fa-circle-o"></i>Add Category</a></li>
                    <li><a href="{{ route('viewcategory') }}"><i class="fa fa-circle-o"></i>View All Category</a></li>
                </ul>
            </li>

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{ route('addproduct') }}"><i class="fa fa-circle-o"></i>Add Product</a></li>
            <li><a href="{{ route('allproduct') }}"><i class="fa fa-circle-o"></i>View Products</a></li>
          </ul>
        </li>



            <li class=""><a href="#"><i class="fa fa-circle-o"></i> Tags</a></li>
            <li class=""><a href="#"><i class="fa fa-circle-o"></i> Users</a></li>
        </li>




      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
