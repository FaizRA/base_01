<div class="logo">
    <a href="{{route('admin_dashboard')}}" class="simple-text logo-normal">
        <img src="{{URL::asset('img/logo/2.png')}}" alt="">
    </a>
</div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link sidebar_menu_dashboard" href="{{route('admin_dashboard')}}">
                <i class="material-icons">dashboard</i>
                <p>Beranda</p>
            </a>
        </li>

        <li class="nav-item cursor-pointer sidebard_parent_menu parent_of_group_setting" data-parent_name="setting" data-state="0">
            <a class="nav-link">
                <i class="material-icons">settings</i>
                <p>Pengaturan</p>
                <div class="indicator"></div>
            </a>
        </li>
        <li class="nav-item sidebard_child_menu child_menu_of_setting" data-parent_name="setting">
            <a class="nav-link sidebar_menu_pickup_address" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                <p>App</p>
            </a>
        </li>


        <li class="nav-item hide-sidebar-button cursor-pointer">
            <a class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="12" x2="20" y2="12" /><line x1="10" y1="12" x2="14" y2="16" /><line x1="10" y1="12" x2="14" y2="8" /><line x1="4" y1="4" x2="4" y2="20" /></svg>
                <p>Hide Sidebar</p>
            </a>
        </li>
    </ul>
</div>
