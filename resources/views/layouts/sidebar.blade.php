@if(Auth::guest())

@else

<!-- MENU LEFT SIDEBAR -->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header">
          <span></span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
          data-original-title="General"></i>
        </li>
        <li class=" nav-item"><a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span><span class="badge badge badge-primary badge-pill float-right mr-2">3</span></a>
          <ul class="menu-content">
            <li>
                <a class="menu-item" href="{{route('events.index')}}">Events</a>
            </li>
            <li class="active">
                <a class="menu-item" href="dashboard-analytics.html">Sekolah</a>
            </li>
            <li>
                <a class="menu-item" href="dashboard-fitness.html">Kota</a>
            </li>
            <li>
                <a class="menu-item" href="dashboard-fitness.html">Member</a>
            </li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>

  @endif