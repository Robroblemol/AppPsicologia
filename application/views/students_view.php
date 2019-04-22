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
            <form action="<?=base_url("Testing/add");?>" method="post">
                <td></td>
                <td>
                   <input type="number" 
                            name="n_identification"/>
                </td>
                <td>
                   <input type="text" 
                            name="name"/>
                </td>
                <td>
                   <input type="text" 
                            name="hometown"/>
                </td>
                <td>
                   <input type="date" 
                            name="date_birth"/>
                </td> 
                <td>
                   <input type="text" 
                            name="current_course"/>
                </td>
                <td>
                   <input type="radio" 
                            name="current_course"
                            value="0"/>
                </td>
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
                   <a href="<?=base_url("Testing/add/$row->id_student")?>">
                       Modificar</a>
                    <a href="<?=base_url("Testing/delete/$row->id_student")?>">
                       Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>