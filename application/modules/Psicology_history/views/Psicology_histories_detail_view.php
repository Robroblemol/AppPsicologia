<?php 
    echo modules::run("Home/get_head");
    echo modules::run("Home/get_nav");
    echo modules::run("Home/get_header");
    ?>
    <a href="<?=
            base_url("index.php/Psicology_history")?>"
            >
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
          </a>
    <h1>Seguimiento psicologico</h1>
        <?php foreach($get as $row){ ?>
            <div class = "card mb-3">
                <div class="card-header">
                     <h2><?= $row->name?></h2>
                 </div>
                <div class="card-body">
                    Número de identificacion: 
                    <?= $row->n_identification?><br/>
                    Cuidad de nacimiento: 
                    <?= $row->hometown?><br/>
                    Fecha de nacimiento: 
                    <?= $row->date_birth?><br/>
                    Curso actual: 
                    <?= $row->current_course?><br/>
                    Repitente: 
                    <?= ($row->repet_course == 1)?
                    "Si":"No"?><br/>
                    Correo:  
                    <?= $row->email?>
                    <br/>
                </div>
                <div class="card-footer small text-muted">
                    <a  href="<?=
                        base_url("index.php/Student/setForm/$row->id_student")?>">
                        <i class="fa fa-edit"></i> Editar</a>
    
                
                </div>
            </div>
        <?php } ?>
        <?php foreach($getAttendant as $row){ ?>
         
            <div class = "card mb-3">
                  <div class="card-header">
                     <h2>Acudiente</h2>
                 </div>
                <div class="card-body">
                    Nombre acudiente:   
                    <?= $row->name?><br/>
                    Parentesco: 
                    <?= $row->type?><br/>
                    Edad:
                    <?= $row->date_birth?><br/>
                    Grado de escolaridad:  
                    <?= $row->grade?><br/>
                    Profesion:   
                    <?= $row->profession?><br/>
                    Direccion:   
                    <?= $row->adress?><br/>
                    Telefono:   
                    <?= $row->phone?><br/>
                    Email:   
                    <?= $row->email?><br/>
                </div>
                <div class="card-footer small text-muted">
                 <a href="<?=
                        base_url("index.php/Attendants/setForm/$row->id_relative")?>"
                        >
                        <i class="fa fa-edit"></i>Editar
                    </a>
                </div>
            </div>
        <?php } ?>

        <?php foreach($getFamily as $row){ ?>
         
            <div class = "card mb-3">
                  <div class="card-header">
                     <h2>Relacion familiar</h2>
                 </div>
                <div class="card-body">
                    <h3> <?= $row->date?> </h3>
                    Describe relacion con padre como:   
                    <?= $row->with_father?><br/>
                    Describe relacion con madre como: 
                    <?= $row->with_mother?><br/>
                    Describe relacion con hermanos como:
                    <?= $row->with_brothers?><br/>
                    Describe realcaion con padrastro como:  
                    <?= $row->with_step_parents?><br/>
                    Observaciones:   
                    <?= $row->observations?><br/>
                </div>
                <div class="card-footer small text-muted">
                 <a href="<?=
                        base_url("index.php/Family_relationship/setForm/$row->id_relationship")?>"
                        >
                        <i class="fa fa-edit"></i>Editar
                    </a>
                </div>
            </div>
        <?php } ?>
        
        <?php foreach($getSchool as $row){ ?>
            <div class = "card mb-3">
                  <div class="card-header">
                    <h2>Antecedentes Escolar</h2>
                  </div>
                <div class="card-body">
                    Antecedentes escolar:   
                    <?= $row->histori_school?><br/>
                    Habilidades / dificultades:  
                    <?= $row->skills_dificulties?>
                </div>
                <div class="card-footer small text-muted">
                 <a href="<?=
                        base_url("index.php/School_histories/setForm/$row->id_school_histories")?>"
                        >
                        <i class="fa fa-edit"></i>Editar
                    </a>
                </div>
            </div>
        <?php } ?>
        
        <?php foreach($getSocial as $row){ ?>
            <div class = "card mb-3">
                 <div class="card-header">
                     <h2>Historia socioemocional</h2>
                  </div>
                 <div class="card-body">
                    Tiempo libre:    
                    <?= $row->free_time?><br/>
                    Relaciones interpersonales: 
                    <?= $row->inter_persons?><br/>
                    Comportamiento :
                    <?= $row->behavior_encouragement?><br/>
                    Proyecto de vida:   
                    <?= $row->life_proyect?><br/>
                    Antecedentes de salud:   
                    <?= $row->ant_health?><br/>
                    Antecedentes psicologico:  
                    <?= $row->ant_psicology?><br/>
                     Fecha:  
                    <?= $row->date?><br/>
                </div>
                <div class="card-footer small text-muted">
                <a href="<?=
                        base_url("index.php/Social_economic/setForm/$row->id_social_economic")?>"
                        >
                        <i class="fa fa-edit"></i>Editar
                    </a>
                </div>
            </div>
         <?php } ?>
          <a href="<?=
            base_url("index.php/Psicology_history")?>"
            >
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
          </a>
    </div>

       
<?php 
    echo modules::run("Home/get_footer");
?>
        
