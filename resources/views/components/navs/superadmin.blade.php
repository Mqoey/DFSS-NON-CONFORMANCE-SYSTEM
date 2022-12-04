<div class="deznav-scroll">
    <ul class="metismenu" id="menu">
        <li><a href="/" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-networking"></i>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-heart"></i>
                <span class="nav-text">Customers</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('customer.index') }}">All Customers</a></li>
                <li><a href="{{ route('customer.create') }}">Create Customer</a></li>
            </ul>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                <span class="nav-text">Inspectors</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('inspector.index') }}">All Inspectors</a></li>
                <li><a href="{{ route('inspector.create') }}">Create Inspector</a></li>
            </ul>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-controls-3"></i>
                <span class="nav-text">Inspector Admins</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('inspectoradmin.index') }}">All Inspector Admins</a></li>
                <li><a href="{{ route('inspectoradmin.create') }}">Create Inspector Admin</a></li>
            </ul>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-notepad"></i>
                <span class="nav-text">Non-Conformative</span>
            </a>
            <ul aria-expanded="false">
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('nonconformativeform.index') }}">All Forms</a></li>
                </ul>
            </ul>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-network"></i>
                <span class="nav-text">Users</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('user.index') }}">All Users</a></li>
                <li><a href="{{ route('role.index') }}">View Roles</a></li>
            </ul>
        </li>
    </ul>
</div>
