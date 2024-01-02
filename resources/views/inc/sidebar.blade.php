<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('b')}}/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rocker</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
        </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Permissions</div>
            </a>
            <ul>
                <li> <a href="{{route('b.permission.roles')}}" title="Roles"><i class='bx bx-radio-circle'></i>Roles</a></li>
                <li> <a href="{{route('b.permission.list')}}" title="Permissions"><i class='bx bx-radio-circle'></i>Permissions</a></li>
            </ul>
        </li>
        
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-users"></i>
                </div>
                <div class="menu-title">User Manage</div>
            </a>
            <ul>
                <li> <a href="{{route('b.users.list')}}" title="Users"><i class='bx bx-radio-circle'></i>Users</a></li>
                <li> <a href="{{route('b.users.create')}}" title="Create User"><i class='bx bx-radio-circle'></i>Create User</a></li>
            </ul>
        </li>

        <li class="menu-label">UI Elements</li>
        <li>
            <a href="">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Widgets</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->