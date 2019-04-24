<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Estudientes</title>
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
    <table border="1">
        
        <tr>
            <th>Identificacion</th>
            <th>Nombre Estudiante</th>
            <th>Lugar nacimiento</th>
            <th>Fecha nacimientos</th>
            <th>Curso acutal</th>
            <th>repitente</th>
            <th>email</th>
                    
            <form action="<?=base_url("index.php/Student/setForm/add");?>" method="post">
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
                    <?=$row->name;?>
                </td>
                <td>
                    <?=$row->hometown;?>
                </td>
                <td>
                    <?=$row->date_birth;?>
                </td>
                <td>
                    <?=$row->current_course;?>
                </td>
                <td>
                    <?=$row->repet_course;?>
                </td>
                <td>
                    <?=$row->email;?>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Student/setForm/$row->id_student")?>">
                       Modificar</a>
                    <a href="<?=base_url("index.php/Student/delete/$row->id_student")?>">
                       Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>