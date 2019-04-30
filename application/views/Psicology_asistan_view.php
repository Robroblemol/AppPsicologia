<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Socio Económico </title>
    </head>
<body>
    <h2>Socio Economico</h2>
    <?php 
      //si hay sessiones flashdata se muestran!
        if($this ->session ->flashdata('Ok'))
            echo $this ->session ->flashdata('Ok');
        if($this ->session ->flashdata('Fallo'))
            echo $this ->session ->flashdata('Fallo');
    ?>
    
    <table border="0">
         <form action="<?=base_url("index.php/Psicology_asistan/findOne");?>" 
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
                          <option value="reason">Motivo</option>
                          <option value="funcionary">
                              Funcionario</option>
                    </select>
                </td>
                <td>
                     <input type="submit" 
                            name="findOne"
                            value="Buscar"/>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Psicology_asistan")?>">
                       Reset</a>
                </td>
        </form>
    </table>
    <table border="2">
        <tr>
            <th>id_student</th>
            <th>Motivo</th>
            <th>Funcionario</th>
            <th>Fecha</th>

                    
            <form action="<?=base_url("index.php/Psicology_asistan/setForm/add");?>" method="post">
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
                    <?=$row->reason;?>
                </td>
                <td>
                    <?=$row->funcionary;?>
                </td>
                <td>
                    <?=$row->date;?>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Psicology_asistan/setForm/$row->id_register")?>">
                       Modificar</a>
                    <a href="<?=base_url("index.php/Psicology_asistan/delete/$row->id_register/true")?>">
                       Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>