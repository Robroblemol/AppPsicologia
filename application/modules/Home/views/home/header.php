  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
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
            href="<?=base_url("index.php/Family_relationship")?>">Relación familiar</a>
          <a class="dropdown-item" 
            href="<?=base_url("index.php/Social_economic")?>">Socioemocional</a>
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

        <?php 
            //si hay sessiones flashdata se muestran!
            if($this ->session ->flashdata('Ok')){?>
                <div class="alert alert-success" 
                    role="alert">
                    <?= $this ->session ->flashdata('Ok');?>
                </div>
           <?php }
            if($this ->session ->flashdata('Fallo')){?>
                <div class="alert alert-info" role="alert">
                    <?=$this ->session ->flashdata('Fallo');?>
                </div>
            <?php }?>

     