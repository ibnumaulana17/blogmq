    @if (Auth::check())
      <!-- Sidebar user panel -->
      <div class="user-panel">
       
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
         <div class="pull-left image">
          <img src="{{ asset('ht.png') }}" class="img-circle" alt="User Image">
        </div>
      </div>
    @endif
      <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
          </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->




        <li class="treeview">
          <a href="#">
            <i class="fa fa-smile-o"></i>
            <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-caret-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('add_users') }}"><i class="fa fa-circle-o"></i> Add User </a></li>
            <li><a href="{{ route('list_users') }}"><i class="fa fa-circle-o"></i> List User </a></li>          
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class=" fa fa-smile-o "></i>
            <span>Jurusan</span>
            <span class="pull-right-container">
              <i class=" fa fa-caret-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('add_jurusan') }}"><i class="fa fa-circle-o"></i> Add Jurusan </a></li>
            <li><a href="{{ route('list_jurusan') }}"><i class="fa fa-circle-o"></i> List Jurusan </a></li>          
          </ul>
        </li>

      

      </ul>