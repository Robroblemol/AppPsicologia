<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Historial Psicologico</title>
    </head>
    <style type="text/css">
        .detail{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 5px;
        }
        .body{
            width : 70%;
            margin-left : auto;
            margin-right : auto;
            padding : 0px;
        }
    </style>
<body>
    <div class ="body">
        <a href="<?=
            base_url("index.php/Psicology_history")?>"
            >
            Volver
        </a>
        <h1>Seguimiento psicologico</h1>
        <?php foreach($get as $row){ ?>
            <h2><?= $row->name?></h2>
            <div class = "detail">
                <p>
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
                </p>
                    <a href="<?=
                        base_url("index.php/Student/setForm/$row->id_student")?>"
                        >
                        Editar
                    </a>
            </div>
        <?php } ?>
        
        <h2>Relacion familiar</h2>
        <?php foreach($getFamily as $row){ ?>
            <div class = "detail">
                <p>
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
                </p>
                 <a href="<?=
                        base_url("index.php/Family_relationship/setForm/$row->id_relationship")?>"
                        >
                        Editar
                    </a>
            </div>
        <?php } ?>
        
        <h2>Antecedentes Escolar</h2>
        <?php foreach($getSchool as $row){ ?>
            <div class = "detail">
                <p>
                    Antecedentes escolar:   
                    <?= $row->histori_school?><br/>
                    Habilidades / dificultades:  
                    <?= $row->skills_dificulties?>
                </p>
                 <a href="<?=
                        base_url("index.php/School_histories/setForm/$row->id_school_histories")?>"
                        >
                        Editar
                    </a>
            </div>
        <?php } ?>
        
         <h2>Historia socioemocional</h2>
        <?php foreach($getSocial as $row){ ?>
            <div class = "detail"
                <p>
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
                </p>
                <a href="<?=
                        base_url("index.php/Social_economic/setForm/$row->id_social_economic")?>"
                        >
                        Editar
                    </a>
            </div>
         <?php } ?>
    </div>
    <div class ="body">
        <a href="<?=
            base_url("index.php/Psicology_history")?>"
            >
            Volver
        </a>
        
</body>
</html>