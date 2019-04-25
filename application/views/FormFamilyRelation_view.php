<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Estudiantes</title>
    </head>
    <body>
        <h2><?=($status)?"Modificar Estudiante":"Agregar Estudiante"?></h2>
        <form action="<?=
            base_url(
                ($status)?
                "index.php/Family_relationship/update/true"
                :
                "index.php/Family_relationship/add/true"
                )
            ?>"
            id ="addForm"
            method="post">
            <?php if($status){?>
                <?php foreach ($update as $row){ ?>
                <input type="hidden" 
                    name="id_relationship" 
                    value ="<?=$row -> id_relationship ?>"/>
                <input type="number" 
                    name="id_stu" 
                    value="<?=$row->id_student?>"/>
                <input type="text"  
                    name="w_fat" 
                    value="<?=$row->with_father?>"/>
                <input type="text" 
                    name="w_mot" 
                    value="<?=$row->with_mother?>"/>
                <input type="text" 
                    name="w_bro" 
                    value="<?=$row->with_brothers?>"/>
                <input type="text" 
                    name="w_step_par" 
                    value="<?=$row->with_step_parents?>"/>
                <input type="text" 
                    name="obv" 
                    width = "100"
                    value="<?=$row->observations?>"/>
                <input type="submit" name="submit" value="Modificar"/>
                <?php } ?>
            <?php } else {?>
                   
                   <input type="number" 
                            name="id_stu"
                            placeholder = "id estudiante"
                            required/>
                    <div>
                        <label for="">Describe relacion paternal como: </label>
                        <select name = "w_fat" form = "addForm">
                            <option value="Exclente">Exclente</option>
                            <option value="Buena">Buena</option>
                            <option value="Regular">Regular</option>
                            <option value="Deficiente">Deficiente</option>
                            <option value="N/A">N/A</option>
                        </select>    
                    </div>
                    
                    <div>
                        <label for="">Describe relacion maternal como: </label>
                        <select name = "w_mot" form = "addForm">
                            <option value="Exclente">Exclente</option>
                            <option value="Buena">Buena</option>
                            <option value="Regular">Regular</option>
                            <option value="Deficiente">Deficiente</option>
                            <option value="N/A">N/A</option>
                        </select>    
                    </div>
                    
                    <div>
                        <label for="">Describe relacion hermanos como: </label>
                        <select name = "w_bro" form = "addForm">
                            <option value="Exclente">Exclente</option>
                            <option value="Buena">Buena</option>
                            <option value="Regular">Regular</option>
                            <option value="Deficiente">Deficiente</option>
                            <option value="N/A">N/A</option>
                        </select>    
                    </div>
                        <label for="">Describe relacion padrasto como: </label>
                        <select name = "w_step_par" form = "addForm">
                            <option value="Exclente">Exclente</option>
                            <option value="Buena">Buena</option>
                            <option value="Regular">Regular</option>
                            <option value="Deficiente">Deficiente</option>
                            <option value="N/A">N/A</option>
                        </select>    
                    </div>
                    <div>
                        <input type="text" 
                                name="obv"
                                placeholder = "Observaciones"
                                
                                required/>
                       <input type="submit" 
                                name="add"
                                value="Agregar"/>
                    </div>

            <?php } ?>
        </form>
        <a href="<?=base_url("index.php/Family_relationship")?>">Volver</a>
    </body>
</html>
