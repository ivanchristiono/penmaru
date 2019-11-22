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
            @role('member')
          <li class="{{(request()->is('member/events'))? 'active' : '' }}">
                <a class="menu-item" href="{{route('events.index')}}">Events</a>
            </li>
            <li class="{{(request()->is('member/schools'))? 'active' : '' }}">
                <a class="menu-item" href="{{route('schools.index')}}">Sekolah</a>
            </li>
            <li class="{{(request()->is('member/cities'))? 'active' : '' }}">
                <a class="menu-item" href="{{route('cities.index')}}">Kota</a>
            </li>
            @endrole
            @role('admin')
            <li>
                <a class="menu-item" href="dashboard-fitness.html">Member</a>
            </li>
            @endrole
          </ul>
        </li>
        
      </ul>
    </div>
  </div>

  @endif