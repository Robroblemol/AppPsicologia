<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Acudientes</title>
    </head>
<body>
    <h2>Acudientes registrados</h2>
    <?php
      //si hay sessiones flashdata se muestran!
        if($this ->session ->flashdata('Ok'))
            echo $this ->session ->flashdata('Ok');
        if($this ->session ->flashdata('Fallo'))
            echo $this ->session ->flashdata('Fallo');
    ?>

    <table border="0">
        <form action="<?=base_url("index.php/Attendant/findOne");?>" id = "find" method="post">
                <td>
                    <input type="texto"
                           name="id"
                           placeholder = "valor a buscar"
                           required/>
               </td>
               <td>
                   <select name = "field" form = "find">
                         <option value="id_student">Id Estudiante</option>
                         <option value="type">Parenteco</option>
                         <option value="name">Nombre Acudiente</option>
                         <option value="date_birth">Fecha Nacimiento</option>
                         <option value="grade">Grado Escolaridad</option>
                         <option value="profession">Profesión</option>
                         <option value="adress">Dirección</option>
                         <option value="phone">Teléfono</option>
                         <option value="email">Correo</option>
                   </select>
               </td>
               <td>
                    <input type="submit"
                           name="findOne"
                           value="Buscar"/>
    </td>
      <td>
          <a href="<?=base_url("index.php/Attendant")?>">
          Reset</a>
        </td>
     </form>
         </table>
         <table border="2">

            <tr>
                    <th>Id Estudiante</th>
                    <th>Parenteco</th>
                    <th>Nombre Acudiente</th>
                    <th>Fecha nacimiento</th>
                    <th>Grado Escolaridad</th>
                    <th>Profesión</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>email</th>


      <form action="<?=base_url("index.php/Attendant/setForm/add");?>" method="post">
                      <td>
                              <input type="submit"
                                     name="add"
                                     value="Agregar"/>
       </td>
       </form>


       <form action="<?=base_url("index.php/Attendant/setForm/add");?>" method="post">
                       <td>

                         <input type="submit"
                                name="add"
                                class="btn btn-primary btn-block"
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
                    <?=$row->type;?>
                </td>
                <td>
                    <?=$row->name;?>
                </td>
                <td>
                    <?=$row->date_birth;?>
                </td>
                <td>
                    <?=$row->grade;?>
                </td>
                <td>
                    <?=$row->profession;?>
                </td>
                <td>
                    <?=$row->adress;?>
                </td>
                <td>

                    <?=$row->phone;?>
                </td>
                <td>

                    <?=$row->email;?>
                </td>
                <td>

                   <a href="<?=base_url("index.php/Attendant/setForm/$row->id_relative")?>">
                       Modificar</a>
                    <a href="<?=base_url("index.php/Attendant/delete/$row->id_relative")?>">
                       Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>
