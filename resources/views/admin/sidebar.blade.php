<div class="sidebar">
  <div class="sidebar-inner">
    <div class="sidebar-logo">
      <div class="peers ai-c fxw-nw">
        <div class="peer peer-greed">
          <a class="sidebar-link td-n" href="index.html">
            <div class="peers ai-c fxw-nw">
              <div class="peer">
                <div class="logo"><img style="width: 70%" src="{{ asset('assets/static/images/logo.png') }}" alt="" /></div>
              </div>
              <div class="peer peer-greed">
                <h5 class="lh-1 mB-0 logo-text">SMPN 1 Cikarang Selatan</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="peer">
          <div class="mobile-toggle sidebar-toggle">
            <a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a>
          </div>
        </div>
      </div>
    </div>
    <ul class="sidebar-menu scrollable pos-r">
      <li class="nav-item mT-30 active">
        <a class="sidebar-link" href="{{ route('admin') }}"><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="sidebar-link" href="{{ route('pendaftar') }}"><span class="icon-holder"><i class="c-orange-500 ti-layout-list-thumb"></i> </span><span class="title">Pendaftar</span> </a>
      </li>
      <li class="nav-item">
        <a class="sidebar-link" href="{{ route('user') }}"><span class="icon-holder"><i class="c-green-500 ti-user"></i> </span><span class="title">User</span> </a>
      </li>
      <li class="nav-item">
        <a class="sidebar-link" href="{{ route('setting') }}"><span class="icon-holder"><i class="c-purple-500 ti-settings"></i> </span><span class="title">Setting</span> </a>
      </li>
      <li class="nav-item">
        <a class="sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="icon-holder"><i class="c-red-500 ti-power-off"></i> </span><span class="title">Logout</span>
        </a>
      </li>
    </ul>
  </div>
</div>
