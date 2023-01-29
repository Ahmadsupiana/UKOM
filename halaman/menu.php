 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="halaman.php">
    <div class="sidebar-brand-icon rotate-n-15">
     <i class="fas fa-envelope fa-fw"></i>
   </div>
   <div class="sidebar-brand-text mx-3">E-Office</div>
 </a>

 <!-- Divider -->
 <hr class="sidebar-divider my-0">

 <!-- Nav Item - Dashboard -->
 <li class="nav-item">
  <a class="nav-link" href="dasboard.net">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    MENU
  </div>


  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
    aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-folder"></i>
    <!--  <span class="badge badge-danger badge-counter">99 +</span> -->
    <span>Master Data </span>

  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">INPUT :</h6>
    <?php
    if ($data_level=="admin"){
      ?>
      <a class="collapse-item" href="peserta.net">Data Peserta
      <a class="collapse-item" href="surat_masuk.net">Nilai Peserta   
        <!-- <span class="badge badge-danger badge-counter">5</span></a> -->
        <a class="collapse-item" href="mata_lomba.net">Mata Lomba
          <!-- <span class="badge badge-danger badge-counter">5</span></a> -->
              
              
                 <?php
               } elseif($data_level=="peserta"){
                ?>
                <a class="collapse-item" href="disposisi.net">Mata Lomba
                  <!-- <span class="badge badge-danger badge-counter">5</span></a> -->
                 
                       <?php
                     }
                     ?>

                   </div>
                 </div>
               </li>

               <!-- Divider -->
               <!-- Heading -->
               <div class="sidebar-heading">
                PENGATURAN
              </div>

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                aria-controls="collapsePages">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Option</span>
              </a>
              <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" onclick="return confirm('Apakah anda yakin akan keluar ?')" href="../">Logout</a>
              </div>
            </div>
          </li>


          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

        </ul>
        <!-- End of Sidebar -->
