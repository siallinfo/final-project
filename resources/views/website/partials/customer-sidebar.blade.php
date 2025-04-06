<nav class="col-md-4 col-lg-3 d-md-block sidebar h-100 vh-100">
    <div class="position-sticky pt-3 ps-3">
        <div class="profile-photo text-center">
            <img src="{{ asset($customer->image ?? 'website/assets/img/default-avatar.png') }}" alt="Customer Photo">
        </div>
        <div class="py-3 text-center">
            <h5 class="text-dark"><b>{{$customer->name}}</b></h5>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('customer.dashboard') ? 'active' : '' }}"
                   href="{{ route('customer.dashboard') }}">
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('customer.profile') ? 'active' : '' }}"
                   href="{{ route('customer.profile') }}">
                    <i class="fas fa-user"></i> Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('customer.order') ? 'active' : '' }}"
                   href="{{ route('customer.order') }}">
                    <i class="fas fa-shopping-cart"></i> Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('customer.password.change') ? 'active' : '' }}"
                   href="{{ route('customer.password.change') }}">
                    <i class="fas fa-lock"></i> Change Password
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('customer.order') ? 'active' : '' }}"
                   href="{{ route('customer.order') }}">
                    <i class="fas fa-cog"></i> Setting
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="{{ route('customer.logout') }}">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
