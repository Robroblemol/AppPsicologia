<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Seguimiento psicologico</title>
    </head>
<body>
    <h2>Estudientes registrados</h2>
    <?php 
      //si hay sessiones flashdata se muestran!
        if($this ->session ->flashdata('Ok'))
            echo $this ->session ->flashdata('Ok');
        if($this ->session ->flashdata('Fallo'))
            echo $this ->session ->flashdata('Fallo');
    ?>
    
    <table border="0">
         <form action="<?=base_url("index.php/Psicology_history/findOne");?>" id = "find" method="post">
                 <td>
                     <input type="texto" 
                            name="id"
                            placeholder = "valor a buscar"
                            required/>
                </td>
                <td>
                    <select name = "field" form = "find">
                          <option value="n_identification">Identificacion</option>
                          <option value="name">Nombre estudiente</option>
                    </select>
                </td>
                <td>
                     <input type="submit" 
                            name="findOne"
                            value="Buscar"/>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Psicology_history")?>">
                       Reset</a>
                </td>
        </form>
    </table>
    <table border="2">
        <tr>
            <th>Identificacion</th>
            <th>Nombre Estudiante</th>
                    
            <form action="<?=base_url("index.php/Psicology_history/setForm/add");?>" method="post">
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
    
                    <?=$row->n_identification;?>
                    
                </td>
                <td>
                    <a href="<?=base_url("index.php/Psicology_history/get_detail/$row->id_student")?>"> 
                    <?=$row->name;?>
                    </a>
                </td>
                <td>

                <td>
                    <a href="<?=base_url("index.php/Psicology_history/setForm/$row->id_student")?>">
                       Modificar</a>
                    <a href="<?=base_url("index.php/Psicology_history/delete/$row->id_student")?>">
                       Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>