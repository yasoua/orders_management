<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{route('dashboard')}}" class="sidebar-brand fs-3">
            Orders<span class="fs-6">Management</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item {{-- {{ active_class(['/']) }} --}}">
                <a href="{{route('dashboard')}}" class="nav-link">
                    <i class="link-icon"  data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Order Management</li>
            <li class="nav-item {{-- {{ active_class(['/']) }} --}}">
                <a href="{{route('order.index')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Orders</span>
                </a>
            </li>
            @if(auth()->user()->role->name == 'admin')
            <li class="nav-item nav-category">Customer Management</li>
            <li class="nav-item {{-- {{ active_class(['/']) }} --}}">
                <a href="{{route('customer.index')}}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Customers</span>
                </a>
            </li>

            <li class="nav-item {{-- {{ active_class(['/']) }} --}}">
                <a href="{{route('customer.create')}}" class="nav-link">
                    <i class="link-icon" data-feather="user-plus"></i>
                    <span class="link-title">Register New Customer</span>
                </a>
            </li>
            @endif

        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Version:</h6>
            <a class="theme-item " href="{{route('dashboard')}}">
                <img src="{{-- {{ url('assets/images/screenshots/light.jpg') }} --}}" alt="light version">
            </a>
            <h6 class="text-muted mb-2">Dark Version:</h6>
            <a class="theme-item active" href="{{route('dashboard')}}">
                <img src="{{-- {{ url('assets/images/screenshots/dark.jpg') }} --}}" alt="light version">
            </a>
        </div>
    </div>
</nav>
