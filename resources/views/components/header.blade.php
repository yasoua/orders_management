<nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">
{{--      @if(auth()->user()->role->name == 'admin')--}}

      <form class="search-form">
      <div class="input-group">
        <div class="input-group-text">
          <i data-feather="search"></i>
        </div>
        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
      </div>
    </form>
{{--      @endif--}}
{{--      @if(auth()->user()->role->name == 'customer')--}}
{{--          <div class="">--}}
{{--              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">--}}
{{--                  <line x1="12" y1="5" x2="12" y2="19"></line>--}}
{{--                  <line x1="5" y1="12" x2="19" y2="12"></line>--}}
{{--              </svg> New Order </div>--}}
{{--      @endif--}}
    <ul class="navbar-nav">
        <li class="nav-item d-flex">

            <a class="nav-link d-flex" href="{{route('order.create')}}"  role="button" >
                <i data-feather="plus"></i>
                <span class="ms-1 me-1 d-none d-md-inline-block">Order</span>
            </a>


        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{ url('assets/images/flags/us.svg') }}" class="wd-20 me-1" title="us" alt="us"> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="languageDropdown">
          <a href="javascript:;" class="dropdown-item py-2"> <img src="{{ url('assets/images/flags/us.svg') }}" class="wd-20 me-1" title="us" alt="us"> <span class="ms-1"> English </span></a>
          <a href="javascript:;" class="dropdown-item py-2"> <img src="{{ url('assets/images/flags/fr.svg') }}" class="wd-20 me-1" title="fr" alt="fr"> <span class="ms-1"> French </span></a>
          <a href="javascript:;" class="dropdown-item py-2"> <img src="{{ url('assets/images/flags/de.svg') }}" class="wd-20 me-1" title="de" alt="de"> <span class="ms-1"> German </span></a>
          <a href="javascript:;" class="dropdown-item py-2"> <img src="{{ url('assets/images/flags/pt.svg') }}" class="wd-20 me-1" title="pt" alt="pt"> <span class="ms-1"> Portuguese </span></a>
          <a href="javascript:;" class="dropdown-item py-2"> <img src="{{ url('assets/images/flags/es.svg') }}" class="wd-20 me-1" title="es" alt="es"> <span class="ms-1"> Spanish </span></a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="grid"></i>
        </a>
        <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
          <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
            <p class="mb-0 fw-bold">Web Apps</p>
            <a href="javascript:;" class="text-muted">Edit</a>
          </div>
          <div class="row g-0 p-1">
            <div class="col-3 text-center">
              <a href="{{ url('/apps/chat') }}" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i><p class="tx-12">Chat</p></a>
            </div>
            <div class="col-3 text-center">
              <a href="{{ url('/apps/calendar') }}" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i><p class="tx-12">Calendar</p></a>
            </div>
            <div class="col-3 text-center">
              <a href="{{ url('/email/inbox') }}" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i><p class="tx-12">Email</p></a>
            </div>
            <div class="col-3 text-center">
              <a href="{{ url('/general/profile') }}" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i><p class="tx-12">Profile</p></a>
            </div>
          </div>
          <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
            <a href="javascript:;">View all</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="mail"></i>
        </a>
        <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
          <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
            <p>9 New Messages</p>
            <a href="javascript:;" class="text-muted">Clear all</a>
          </div>
          <div class="p-1">
            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
              <div class="me-3">
                <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-4">
                  <p>Leonardo Payne</p>
                  <p class="tx-12 text-muted">Project status</p>
                </div>
                <p class="tx-12 text-muted">2 min ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
              <div class="me-3">
                <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-4">
                  <p>Carl Henson</p>
                  <p class="tx-12 text-muted">Client meeting</p>
                </div>
                <p class="tx-12 text-muted">30 min ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
              <div class="me-3">
                <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-4">
                  <p>Jensen Combs</p>
                  <p class="tx-12 text-muted">Project updates</p>
                </div>
                <p class="tx-12 text-muted">1 hrs ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
              <div class="me-3">
                <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-4">
                  <p>Amiah Burton</p>
                  <p class="tx-12 text-muted">Project deatline</p>
                </div>
                <p class="tx-12 text-muted">2 hrs ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
              <div class="me-3">
                <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-4">
                  <p>Yaretzi Mayo</p>
                  <p class="tx-12 text-muted">New record</p>
                </div>
                <p class="tx-12 text-muted">5 hrs ago</p>
              </div>
            </a>
          </div>
          <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
            <a href="javascript:;">View all</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="bell"></i>
          <div class="indicator">
            <div class="circle"></div>
          </div>
        </a>
        <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
          <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
            <p>6 New Notifications</p>
            <a href="javascript:;" class="text-muted">Clear all</a>
          </div>
          <div class="p-1">
            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
              <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                <i class="icon-sm text-white" data-feather="gift"></i>
              </div>
              <div class="flex-grow-1 me-2">
                <p>New Order Recieved</p>
                <p class="tx-12 text-muted">30 min ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
              <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                <i class="icon-sm text-white" data-feather="alert-circle"></i>
              </div>
              <div class="flex-grow-1 me-2">
                <p>Server Limit Reached!</p>
                <p class="tx-12 text-muted">1 hrs ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
              <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
              </div>
              <div class="flex-grow-1 me-2">
                <p>New customer registered</p>
                <p class="tx-12 text-muted">2 sec ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
              <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                <i class="icon-sm text-white" data-feather="layers"></i>
              </div>
              <div class="flex-grow-1 me-2">
                <p>Apps are ready for update</p>
                <p class="tx-12 text-muted">5 hrs ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
              <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                <i class="icon-sm text-white" data-feather="download"></i>
              </div>
              <div class="flex-grow-1 me-2">
                <p>Download completed</p>
                <p class="tx-12 text-muted">6 hrs ago</p>
              </div>
            </a>
          </div>
          <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
            <a href="javascript:;">View all</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
{{--          <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}" alt="profile">--}}
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </a>
        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
          <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
            <div class="mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
{{--              <img class="wd-80 ht-80 rounded-circle" src="{{ url('https://via.placeholder.com/80x80') }}" alt="">--}}
            </div>
            <div class="text-center">
              <p class="tx-16 fw-bolder">{{auth()->user()->name}}</p>
              <p class="tx-12 text-muted">{{auth()->user()->email}}</p>
            </div>
          </div>
          <ul class="list-unstyled p-1">
            <li class="dropdown-item py-2">
              <a href="{{ url('/general/profile') }}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="user"></i>
                <span>Profile</span>
              </a>
            </li>
            <li class="dropdown-item py-2">
              <a href="javascript:;" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="edit"></i>
                <span>Edit Profile</span>
              </a>
            </li>
            <li class="dropdown-item py-2">
              <a href="javascript:;" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="repeat"></i>
                <span>Switch User</span>
              </a>
            </li>
            <li class="dropdown-item py-2">
              <a  href="{{ route('logout') }}" class="text-body ms-0"
                  onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                <i class="me-2 icon-md" data-feather="log-out"></i>
                  {{ __('Logout') }}
              </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>
