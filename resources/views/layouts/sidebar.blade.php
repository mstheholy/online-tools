<div class="sidebar">
  <nav class="mt-3">
    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="../widgets.html" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Home
          </p>
        </a>
      </li>

      @foreach(\App\Models\Menu::all() as $key => $menu)
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon {{ $menu['icon'] }} fa-fw"></i>
          <p>
            {{ $menu["name"] }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          @foreach($menu->menu_item as $item)
          <li class="nav-item">
            <a href="{{ url('tool/'. Str::slug($menu['name']) . '/' . Str::slug($item['name'])) }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                {{ $item["name"] }}
              </p>
            </a>
          </li>
          @endforeach
        </ul>
      </li>
      @endforeach
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>