<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.php" style="color:white;" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="../assets/img/logo/logo2.png" style="width:100px;">
            </span>
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

        <!-- Sessions and Bookings -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Account</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Your Account">Your Account</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "profile" ? "active" : "" ?>">
                    <a href="my_profile.php" class="menu-link">
                        <div data-i18n="Current Profile">Current Profile</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "edit_profile" ? "active" : "" ?>">
                    <a href="edit_profile.php" class="menu-link">
                        <div data-i18n="Edit Profile">Edit Profile</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "password" ? "active" : "" ?>">
                    <a href="password.php" class="menu-link">
                        <div data-i18n="Change Password">Change Password</div>
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
                <li class="menu-item <?= $page == "schedule" ? "active" : "" ?>">
                    <a href="schedule.php" class="menu-link">
                        <div data-i18n="My Schedule">My Schedule</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "sessions" ? "active" : "" ?>">
                    <a href="view_sessions.php" class="menu-link">
                        <div data-i18n="My Sessions">My Sessions</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-test-tube"></i>
                <div data-i18n="Notes">Notes</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "schedule" ? "active" : "" ?>">
                    <a href="note" class="menu-link">
                        <div data-i18n="Add Notes">Add Notes</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "sessions" ? "active" : "" ?>">
                    <a href="view_notes" class="menu-link">
                        <div data-i18n="View Notes">View Notes</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>