<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
      <img src="{{ asset('assets') }}/img/logoGB.png" alt class="w-px-150 h-auto" />

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    
    <li class="menu-header small text-uppercase"><span class="menu-header-text">DATA</span></li>
    <li class="menu-item">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="{{ route('service.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-wrench"></i>
          <div data-i18n="Analytics">Services</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('customer.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user-detail"></i>
          <div data-i18n="Tables">Customers</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('vehicle.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-car"></i>
          <div data-i18n="Tables">Vehicles</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('mechanic.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user"></i>
          <div data-i18n="Tables">Mechanics</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('users.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user"></i>
          <div data-i18n="Analytics">Users</div>
        </a>
      </li>
    </li>
  </ul>
</aside>
<!-- / Menu -->