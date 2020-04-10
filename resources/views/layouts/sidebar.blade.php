<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset("/bower_components/admin-lte/dist/img/avatar5.png") }}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      {{--<li class="header">HEADER</li>--}}
      <li><a href="/admin"><span>Dashboard</span></a></li>
      <!-- Optionally, you can add icons to the links -->

      <li class="treeview">
        <a href="#"><span>Members</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{route('admin.members.index')}}">All members</a></li>
          <li><a href="{{route('admin.members.create')}}">Create new member</a></li>
          <li><a href="#">Expired members</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><span>Packages</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{route('admin.packages.index')}}">All Packages</a></li>
          <li><a href="{{route('admin.packages.create')}}">Create new packages</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><span>Payments</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{route('admin.payments.index')}}">All Payments</a></li>
          <li><a href="{{route('admin.payments.create')}}">Create new payments</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><span>Admin users</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{route('admin.users.index')}}">All users</a></li>
          <li><a href="{{route('admin.users.create')}}">Create user</a></li>
        </ul>
      </li>
      {{--<li><a href="#"><span>Lorem ipsum</span></a></li>--}}
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>