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
                "index.php/Psicology_asistan/update/true"
                :
                "index.php/Psicology_asistan/add/true"
                )
            ?>" method="post"
            id = setForm>
            <?php if($status){?>
                <?php foreach ($update as $row){ ?>
                <input type="hidden" 
                    name="id_reg" 
                    value ="<?=$row -> id_register ?>"/>
                <input type="number" 
                    name="id_stu" 
                    value ="<?=$row -> id_student ?>"/>
                <table>
                        <th>
                            Relacion interpersonal
                        </th>
                        <tr>
                            <td>
                                <select name = "rea" form = "setForm">
                                  <option value="Caso familiar"
                                    <?= ($row->reason=='Caso familiar')? 
                                    " selected":"" ?>
                                    > Caso familiar</option>
                                  <option value="Situacion academica"
                                    <?= ($row->reason=='Situacion academica')? 
                                    " selected":"" ?>
                                    > Situacion academica</option>
                                  <option value="Caso de indisciplina"
                                    <?= ($row->reason=='Caso de indisciplina')? 
                                    " selected":"" ?>
                                    > Caso de indisciplina</option>
                                  <option value="Caso de convivencia"
                                  <?= ($row->reason=='Caso de convivencia')? 
                                    " selected":"" ?>
                                    > Caso de convivencia</option>
                               </select> 
                            </td>
                            <td>
                                <input type="text" 
                                    name="reao"
                                    value="<?= (
                                        $row->reason!='Caso familiar'&&
                                        $row->reason!='Situacion academica'&&
                                        $row->reason!='Caso de indisciplina'&&
                                        $row->reason!='Caso de convivencia')? 
                                    $row->reason:"" ?>"
                                    />
                            </td>
                        </tr>
                    </table>      
                <div>
                   <input type="text" 
                        name="fun" 
                        value ="<?=
                         $row ->funcionary ?>"/>  
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
                    <table>
                        <th>
                            Motivo
                        </th>
                        <tr>
                            <td>
                                <select name = "rea" form = "setForm">
                                  <option value="Caso familiar">
                                      Caso familiar</option>
                                  <option value="Situacion academica">
                                      Situacion academica</option>
                                  <option value="Caso de indisciplina">
                                      Caso de indisciplina</option>
                                  <option value="Caso de convivencia">
                                      Caso de convivencia</option>
                               </select> 
                            </td>
                            <td>
                                <input type="text" 
                                    name="reao"
                                    placeholder = "Otro"/>
                            </td>
                        </tr>
                    </table>        
                    
                  <div>
                      <input type="text" 
                            name="fun"
                            placeholder = "Funcionario"
                            required/>
                      
                  </div>
                            
                            
                   <input type="submit" 
                            name="add"
                            value="Agregar"/>
            <?php } ?>
        </form>
        <a href="<?=base_url()?>">Volver</a>
    </body>
</html>
