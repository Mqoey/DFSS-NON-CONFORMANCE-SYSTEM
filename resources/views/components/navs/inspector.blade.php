<div class="deznav-scroll">
    <ul class="metismenu" id="menu">
        <li><a href="/" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-networking"></i>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-notepad"></i>
                <span class="nav-text">Non-Conformative</span>
            </a>
            <ul aria-expanded="false">
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('inspectornonconformativeform.index') }}"> All Forms </a></li>
                    <li><a href="{{ route('inspectornonconformativeform.create') }}"> Raise </a></li>
                </ul>
            </ul>
        </li>
    </ul>
</div>


