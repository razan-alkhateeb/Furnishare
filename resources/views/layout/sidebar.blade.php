<header>

    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white" style="margin-right:500px">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">

                <div class="col-2 ml-4 mb-3" >

                    <a href="{{ route('home') }}" class="logo m-0 float-start text-white"><img
                            src="{{ asset('assets/img/furnishareblack.png') }}" alt=""
                            width="120"></a>
                </div>


          <a href="{{ route('profile') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('profile') ? 'active' : '' }}">
            <i class="fas fa-chart-area fa-fw me-3 "></i><span>Profile</span>
          </a>
          <a href="{{ route('Donation') }} "class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('Donation') ? 'active' : '' }}"
            ><i class="fas fa-lock fa-fw me-3"></i><span>Financials</span></a
          >
          <a href="{{ route('Service') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('Service') ? 'active' : '' }}"
            ><i class="fas fa-chart-line fa-fw me-3"></i><span>Services</span></a
          >
          <a href="{{ route('Item') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('Item') ? 'active' : '' }}">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>Items</span>
          </a>
        </div>
      </div>
    </nav>

  </header>
