<div class="header navbar">
  <div class="header-container">
    <ul class="nav-left">
      <li>
        <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a>
      </li>
      <li class="search-input"><input class="form-control" type="text" placeholder="Search..." /></li>
    </ul>
    <ul class="nav-right">
      <li class="dropdown">
        <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
          <div class="peer mR-10"><img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="" /></div>
          <div class="peer"><span class="fsz-sm c-grey-900">{{ Auth::user()->name }}</span></div>
        </a>
        <ul class="dropdown-menu fsz-sm">
          <li>
            <a href="{{ route('logout') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="ti-power-off mR-10"></i>
              <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
