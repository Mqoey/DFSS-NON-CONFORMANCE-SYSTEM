<nav class="sidebar-main">
    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
    <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn">
                <a href="/">
                    <img class="img-fluid" src="../assets/images/logo-icon.png" alt="">
                </a>
                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true">
                    </i></div>
            </li>
            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="/">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="users"></i>
                    <span>Users</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('user.index') }}">All Users</a></li>
                    <li><a href="{{ route('user.create') }}">Create User</a></li>
                    <li><a href="{{ route('role.index') }}">View Roles</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
