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
                "index.php/Social_economic/update/true"
                :
                "index.php/Social_economic/add/true"
                )
            ?>" method="post"
            id = setForm>
            <?php if($status){?>
                <?php foreach ($update as $row){ ?>
                <input type="hidden" 
                    name="id_soc" 
                    value ="<?=$row -> id_social_economic ?>"/>
                <input type="number" 
                    name="id_stu" 
                    value ="<?=$row -> id_student ?>"/>
                <input type="text" 
                    name="f_tim" 
                    value="<?=$row->free_time?>"/>
                    
                <label for="">Relacion interpersonal:</label>    
                    <select name = "i_per" form = "setForm">
                        <option value="Excelente"
                            <?= ($row->inter_persons=='Excelente')? 
                                " selected":"" ?>
                            >Excelente</option>
                        <option value="Buena"
                            <?= ($row->inter_persons=='Buena')? 
                                " selected":"" ?>
                            >Buena</option>
                        <option value="Regular"
                             <?= ($row->inter_persons=='Regular')? 
                                " selected":"" ?>
                            >Regular</option>
                        <option value="Deficiente"
                             <?= ($row->inter_persons=='Deficiente')? 
                                " selected":"" ?>
                            >Deficiente</option>
                    </select>   
                    
                <input type="text" 
                    name="b_enc" 
                    value="<?=$row->behavior_encouragement?>"/>
                <input type="text" 
                    name="l_pro" 
                    value="<?=$row->life_proyect?>"/>
                <input type="text" 
                    name="a_hea" 
                    value="<?=$row->ant_health?>"/>
                <input type="text" 
                    name="a_psi" 
                    value="<?=$row->ant_psicology?>"/>
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
                            name="f_tim"
                            placeholder = "Tiempo libre"
                            required/>
                   <label for="">Relacion interpersonal: </label>
                   <select name = "i_per" form = "setForm">
                          <option value="Excelente">Excelente</option>
                          <option value="Buena">Buena</option>
                          <option value="Regular">Regular</option>
                          <option value="Deficiente">Deficiente</option>
                   </select>      
                            
                   <input type="text" 
                            name="b_enc"
                            placeholder = "Comportamiento y Estado de animo"
                            required/>
                   <input type="text" 
                            name="l_pro"
                            placeholder = "Proyecto de vida"
                            required/>
                   <input type="text" 
                            name="a_hea"
                            placeholder = "Antecedentes de salud"
                            required/>
                   <input type="text" 
                            name="a_psi"
                            placeholder = "Antecedente psicologico"
                            required/>
                            
                   <input type="submit" 
                            name="add"
                            value="Agregar"/>
            <?php } ?>
        </form>
        <a href="<?=base_url()?>">Volver</a>
    </body>
</html>
