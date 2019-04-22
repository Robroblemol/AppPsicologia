<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Modificar usuarios</title>
    </head>
    <body>
        <h2>Modificar Estudiante</h2>
        <form action="" method="POST">
            <?php foreach ($add as $row){ ?>
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
                value="<?=$row->date_birth?>"/>
            <input type="radio" 
                            name="current_course"
                            value="<?=$row->repet_course?>"> 
                            Repitente </input>
            <input type="email" 
                name="email" 
                value="<?=$row->email?>"/>
            <input type="submit" name="submit" value="Modificar"/>
            <?php } ?>
        </form>
        <a href="<?=base_url()?>">Volver</a>
    </body>
</html>
