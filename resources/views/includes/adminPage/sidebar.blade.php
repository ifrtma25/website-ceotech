<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile d-flex no-block dropdown m-t-20">
                        <div class="user-pic"><img src="{{ asset('assets/admin/assets/images/users/1.jpg') }}"
                                alt="users" class="rounded-circle" width="40" /></div>
                        <div class="user-content hide-menu m-l-10">
                            <a href="javascript:void(0)" class="" id="Userdd" role="button"
                                data-toggle="dropdown" aria-haspopup="true">
                                <h5 class="m-b-0 user-name font-medium">{{ Auth::user()->name }}<i
                                        class="fa fa-angle-down"></i>
                                </h5>
                                <span class="op-5 user-email">{{ Auth::user()->email }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <i class="ti-arrow-right m-r-5 m-l-5"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                {{-- <li class="p-15 m-t-10"><a href="javascript:void(0)"
                        class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i
                            class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Create New</span>
                    </a>
                </li> --}}
                <!-- User Profile-->
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard_admin') }}">
                        <i class="fa fa-home"></i><span class="">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('member_admin') }}">
                        <i class="fa fa-user-ninja"></i><span class="hide-menu">Member</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('demisioner_admin') }}">
                        <i class="fa fa-user-graduate"></i><span class="hide-menu">Demisioner</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('pengurus_admin') }}">
                        <i class="fa fa-users"></i><span class="hide-menu">Pengurus</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('pendaftar') }}">
                        <i class="fa fa-user"></i><span class="hide-menu">Calon Member</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{-- route('') --}}">
                        <i class="fa fa-circle-user"></i><span class="hide-menu">Profile</span>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
