<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Citas</title>
    </head>
    <body>
        <h2><?=($status)?"Modificar registro":"Agregar registro"?></h2>
        <form action="<?=
            base_url(
                ($status)?
                "index.php/Appointments/update/true"
                :
                "index.php/Appointments/add/true"
                )
            ?>" method="post"
            id = setForm>
            <?php if($status){?>
                <?php foreach ($update as $row){ ?>
                <input type="hidden" 
                    name="id_app" 
                    value ="<?=$row -> id_appointmet ?>"/>
                <input type="number" 
                    name="id_stu" 
                    value ="<?=$row -> id_student ?>"/>
                <input type="text" 
                    name="des" 
                    value ="<?=$row -> description ?>"/>
                <table>
                        <th>
                            Fecha Cita
                        </th>
                        <tr>
                            <td>
                                <select name = "a_app" form = "setForm">
                                  <option value="fecha 0"
                                    <?= ($row->asing_appo=='fecha 0')? 
                                    " selected":"" ?>
                                    > fecha 0</option>
                                  <option value="fecha 1"
                                    <?= ($row->asing_appo=='fecha 1')? 
                                    " selected":"" ?>
                                    > fecha 1</option>
                                  <option value="fecha 2"
                                    <?= ($row->asing_appo=='fecha 2')? 
                                    " selected":"" ?>
                                    > fecha 2</option>
                                  <option value="fecha 3 "
                                  <?= ($row->asing_appo=='fecha 3')? 
                                    " selected":"" ?>
                                    > fecha 3</option>
                               </select> 
                            </td>
                        </tr>
                    </table>      
                <div>
                     <input type="checkbox" 
                                name="s_app"
                                value="1"
                                <?= 
                                    $sel = ($row->state_appo == 1)?
                                    "checked" : "";
                                ?> />
                </div>  
               
                <input type="submit" 
                        name="submit" 
                        value="Modificar"/>
                <?php } ?>
            <?php } else {?>
                   <input type="number" 
                            name="id_stu"
                            placeholder = "Numero de identidad"
                            required/>
                    <input type="text" 
                            name="des"
                            placeholder = "Descripción"
                            required/>                            
                    <table>
                        <th>
                            Motivo
                        </th>
                        <tr>
                            <td>
                                <select name = "a_app" form = "setForm">
                                  <option value="fecha 0">
                                      fecha 0</option>
                                  <option value="fecha 1">
                                      fecha 1</option>
                                  <option value="fecha 2">
                                      fecha 2</option>
                                  <option value="fecha 3">
                                      fecha 3</option>
                               </select> 
                            </td>
                        </tr>
                    </table>  
                    
                    <div>
                        <!-- <input type="week" 
                                name="a_app"
                                /> -->
                        <input type="checkbox" 
                            name="s_app"
                            value=1 > Estado </input>
                        <!--        Repitente </input>
                        <input type="number" 
                                name="s_app"
                                placeholder = "Estado"/> -->
                    </div>
                    
                  <div>
                    <input type="submit" 
                        name="add"
                        value="Agregar"/>
                      
                  </div>
                            
                            

            <?php } ?>
        </form>
        <a href="<?=base_url()?>">Volver</a>
    </body>
</html>
