<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Estudiantes</title>
    </head>
    <body>
        <h2><?=($status)?"Modificar registro":"Agregar registro"?></h2>
        <form action="<?=
            base_url(
                ($status)?
                "index.php/School_histories/update/true"
                :
                "index.php/School_histories/add/true"
                )
            ?>" method="post">
            <?php if($status){?>
                <?php foreach ($update as $row){ ?>
                <input type="hidden" 
                    name="id_sch" 
                    value ="<?=$row -> id_school_histories ?>"/>
                <input type="number" 
                    name="id_stu" 
                    value ="<?=$row -> id_student ?>"/>
                <input type="text" 
                    name="h_sch" 
                    value="<?=$row->histori_school?>"/>
                <input type="text"  
                    name="s_dif" 
                    value="<?=$row->skills_dificulties?>"/>
                <input type="submit" 
                        name="submit" 
                        value="Modificar"/>
                <?php } ?>
            <?php } else {?>
                   <input type="number" 
                            name="id_stu"
                            placeholder = "numero de identidad"
                            required/>
                   <input type="text" 
                            name="h_sch"
                            placeholder = "historial escolar"
                            required/>
                   <input type="text" 
                            name="s_dif"
                            placeholder = "Dificultades y habilidades"
                            required/>
                   <input type="submit" 
                            name="add"
                            value="Agregar"/>
            <?php } ?>
        </form>
        <a href="<?=base_url()?>">Volver</a>
    </body>
</html>
