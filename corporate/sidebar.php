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
            <span class="menu-header-text">voucher</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-coupon"></i>
                <div data-i18n="vouchers">vouchers</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "voucher" ? "active" : "" ?>">
                    <a href="voucher" class="menu-link">
                        <div data-i18n="voucher">voucher</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "vouchers" ? "active" : "" ?>">
                    <a href="view_vouchers" class="menu-link">
                        <div data-i18n="view vouchers">view vouchers</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "used vouchers" ? "active" : "" ?>">
                    <a href="view_used_vouchers" class="menu-link">
                        <div data-i18n="view used vouchers">view used vouchers</div>
                    </a>
                </li>
                </ul>
                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="members">members</div>
            </a>
           
            <ul class="menu-sub">
                <li class="menu-item <?= $page == "upload members" ? "active" : "" ?>">
                    <a href="upload_members" class="menu-link">
                        <div data-i18n="upload members">Upload Members</div>
                    </a>
                </li>
                <li class="menu-item <?= $page == "members" ? "active" : "" ?>">
                    <a href="view_members" class="menu-link">
                        <div data-i18n="view members">View Members</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>