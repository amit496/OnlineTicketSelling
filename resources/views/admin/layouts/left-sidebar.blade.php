<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center bg-logo">
            <a href="index.html" class="logo"><i class="mdi mdi-bowling text-success"></i> Zoogler</a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                {{-- <li class="menu-title">Main</li> --}}

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="dripicons-device-desktop"></i>
                        <span> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('category.index') }}" class="waves-effect"><i class="dripicons-to-do"></i><span>Category</span></a>
                </li>

                <li>
                    <a href="{{ route('setting.index') }}" class="waves-effect"><i class="ti-settings"></i><span>Setting</span></a>
                </li>




            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
