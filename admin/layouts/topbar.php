 <header id="page-topbar">
     <div class="navbar-header">
         <div class="d-flex">
             <!-- LOGO -->
             <div class="navbar-brand-box">
                 <a href="/Dason-rtl-PHP" class="logo logo-dark">
                     <span class="logo-sm">
                         <img src="assets/images/logo-sm.svg" alt="" height="30">
                     </span>
                     <span class="logo-lg">
                         <img src="assets/images/(7).png" alt="" height="24"> <span class="logo-txt">PLATINUM</span>
                     </span>
                 </a>
                 <a href="/Dason-rtl-PHP" class="logo logo-light">
                     <span class="logo-sm">
                         <img src="assets/images/(7).png" alt="" height="30">
                     </span>
                     <span class="logo-lg">
                         <img src="assets/images/(7).png" alt="" height="24"> <span class="logo-txt">PLATINUM</span>
                     </span>
                 </a>
             </div>
             <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                 <i class="fa fa-fw fa-bars"></i>
             </button>
         </div>
         <div class="d-flex">
             <div class="dropdown d-none d-sm-inline-block">
                 <button type="button" class="btn header-item" id="mode-setting-btn">
                     <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                     <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                 </button>
             </div>
             <div class="dropdown d-inline-block">
                 <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <img class="rounded-circle header-profile-user user-profile-image" src="<?php echo isset($_SESSION["profileimg"]) ? '../uploads/admin_profile/'.$_SESSION["profileimg"] : '../uploads/admin_profile/defult.jpg'; ?>" 
                 alt="Header Avatar" id="user_image">
                     <span class="d-none d-xl-inline-block ms-1 fw-medium setting_user_name" id="setting_user_name"><?php echo $_SESSION["username"]; ?></span>
                     <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-end">
                     <!-- item-->
                     <a class="dropdown-item" href="user_profile.php"><i class="fa-solid fa-user"></i> الملف الشخصي</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> تسجيل خروج</a>
                 </div>
             </div>
         </div> 
     </div>
 </header>
 