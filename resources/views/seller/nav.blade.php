

  {{-- users --}}

  <li class="active treeview">
      <a href="#">
        <i class="fa fa-users"></i> <span>Users control</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ url('/adminpanel/users/create')}}"><i class="fa fa-circle-o"></i> Add user</a></li>
        <li><a href="{{ url('/adminpanel/users')}}"><i class="fa fa-circle-o"></i> All users</a></li>
      </ul>
    </li>