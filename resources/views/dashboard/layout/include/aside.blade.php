<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile dropdown m-t-20">
                        <div class="user-pic">
                            <img src="{{ asset('dashboard_files/assets/images/users/1.jpg') }}" alt="users" class="rounded-circle img-fluid" />
                        </div>
                        <div class="user-content hide-menu m-t-10">
                            <h5 class="m-b-10 user-name font-medium">{{auth()->user()->name}}</h5>
                            <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti-settings"></i>
                            </a>
                            <a href=" {{ route('auth.logout') }}" title="Logout" class="btn btn-circle btn-sm">
                                <i class="ti-power-off"></i>
                            </a>
                            <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                           " aria-expanded="false">
                        <i class="mdi mdi-notification-clear-all"></i>
                        <span class="hide-menu">المستخدمين</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('users.create') }}" class="sidebar-link">
                                <i class="mdi mdi-octagram"></i>
                                <span class="hide-menu">create</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('users.index') }}" class="sidebar-link">
                                <i class="mdi mdi-octagram"></i>
                                <span class="hide-menu">index</span>
                            </a>
                        </li>


                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
