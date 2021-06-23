<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link text-center">
    <h3 class="brand-text mb-0">CMS <sup> <small class="text-danger"> © Nghia23d </small></sup> </h3>
  </a>
  <div
    class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
    <div class="os-resize-observer-host observed">
      <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
    </div>
    <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
      <div class="os-resize-observer"></div>
    </div>
    <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 664px;"></div>
    <div class="os-padding">
      <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="https://app.renseo.vn/themes/rsolution/img/avatar/8.png" style="width: 65px"
                class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info align-self-center">
              <a href="#" class="d-block">Admin</a>
            </div>
          </div>
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a a href="{{ route('cms.slider.index') }}"
                      class="nav-link {{ Request::is('cms/slider*') ? 'active' : '' }}">
                      <i class="nav-icon far fa-image"></i>
                      <p>
                     Slider
                      </p>
                    </a>
                  </li>
              <li class="nav-item">
                <a a href="{{ route('cms.blog.index') }}"
                  class="nav-link {{ Request::is('cms/blog*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Quản lý bài viết
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a a href="{{ route('cms.review.index') }}"
                  class="nav-link {{ Request::is('cms/review*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Quản lý đánh giá người dùng
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a a href="{{ route('cms.question_ask.index') }}"
                  class="nav-link {{ Request::is('cms/question_ask*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Quản lý câu hỏi thường gặp
                  </p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
      <div class="os-scrollbar-track">
        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
      </div>
    </div>
    <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
      <div class="os-scrollbar-track">
        <div class="os-scrollbar-handle" style="height: 52.8617%; transform: translate(0px, 0px);"></div>
      </div>
    </div>
    <div class="os-scrollbar-corner"></div>
  </div>
</aside>
