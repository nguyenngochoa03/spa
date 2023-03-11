<div class="sidebar-wrapper">
  <div class="sidebar sidebar-collapse" id="sidebar">
    <div class="sidebar__menu-group">
      <ul class="sidebar_nav">
        <li class="">
          <a href="note.html">
            <span class="nav-icon uil uil-clipboard-notes"></span>
            <span class="menu-text">Trang chủ</span>
          </a>
        </li>
        <li class="has-child">
          <a href="#" class="">
            <span class="nav-icon uil uil-table"></span>
            <span class="menu-text">Quản lí dịch vụ</span>
            <span class="toggle-icon"></span>
          </a>
          <ul>
            <li class="">
              <a href="{{route('service-category')}}">Danh mục dịch vụ</a>
            </li>
            <li class="">
              <a href="{{route('service-list')}}">Dịch vụ</a>
            </li>
          </ul>
        </li>
        <li class="has-child">
          <a href="#" class="">
            <span class="nav-icon uil uil-table"></span>
            <span class="menu-text">Quản lí giao diện</span>
            <span class="toggle-icon"></span>
          </a>
          <ul>
            <li class="">
              <a href="{{route('contact-us')}}">Contact Us</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
