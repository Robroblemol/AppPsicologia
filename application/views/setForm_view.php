<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Estudiantes</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
        
        <div class = "body">
            <h2><?=($status)?"Modificar Estudiante":"Agregar Estudiante"?></h2>
            <hr class="my-4">
            <div class = "jumbotron">
            <form action="<?=
                base_url(
                    ($status)?
                    "index.php/Student/update"
                    :
                    "index.php/Student/add"
                )
                ?>" method="post">
                <?php if($status){?>
                    <?php foreach ($update as $row){ ?>
                    <input type="hidden" 
                        name="id_student" 
                        value ="<?=$row -> id_student ?>"/>
                    <label for="identificacionStudent">Numero de identificación</label>
                    <input type="number" 
                        name="n_identification" 
                        class="form-control"
                        value="<?=$row->n_identification?>"/>
                    <label for="maneStudent">Nombre estudiante</label>
                    <input type="text"  
                        name="name" 
                        class="form-control"
                        value="<?=$row->name?>"/>
                    <label for="homeBirthStudent">Ciudad de nacimiento</label>
                    <input type="text" 
                        name="hometown"
                        class="form-control"
                        value="<?=$row->hometown?>"/>
                    <label for="dateBirthStudent">Fecha de nacimiento</label>
                    <input type="date" 
                        name="date_birth"
                        class="form-control"
                        value="<?=$row->date_birth?>"/>
                    <label for="courseStudent">Curso actual</label>
                    <input type="text" 
                        name="current_course" 
                        class="form-control"
                        value="<?=$row->current_course?>"/>
                    <div class="form-group form-check">
                        <input type="checkbox" 
                                    name="repet_course"
                                    value="1"
                                    <?= 
                                        $sel = ($row->repet_course == 1)?
                                        "checked" : "";
                                    ?> 
                                    class="form-check-input"/>
                         <label class="form-check-label">Repitente</label>
                    </div>
                    <label for="emailStudent">Email</label>
                    <input type="email" 
                        name="email"
                        class="form-control"
                        value="<?=$row->email?>"/>
                    <br>
                    <input type="submit" class="btn btn-info" name="submit" value="Modificar"/>
                    <?php } ?>
                <?php } else {?>
                        <label for="identificacionStudent">Numero de identificación</label>
                       <input type="number" 
                                name="n_identification"
                                class="form-control"
                                placeholder = "Numero de identidad"
                                required/>
                        <label for="maneStudent">Nombre estudiante</label>
                       <input type="text" 
                                name="name"
                                class="form-control"
                                placeholder = "Nombre estudiante"
                                required/>
                        <label for="homeBirthStudent">Ciudad de nacimiento</label>
                       <input type="text" 
                                name="hometown"
                                class="form-control"
                                placeholder = "Ciudad origen"
                                required/>
                        <label for="dateBirthStudent">Fecha de nacimiento</label>
                       <input type="date" 
                                name="date_birth"
                                class="form-control"
                                placeholder = "fecha nacimiento"
                                required/>
                        <label for="courseStudent">Curso actual</label>
                       <input type="text" 
                                name="current_course"
                                class="form-control"
                                placeholder = "curso actual"
                                required/>
                        <div>
                           <input type="checkbox" 
                                name="repet_course"
                                class="form-check-input"
                                value=1 />
                            <label class="form-check-label">Repitente</label>        
                        </div>
                       
                     <label for="emailStudent">Email</label>
                       <input type="email" 
                                name="email"
                                class="form-control"
                                placeholder = "correo estudiante"
                                required/>
                       <input type="submit" 
                                name="add"
                                class="btn btn-primary mb-2"
                                value="Agregar"/>
                <?php } ?>
        </form>
        <a href="<?=base_url("index.php/Student")?>">Volver</a>
            </div>
        </div>
        
    </body>
</html>
