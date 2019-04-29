<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Socio Económico </title>
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
         <form action="<?=base_url("index.php/Social_economic/findOne");?>" 
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
                          <option value="free_time">Tiempo libre</option>
                          <option value="inter_persons">
                              Relacion interpersonal</option>
                          <option value="behavior_encouragement">
                              Comportamiento/estado de animo</option>
                          <option value="life_proyect">
                              Proyecto de vida</option>
                          <option value="ant_health">
                             Antecedente de salud </option>
                          <option value="ant_psicology">
                             Antecedente de psicologico </option>
                          <option value="date">
                             fecha </option>
                    </select>
                </td>
                <td>
                     <input type="submit" 
                            name="findOne"
                            value="Buscar"/>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Social_economic")?>">
                       Reset</a>
                </td>
        </form>
    </table>
    <table border="2">
        <tr>
            <th>id_student</th>
            <th>Tiempo libre</th>
            <th>Relacion interpersonal</th>
            <th>Comportamiento / Estado de animo</th>
            <th>Proyecto de vida</th>
            <th>Antecedente de salud</th>
            <th>Antecedente psicologico</th>
            <th>Fecha</th>

                    
            <form action="<?=base_url("index.php/Social_economic/setForm/add");?>" method="post">
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
                    <?=$row->free_time;?>
                </td>
                <td>
                    <?=$row->inter_persons;?>
                </td>
                <td>
                    <?=$row->behavior_encouragement;?>
                </td>
                <td>
                    <?=$row->life_proyect;?>
                </td>
                <td>
                    <?=$row->ant_health;?>
                </td>
                <td>
                    <?=$row->ant_psicology;?>
                </td>
                <td>
                    <?=$row->date;?>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Social_economic/setForm/$row->id_social_economic")?>">
                       Modificar</a>
                    <a href="<?=base_url("index.php/Social_economic/delete/$row->id_social_economic/true")?>">
                       Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>