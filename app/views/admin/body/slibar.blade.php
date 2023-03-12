<div class="sidebar-wrapper">
  <div class="sidebar sidebar-collapse" id="sidebar">
    <div class="sidebar__menu-group">
      <ul class="sidebar_nav">
        <li class="">
          <a href="{{ route('quan-li-khach-hang') }}">
            <span class="nav-icon uil uil-clipboard-notes"></span>
            <span class="menu-text">Quản lí khách hàng</span>
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
            <li class="">
              <a href="{{route('service-blog')}}">Bài viết theo danh mục</a>
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
            <li class="">
              <a href="{{route('instagram')}}">instagram</a>
            </li>
          </ul>
        </li>
        <li class="has-child">
          <a href="#" class="">
            <span class="nav-icon uil uil-table"></span>
            <span class="menu-text">Quản lí người dùng</span>
            <span class="toggle-icon"></span>
          </a>
          <ul>
            <li class="">
              <a href="{{route('user')}}">Người Dùng</a>
            </li>
          </ul>
        <li class="">
          <a href="{{route('questions')}}">
            <span class="nav-icon uil uil-clipboard-notes"></span>
            <span class="menu-text">Câu hỏi thường gặp</span>
          </a>
        </li>
        </ul>
    </div>
  </div>
</div>
