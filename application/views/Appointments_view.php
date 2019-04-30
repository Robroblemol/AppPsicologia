<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Citas </title>
    </head>
<body>
    <h2>Citas</h2>
    <?php 
      //si hay sessiones flashdata se muestran!
        if($this ->session ->flashdata('Ok'))
            echo $this ->session ->flashdata('Ok');
        if($this ->session ->flashdata('Fallo'))
            echo $this ->session ->flashdata('Fallo');
    ?>
    
    <table border="0">
         <form action="<?=base_url("index.php/Appointments/findOne");?>" 
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
                          <option value="description">Descricción</option>
                          <option value="asing_appo">
                              Fecha cita</option>
                          <option value="state_appo">
                              Estado</option>
                          <option value="date">
                              Fecha de creacción</option>
                    </select>
                </td>
                <td>
                     <input type="submit" 
                            name="findOne"
                            value="Buscar"/>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Appointments")?>">
                       Reset</a>
                </td>
        </form>
    </table>
    <table border="2">
        <tr>
            <th>id_student</th>
            <th>Descripción</th>
            <th>Fecha cita</th>
            <th>Estado</th>
            <th>Fecha creación</th>

                    
            <form action="<?=base_url("index.php/Appointments/setForm/add");?>" method="post">
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
                    <?=$row->description;?>
                </td>
                <td>
                    <?=$row->asing_appo;?>
                </td>
                <td>
                    <?=$row->state_appo;?>
                </td>
                <td>
                    <?=$row->date;?>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Appointments/setForm/$row->id_appointmet")?>">
                       Modificar</a>
                    <a href="<?=base_url("index.php/Appointments/delete/$row->id_appointmet/true")?>">
                       Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>