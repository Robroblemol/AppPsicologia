  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" 
            href="<?=base_url("index.php/Psicology_history")?>">Seguimiento psicologico</a>
          <a class="dropdown-item" 
            href="<?=base_url("index.php/Student")?>">Estudiantes</a>
          <a class="dropdown-item" 
            href="<?=base_url("index.php/Attendants")?>">Acudientes</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Citas:</h6>
          <a class="dropdown-item" 
            href="<?=base_url("index.php/Appointments")?>">Citas</a>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

     