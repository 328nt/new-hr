<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="upload/users/{{Auth::User()->image}}" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{Auth::User()->fullname}}</div><small>{{Auth::User()->roles->name}}</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="index.html"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>


            <li class="{{ request()->is('admin/users*') ? 'active' : '' }}">
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Users</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="admin/users/list">List</a>
                    </li>
                    <li>
                        <a href="admin/users/add">add</a>
                    </li>
                    <li>
                        <a href="panels.html">Panels</a>
                    </li>
                </ul>
            </li>
            <li class="{{ request()->is('admin/news*') ? 'active' : '' }}">
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">News</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="admin/news/list">List</a>
                    </li>
                    <li>
                        <a href="admin/news/add">add</a>
                    </li>
                    <li>
                        <a href="panels.html">Panels</a>
                    </li>
                </ul>
            </li>
            
            <li class="{{ request()->is('admin/videos*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                        <span class="nav-label">Videos</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="admin/videos/list">List</a>
                        </li>
                        <li class="{{ request()->is('admin/videos/add') ? 'active' : '' }}">
                            <a href="admin/videos/add">add</a>
                        </li>
                        <li>
                            <a href="panels.html">Panels</a>
                        </li>
                    </ul>
                </li>
            <li class="{{ request()->is('admin/training*') ? 'active' : '' }}">
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Training</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="admin/training/list">List</a>
                    </li>
                    <li>
                        <a href="admin/training/add">add</a>
                    </li>
                    <li>
                        <a href="panels.html">Panels</a>
                    </li>
                </ul>
            </li>
            <li class="{{ request()->is('admin/forms*') ? 'active' : '' }}">
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Procedures</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="admin/forms/list">List</a>
                    </li>
                    <li>
                        <a href="admin/forms/add">add</a>
                    </li>
                    <li>
                        <a href="panels.html">Panels</a>
                    </li>
                </ul>
            </li>
            <li class="heading">PAGES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                    <span class="nav-label">Mailbox</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="mailbox.html">Inbox</a>
                    </li>
                    <li>
                        <a href="mail_view.html">Mail view</a>
                    </li>
                    <li>
                        <a href="mail_compose.html">Compose mail</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="calendar.html"><i class="sidebar-item-icon fa fa-calendar"></i>
                    <span class="nav-label">Calendar</span>
                </a>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                    <span class="nav-label">Pages</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="invoice.html">Invoice</a>
                    </li>
                    <li>
                        <a href="profile.html">Profile</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="register.html">Register</a>
                    </li>
                    <li>
                        <a href="lockscreen.html">Lockscreen</a>
                    </li>
                    <li>
                        <a href="forgot_password.html">Forgot password</a>
                    </li>
                    <li>
                        <a href="error_404.html">404 error</a>
                    </li>
                    <li>
                        <a href="error_500.html">500 error</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="javascript:;">Level 2</a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-3-level collapse">
                            <li>
                                <a href="javascript:;">Level 3</a>
                            </li>
                            <li>
                                <a href="javascript:;">Level 3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>