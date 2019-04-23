<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Modificar usuarios</title>
    </head>
    <body>
        <h2><?=($status)?"Modificar Estudiante":"Agregar Estudiante"?></h2>
        <form action="<?=
            base_url(
                ($status)?
                "index.php/Testing/update"
                :
                "index.php/Testing/add"
                )
            ?>" method="post">
            <?php if($status){?>
                <?php foreach ($update as $row){ ?>
                <input type="hidden" 
                    name="id_student" 
                    value ="<?=$row -> id_student ?>"/>
                <input type="number" 
                    name="n_identification" 
                    value="<?=$row->n_identification?>"/>
                <input type="text"  
                    name="name" 
                    value="<?=$row->name?>"/>
                <input type="text" 
                    name="hometown" 
                    value="<?=$row->hometown?>"/>
                <input type="date" 
                    name="date_birth" 
                    value="<?=$row->date_birth?>"/>
                <input type="text" 
                    name="current_course" 
                    value="<?=$row->current_course?>"/>
                <input type="checkbox" 
                                name="repet_course"
                                value="1"
                                <?= 
                                    $sel = ($row->repet_course == 1)?
                                    "checked" : "";
                                ?> />
                                Repitente </input>
                <input type="email" 
                    name="email" 
                    value="<?=$row->email?>"/>
                <input type="submit" name="submit" value="Modificar"/>
                <?php } ?>
            <?php } else {?>
                   <input type="number" 
                            name="n_identification"
                            placeholder = "numero de identidad"
                            required/>
                   <input type="text" 
                            name="name"
                            placeholder = "nombre estudiante"
                            required/>
                   <input type="text" 
                            name="hometown"
                            placeholder = "ciudad origen"
                            required/>
                   <input type="date" 
                            name="date_birth"
                            placeholder = "fecha nacimiento"
                            required/>
                   <input type="text" 
                            name="current_course"
                            placeholder = "curso actual"
                            required/>
                   <input type="checkbox" 
                            name="repet_course"
                            value=1 > Repitente </input>
                   <input type="email" 
                            name="email"
                            placeholder = "correo estudiante"
                            required/>
                   <input type="submit" 
                            name="add"
                            value="Agregar"/>
            <?php } ?>
        </form>
        <a href="<?=base_url()?>">Volver</a>
    </body>
</html>
