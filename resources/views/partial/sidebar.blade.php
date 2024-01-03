<div class="sidebar">
  <button class="sidebar__close">
    <svg class="icon icon-close">
      <use xlink:href="#icon-close"></use>
    </svg>
  </button><a class="sidebar__logo" href="index-2.html"><img class="some-icon" src="{{asset('img/logo-dark.png')}}"
      alt="Core"><img class="some-icon-dark" src="{{asset('img/logo-light.png')}}" alt="Core"></a>
  <div class="sidebar__menu"><a class="sidebar__item {{ request()->routeIs('home') ? 'active' : '' }}"
      href="{{route('home')}}">
      <svg class="icon icon-home">
        <use xlink:href="#icon-home"></use>
      </svg>Home</a>
    <div class="sidebar__item sidebar__item_dropdown wide {{ request()->routeIs('projects.*') ? 'active' : '' }}">
      <div class="sidebar__top">
        <button class="sidebar__head">
          <svg class="icon icon-diamond">
            <use xlink:href="#icon-diamond"></use>
          </svg>Projects
          <svg class="icon icon-arrow-down">
            <use xlink:href="#icon-arrow-down"></use>
          </svg>
        </button><a class="sidebar__add  {{ request()->routeIs('projects.create') ? 'active' : '' }}"
          href="{{route('projects.create')}}">
          <svg class="icon icon-plus">
            <use xlink:href="#icon-plus"></use>
          </svg></a>
      </div>
      <div class="sidebar__body"><a class="sidebar__link" href="products-dashboard.html">Traffic Report
          <svg class="icon icon-arrow-next">
            <use xlink:href="#icon-arrow-next"></use>
          </svg></a><a class="sidebar__link {{ request()->routeIs('projects.under_development') ? 'active' : '' }}"
          href="{{route('projects.under_development')}}">Under Development
          <svg class="icon icon-arrow-next">
            <use xlink:href="#icon-arrow-next"></use>
          </svg>
          <div class="sidebar__counter" style="background-color: #FFBC99">5</div>
        </a><a class="sidebar__link" href="products-released.html">Launched
          <svg class="icon icon-arrow-next">
            <use xlink:href="#icon-arrow-next"></use>
          </svg>
          <div class="sidebar__counter" style="background-color: #B5E4CA">10</div>
        </a></div>
    </div>
    <div class="sidebar__item sidebar__item_dropdown wide  {{ strpos(request()->url(), 'overview') !== false ? 'active' : '' }}">
      <button class="sidebar__head">
        <svg class="icon icon-profile-circle">
          <use xlink:href="#icon-profile-circle"></use>
        </svg>Staffs
        <svg class="icon icon-arrow-down">
          <use xlink:href="#icon-arrow-down"></use>
        </svg>
      </button>
      <div class="sidebar__body">
        <a class="sidebar__link  {{ request()->routeIs('overview.index') ? 'active' : ''}}" href="{{route('overview.index')}}">Overview
         
        </a>
          <a class="sidebar__link {{request()->routeIs('overview.create') ? 'active' : ''}}" href="{{route('overview.create')}}">Staffs list
         </a>
        <a class="sidebar__link {{request()->routeIs('overview.traffic') ? 'active' : ''}}" href="{{route('overview.traffic')}}">Affiliate Traffic
          </a>
        <a class="sidebar__link {{request()->routeIs('overview.status') ? 'active' : ''}}" href="{{route('overview.status')}}">Salary claim status
          </a>
      </div>
    </div>

    <div
      class="sidebar__item sidebar__item_dropdown wide {{ strpos(request()->url(), 'expenses') !== false ? 'active' : '' }}">
      <button class="sidebar__head">
        <svg class="icon icon-pie-chart">
          <use xlink:href="#icon-pie-chart"></use>
        </svg>Expenses
        <svg class="icon icon-arrow-down">
          <use xlink:href="#icon-arrow-down"></use>
        </svg>
      </button>
      <div class="sidebar__body">
        <a class="sidebar__link {{ request()->routeIs('overview.index') ? 'active' : '' }}"  href="{{route('overview.index')}}">Overview
         </a>
        <a class="sidebar__link {{ request()->routeIs('server.index') ? 'active' : '' }}"
          href="{{route('server.index')}}">Hosting Server

        </a>
        <a class="sidebar__link {{ request()->routeIs('apiServer.index') ? 'active' : '' }}"
          href="{{route('apiServer.index')}}">Api
        </a>
        <a class="sidebar__link {{ request()->routeIs('adsPay.index') ? 'active' : '' }}"
          href="{{route('adsPay.index')}}">Ads Pay
        </a>
        <a class="sidebar__link {{ request()->routeIs('theme.index') ? 'active' : '' }}"
          href="{{route('theme.index')}}">Theme
        </a>
        <a class="sidebar__link {{ request()->routeIs('plugin.index') ? 'active' : '' }}"
          href="{{route('plugin.index')}}">Plugin

        </a>
        <a class="sidebar__link {{ request()->routeIs('software.index') ? 'active' : '' }}"
          href="{{route('software.index')}}">Software
        </a>
      </div>
    </div><a class="sidebar__item" href="promote.html">
      <svg class="icon icon-promotion">
        <use xlink:href="#icon-promotion"></use>
      </svg>Summary</a>
  </div>
  <button class="sidebar__toggle">
    <svg class="icon icon-arrow-right">
      <use xlink:href="#icon-arrow-right"></use>
    </svg>
    <svg class="icon icon-close">
      <use xlink:href="#icon-close"></use>
    </svg>
  </button>
  <div class="sidebar__foot">
    <button class="sidebar__help">
      <svg class="icon icon-help">
        <use xlink:href="#icon-help"></use>
      </svg>Help & getting started
      <div class="sidebar__counter">8</div>
    </button>
    <label class="theme js-theme">
      <input class="theme__input" type="checkbox" /><span class="theme__inner"><span class="theme__box">
          <svg class="icon icon-sun">
            <use xlink:href="#icon-sun"></use>
          </svg>Light</span><span class="theme__box">
          <svg class="icon icon-moon">
            <use xlink:href="#icon-moon"></use>
          </svg>Dark</span></span>
    </label>
  </div>
</div>