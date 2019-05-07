<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Historial escolar </title>
    </head>
<body>
    <h2>Historial escolar</h2>
    <?php 
      //si hay sessiones flashdata se muestran!
        if($this ->session ->flashdata('Ok'))
            echo $this ->session ->flashdata('Ok');
        if($this ->session ->flashdata('Fallo'))
            echo $this ->session ->flashdata('Fallo');
    ?>
    
    <table border="0">
         <form action="<?=base_url("index.php/School_histories/findOne");?>" 
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
                    </select>
                </td>
                <td>
                     <input type="submit" 
                            name="findOne"
                            value="Buscar"/>
                </td>
                <td>
                    <a href="<?=base_url("index.php/School_histories")?>">
                       Reset</a>
                </td>
        </form>
    </table>
    <table border="2">
        <tr>
            <th>id_student</th>
            <th>Historial escolar</th>
            <th>Habilidades / dificiltades</th>

                    
            <form action="<?=base_url("index.php/School_histories/setForm/add");?>" method="post">
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
                    <?=$row->histori_school;?>
                </td>
                <td>
                    <?=$row->skills_dificulties;?>
                </td>
                <td>
                    <a href="<?=base_url("index.php/School_histories/setForm/$row->id_school_histories")?>">
                       Modificar</a>
                    <a href="<?=base_url("index.php/School_histories/delete/$row->id_school_histories/true")?>">
                       Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>