
    <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><?=($status)?"Modificar Acudiente":"Agregar Acudiente"?></div>
      <div class="card-body">
        <form action="<?=
                base_url(
                    ($status)?
                    "index.php/Attendants/update"
                    :
                    "index.php/Attendants/add"
                )
                ?>" method="post">
                 <?php if($status){?>
                <?php foreach ($update as $row){ ?>
                <input type="hidden"
                    name="id_relative"
                    value ="<?=$row->id_relative ?>"/>
                    <input type="text"
                        name="id_student"
                        value ="<?=$row->id_student ?>"/>
                <input type="text"
                    name="type"
                    value="<?=$row->type?>"/>
                <input type="text"
                    name="name"
                    value="<?=$row->name?>"/>
                <input type="date"
                    name="date_birth"
                    value="<?=$row->date_birth?>"/>
                <input type="text"
                    name="grade"
                    value="<?=$row->grade?>"/>
                <input type="text"
                    name="profession"
                    value="<?=$row->profession?>"/>
                <input type="text"
                    name="adress"
                    value="<?=$row->adress?>"/>
                <input type="text"
                    name="phone"
                    value="<?=$row->phone?>"/>
                <input type="text"
                    name="email"
                    value="<?=$row->email?>"/>
                <input type="submit" name="submit" value="Modificar"/>
                <?php } ?>
            <?php } else {?>
                   <input type="number"
                            name="id_student"
                            placeholder = "Id Estudiante"
                            required/>
                   <input type="text"
                            name="type"
                            placeholder = "Parentesco"
                            required/>
                   <input type="text"
                            name="name"
                            placeholder = "Nombre Acudiente"
                            required/>
                   <input type="date"
                            name="date_birth"
                            placeholder = "Fecha Nacimiento"
                            required/>
                   <input type="text"
                            name="grade"
                            placeholder = "Grado Escolaridad"
                            required/>
                   <input type="text"
                            name="profession"
                            placeholder = "profession"
                            required/>
                   <input type="text"
                            name="adress"
                            placeholder = "Direccion"
                            required/>
                   <input type="number"
                            name="phone"
                            placeholder = "Teléfono"
                            required/>
                   <input type="text"
                            name="email"
                            placeholder = "Correo"
                            required/>
                   <input type="submit"
                            name="add"
                            value="Agregar"/>
            <?php } ?>
        </form>
        <div class="text-center">
          <a href="<?=base_url("index.php/Attendants")?>">Volver</a>
        </div>
      </div>
    </div>
  </div>
