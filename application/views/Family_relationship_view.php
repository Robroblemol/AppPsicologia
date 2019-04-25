<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Relación familiar </title>
    </head>
<body>
    <h2>Relación familiar</h2>
    <?php 
      //si hay sessiones flashdata se muestran!
        if($this ->session ->flashdata('Ok'))
            echo $this ->session ->flashdata('Ok');
        if($this ->session ->flashdata('Fallo'))
            echo $this ->session ->flashdata('Fallo');
    ?>
    
    <table border="0">
         <form action="<?=base_url("index.php/Family_relationship/findOne");?>" 
                id = "find" method="post">
                 <td>
                     <input type="texto" 
                            name="id"
                            placeholder = "valor a buscar"
                            required/>
                </td>
                <td>
                    <select name = "field" form = "find">
                          <option value="id_student">Identificacion</option>
                          <option value="with_father">Relacion padre</option>
                          <option value="with_mother">Relacion madre</option>
                          <option value="with_brothers">Relacion hermanos</option>
                          <option value="with_step_parents">Relacion padrastros</option>
                    </select>
                </td>
                <td>
                     <input type="submit" 
                            name="findOne"
                            value="Buscar"/>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Family_relationship")?>">
                       Reset</a>
                </td>
        </form>
    </table>
    <table border="2">
        <tr>
            <th>id_student</th>
            <th>Relacion padre</th>
            <th>Relacion madre</th>
            <th>Relacion hermanos</th>
            <th>Relacion padredastros</th>
            <th>Observaciones</th>
            <th>Fecha</th>
                    
            <form action="<?=base_url("index.php/Family_relationship/setForm/add");?>" method="post">
                 <td>
                     <input type="submit" 
                            name="add"
                            value="Agregar"/>
                </td>
            </form>
            
        </tr>
        <?php foreach($get as $row){ ?>
            <tr>
                <td>
                    <?=$row->id_student;?>
                </td>
                <td>
                    <?=$row->with_father;?>
                </td>
                <td>
                    <?=$row->with_mother;?>
                </td>
                <td>
                    <?=$row->with_brothers;?>
                </td>
                <td>
                    <?=$row->with_step_parents;?>
                </td>
                <td>
                    <?=$row->observations;?>
                </td>
                <td>
                    <?=$row->date;?>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Family_relationship/setForm/$row->id_relationship")?>">
                       Modificar</a>
                    <a href="<?=base_url("index.php/Family_relationship/delete/$row->id_relationship/true")?>">
                       Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>