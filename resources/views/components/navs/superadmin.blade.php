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
                    <span>Customers</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('customer.index') }}">All Customers</a></li>
                    <li><a href="{{ route('customer.create') }}">Create Customer</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="check-circle"></i>
                    <span>Inspector</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('customer.index') }}">All Inspectors</a></li>
                    <li><a href="{{ route('customer.create') }}">Create Inspector</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="check-square"></i>
                    <span>Inspector Admins</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('customer.index') }}">All Inspector Admins</a></li>
                    <li><a href="{{ route('customer.create') }}">Create Inspector Admin</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="radio"></i>
                    <span>Airports</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('airport.index') }}">All Airports</a></li>
                    <li><a href="{{ route('airport.create') }}">Create Airport</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="user-check"></i>
                    <span>Users</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('user.index') }}">All Users</a></li>
                    <li><a href="{{ route('user.create') }}">Create User</a></li>
                    <li><a href="{{ route('role.index') }}">View Roles</a></li>
                </ul>
            </li>
            <li class="sidebar-list">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="sidebar-link sidebar-title link-nav" href="route('logout')"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();"><i
                            data-feather="log-out"> </i><span>Logout</span></a>
                </form>
            </li>
        </ul>
    </div>
</nav>
