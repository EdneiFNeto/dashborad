  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class='fas fa-align-justify' style='font-size:16px'></i>
            </div>
          <div class="sidebar-brand-text mx-3">Painel Admin</div>
        </a>

        <?php
            if(isset($_SESSION[NBTELECOM][LOGIN][SERVICE_ID_NBTELECOM])){
                include "includes/nav-nbtelecom.php";
            }
            else if(isset($_SESSION[BAITAPLAY][LOGIN][SERVICE_ID_BAITAPLAY])){
                include "includes/nav-baitaplay.php";
            }
            else if(isset($_SESSION[ESPN][LOGIN][SERVICE_ID_ESPN])){
                include "includes/nav-espn.php";
            }
        ?>
        
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  </ul>