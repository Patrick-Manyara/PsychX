<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.php" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="../assets/img/logo/logo2.png" style="width:100px;">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">




        <!-- Dashboards -->
        <li class="menu-item <?= $page == "dashboard" ? "active" : "" ?>">
            <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Your Account">Your Account</div>
            </a>
            <ul class="menu-sub">
               
                <li class="menu-item <?= $page == "password" ? "active" : "" ?>">
                    <a href="password.php" class="menu-link">
                        <div data-i18n="Change Password">Change Password</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Master Control -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Control</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Admins">Admins</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "admin" ? "active" : "" ?>">
                    <a href="admin.php" class="menu-link">
                        <div data-i18n="Create An Admin">Create An Admin</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "admins" ? "active" : "" ?>">
                    <a href="view_admins.php" class="menu-link">
                        <div data-i18n="View Admins">View Admins</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Vouchers">Vouchers</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "voucher" ? "active" : "" ?>">
                    <a href="voucher.php" class="menu-link">
                        <div data-i18n="Create A voucher">Create A voucher</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "vouchers" ? "active" : "" ?>">
                    <a href="view_vouchers.php" class="menu-link">
                        <div data-i18n="View Vouchers">View Vouchers</div>
                    </a>
                </li>
            </ul>
        </li>



        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Site">Site</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "manager" ? "active" : "" ?>">
                    <a href="banner.php" class="menu-link">
                        <div data-i18n="Create A Banner">Create A Banner</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "banners" ? "active" : "" ?>">
                    <a href="view_banners.php" class="menu-link">
                        <div data-i18n="View Banners">View Banners</div>
                    </a>
                </li>

                <li class="menu-item <?= $page == "statistics" ? "active" : "" ?>">
                    <a href="view_statistics.php" class="menu-link">
                        <div data-i18n="View Site Figures">View Site Figures</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="?logout" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Logout">Logout</div>
            </a>
        </li>



        <!-- E-Registry -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Users</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-printer"></i>
                <div data-i18n="Therapists">Therapists</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "therapist" ? "active" : "" ?>">
                    <a href="therapist" class="menu-link">
                        <div data-i18n="Create A Therapist">Create A Therapist</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "all_therapists" ? "active" : "" ?>">
                    <a href="view_therapists" class="menu-link">
                        <div data-i18n="View All Therapists">View All Therapists</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "approved_therapists" ? "active" : "" ?>">
                    <a href="view_approved_therapists" class="menu-link">
                        <div data-i18n="View Approved Therapists">View Approved Therapists</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "applied_therapists" ? "active" : "" ?>">
                    <a href="view_applied_therapists" class="menu-link">
                        <div data-i18n="View Applied Therapists">View Applied Therapists</div>
                    </a>
                </li>

            </ul>
        </li>

         <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-printer"></i>
                <div data-i18n="Categories">Categories</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "category" ? "active" : "" ?>">
                    <a href="category" class="menu-link">
                        <div data-i18n="Create A category">Create A category</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "all_categories" ? "active" : "" ?>">
                    <a href="view_categories" class="menu-link">
                        <div data-i18n="View All categories">View All categories</div>
                    </a>
                </li>
                

            </ul>
        </li>
            
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-printer"></i>
                <div data-i18n="Clients">Clients</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "user" ? "active" : "" ?>">
                    <a href="user" class="menu-link">
                        <div data-i18n="Create A Client">Create A Client</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "view_users" ? "active" : "" ?>">
                    <a href="view_users" class="menu-link">
                        <div data-i18n="View All Clients">View All Clients</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "view_subscribers" ? "active" : "" ?>">
                    <a href="view_subscribers" class="menu-link">
                        <div data-i18n="View All Subscribers">View All Subscribers</div>
                    </a>
                </li>


            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-printer"></i>
                <div data-i18n="Transers">Transers</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "view_transfers" ? "active" : "" ?>">
                    <a href="view_transfers" class="menu-link">
                        <div data-i18n="View Transfers">View Transfers</div>
                    </a>
                </li>


            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-printer"></i>
                <div data-i18n="Groups">Groups</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "group" ? "active" : "" ?>">
                    <a href="group" class="menu-link">
                        <div data-i18n="Create A Group">Create A Group</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "view_groups" ? "active" : "" ?>">
                    <a href="view_groups" class="menu-link">
                        <div data-i18n="View All Groups">View All Groups</div>
                    </a>
                </li>


            </ul>
        </li>

        <!-- Sessions and Bookings -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Sessions And Bookings</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-test-tube"></i>
                <div data-i18n="Sessions">Sessions</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item <?= $page == "view_sessions" ? "active" : "" ?>">
                    <a href="view_sessions" class="menu-link">
                        <div data-i18n="View Sessions">View Sessions</div>
                    </a>
                </li>
            </ul>
        </li>

    


    </ul>
</aside>