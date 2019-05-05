<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Historial Psicologico</title>
        <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class ="body">
        <a href="<?=
            base_url("index.php/Psicology_history")?>"
            >
            Volver
        </a>
        <h1>Seguimiento psicologico</h1>
        <?php foreach($get as $row){ ?>
            <div class = "jumbotron">
             <h2><?= $row->name?></h2>
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
        

        <?php foreach($getFamily as $row){ ?>
         <h2>Relacion familiar</h2>
            <div class = "jumbotron">
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
            <div class = "jumbotron">
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
            <div class = "jumbotron">
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