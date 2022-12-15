<?php include 'model/fetch_brgy_info.php' ?>

<div class="main-header">

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
        <div class="container-fluid"> 
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item <?= $current_page=='dashboard.php' || $current_page=='resident_info.php' || $current_page=='purok_info.php'  ? 'active' : null ?>">
                    <a class="nav-link text-light" href="dashboard.php" >Dashboard</a>
                </li>
                <li class="nav-item <?= $current_page=='resident.php' || $current_page=='generate_resident.php' ? 'active' : null ?>">
                    <a class="nav-link text-light" href="resident.php">Resident Information</a>
                    </li>
                <li class="nav-item <?= $current_page=='business_permit.php' || $current_page=='generate_brgy_cert.php' ? 'active' : null ?>">
                    <a class="nav-link text-light" href="business_permit.php">Barangay Clearance</a>
                </li>
                
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff'): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#"  id="messageDropdown"  role="button" aria-expanded="false">System</a>
                        <ul class="dropdown-menu">
                            <li><a class="see-all" href="#support" data-toggle="modal">Support</a></li>
                        </ul>
                </li>
                <?php endif ?>
                
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    System
                    </a>
                        <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                            <li><a class="see-all" href="#barangay" data-toggle="modal">Barangay Info</a></li>
                            <li><a class="see-all" href="purok.php">Purok</a></li>
                            <li><a class="see-all" href="officials.php">Officials</a></li>
                            <li><a class="see-all" href="position.php">Positions</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="see-all" href="support.php">Support</a></li>
                            <li><a class="see-all"href="users.php">Users</a></li>
                            <li><a class="see-all"href="backup/backup.php">Backup</a></li>
                            <li><a class="see-all"href="#restore" data-toggle="modal">Restore</a></li>
                        </ul>
                </li>
                <?php endif ?>
            </ul>
        </div>
        
        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item dropdown hidden-caret">
                <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <?php if(!empty($_SESSION['avatar'])): ?>
                        <img src="<?= preg_match('/data:image/i', $_SESSION['avatar']) ? $_SESSION['avatar'] : 'assets/uploads/avatar/'.$_SESSION['avatar'] ?>" alt="..." class="avatar-img rounded-circle">
                    <?php else: ?>
                        <img src="assets/img/person.png" alt="..." class="avatar-img rounded-circle">
                    <?php endif ?>
                   
                </div>
                    <a class="nav-link dropdown-toggle" href="<?= isset($_SESSION['username']) && $_SESSION['role']=='administrator' ? '#collapseExample' : 'javascript:void(0)' ?>" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>
                       
                            <span class="user-level"><?= isset($_SESSION['role']) ? ucfirst($_SESSION['role']) : 'Guest' ?></span>
                        <?= isset($_SESSION['username']) && $_SESSION['role']=='administrator' ? '<span class="caret"></span>' : null ?> 
                        </span>
                    </a>
                    <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                        <li>
                        <a  class="see-all" href="#edit_profile" data-toggle="modal">Edit Profile</a>
                        </li>
                        <li>
                        <a  class="see-all"href="#changepass" data-toggle="modal">Change Password</a>
                        </li>
                        <li>
                            <?php if(isset($_SESSION['role'])):?>
                                <a class="see-all" href="model/logout.php">Sign Out<i class="icon-logout"></i> </a>
                            <?php else: ?>
                                <a class="see-all" href="login.php">Sign In<i class="icon-login"></i> </a>
                            <?php endif ?>
                        </li>
                    </ul>
                </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>