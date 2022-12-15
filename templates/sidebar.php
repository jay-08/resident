<?php // function to get the current page name
function PageName() {
  return substr( $_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") +1);
}

$current_page = PageName();
?>
<div class="sidebar sidebar-style-2" >			
    <div class="sidebar-wrapper scrollbar scrollbar-inner bg-dark" >
        <div class="sidebar-content">
            
            <ul class="nav nav-secondary">
                <li class="nav-item <?= $current_page=='dashboard.php' || $current_page=='resident_info.php' || $current_page=='purok_info.php'  ? 'active' : null ?>">
                    <a href="dashboard.php" >
                        <i class="fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>
                <li class="nav-item <?= $current_page=='resident.php' || $current_page=='generate_resident.php' ? 'active' : null ?>">
                    <a href="resident.php">
                        <i class="icon-people"></i>
                        <p>Resident Information</p>
                    </a>
                </li>
                <li class="nav-item <?= $current_page=='business_permit.php' || $current_page=='generate_business_permit.php' ? 'active' : null ?>">
                    <a href="business_permit.php">
                        <i class="icon-doc"></i>
                        <p>Barangay Clearance</p>
                    </a>
                
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff'): ?>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">System</h4>
                    </li>
                    <li class="nav-item">
                        <a href="#support" data-toggle="modal">
                            <i class="fas fa-flag"></i>
                            <p>Support</p>
                        </a>
                    </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
                
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">System</h4>
                </li>
                <li class="nav-item <?= $current_page=='purok.php' || $current_page=='users.php' || $current_page=='support.php' || $current_page=='backup.php' ? 'active' : null ?>">
                    <a href="#settings" data-toggle="collapse" class="collapsed" aria-expanded="false">
                        <i class="icon-wrench"></i>
                            <p>Settings</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?= $current_page=='purok.php'  || $current_page=='users.php' || $current_page=='support.php' || $current_page=='backup.php' ? 'show' : null ?>" id="settings">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#barangay" data-toggle="modal">
                                    <span class="sub-item">Barangay Info</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='purok.php' ? 'active' : null ?>">
                                <a href="purok.php">
                                    <span class="sub-item">Purok</span>
                                </a>
                            </li>
                            </li>
                            <li class="<?= $current_page=='officials.php' ? 'active' : null ?>">
                                <a href="officials.php">
                                    <span class="sub-item">Officials</span>
                                </a>
                            </li>
                           
                            <?php if($_SESSION['role']=='staff'):?>
                                <li>
                                    <a href="#support" data-toggle="modal">
                                        <span class="sub-item">Support</span>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="<?= $current_page=='users.php' ? 'active' : null ?>">
                                    <a href="users.php">
                                        <span class="sub-item">Users</span>
                                    </a>
                                </li>
                                <li class="<?= $current_page=='support.php' ? 'active' : null ?>">
                                    <a href="support.php">
                                        <span class="sub-item">Support</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="backup/backup.php">
                                        <span class="sub-item">Backup</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#restore" data-toggle="modal">
                                        <span class="sub-item">Restore</span>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>