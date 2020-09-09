 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
 <aside class="app-sidebar">
   <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
     <div>
       <p class="app-sidebar__user-name">John Doe</p>
       <p class="app-sidebar__user-designation">Frontend Developer</p>
     </div>
   </div>
   <ul class="app-menu">
     <li><a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
     <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
       <i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">
         Category
        </span><i class="treeview-indicator fa fa-angle-right"></i></a>
       <ul class="treeview-menu">
         <li>
           <a class="treeview-item" href="{{route('admin.category.create')}}"><i class="icon fa fa-circle-o"></i>
            Create
           </a>
        </li>
        <li>
          <a class="treeview-item" href="{{route('admin.category.index')}}"><i class="icon fa fa-circle-o"></i>
           Manage
          </a>
       </li>
       </ul>
     </li>



     <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
      <i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">
        Post
       </span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="{{route('admin.post.create')}}"><i class="icon fa fa-circle-o"></i>
           Create
          </a>
       </li>
       <li>
         <a class="treeview-item" href="{{route('admin.post.index')}}"><i class="icon fa fa-circle-o"></i>
          Manage
         </a>
      </li>
      </ul>
    </li>

    <li><a class="app-menu__item" href="{{route('admin.post.login')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Login</span></a></li>


     <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>
    
   </ul>
 </aside>