  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav toggled">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Modulos:</h6>
          <?php if(modules::run("Auth/is_admin")||
            modules::run("Auth/is_psicology")){?>
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
            <?php }?>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Citas:</h6>
          <a class="dropdown-item" 
            href="<?=base_url("index.php/Appointments")?>">Citas</a>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
      
      <!-- flashdata -->
      
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
            <?php 
            //si hay sessiones flashdata se muestran!
            if($this ->session ->flashdata('message')){?>
                <div class="alert alert-success" 
                    role="alert">
                    <?= $this ->session ->flashdata('message');?>
                </div>
           <?php }?>

      
      
        
      <div class="row">
        <?php if($app != 'seguimiento'&&
          (modules::run("Auth/is_admin")||
          modules::run("Auth/is_psicology"))){?>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Seguimiento psicologico</div>
              </div>
              <a class="card-footer text-white clearfix small z-1"
              href="<?=base_url("index.php/Psicology_history")?>">
                <span class="float-left">Ir a Seguimiento psicologico</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        <?php }?>
        
        <?php if($app != 'estudiantes'&&
          (modules::run("Auth/is_admin")||
          modules::run("Auth/is_psicology"))){?>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Estudiantes</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" 
                href="<?=base_url("index.php/Student")?>">
                <span class="float-left">Ir a Estudiantes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        <?php }?>  
        <?php if($app != 'acudientes'&&
          (modules::run("Auth/is_admin")||
          modules::run("Auth/is_psicology"))){?>  
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Acudientes</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" 
                href="<?=base_url("index.php/Attendants")?>">
                <span class="float-left">Ir a Acudientes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        <?php }?> 
        <?php if($app != 'citas'&&
        (modules::run("Auth/is_admin")||
          modules::run("Auth/is_psicology"))){?>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Citas agendadas <?=
                  $citas;
                ?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" 
                href="<?=base_url('index.php/Appointments')?>">
                <span class="float-left">Ir a Citas</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        <?php }?>  
        </div>

     