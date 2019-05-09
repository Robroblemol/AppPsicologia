
    <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><?=($status)?"Modificar Estudiante":"Agregar Estudiante"?></div>
      <div class="card-body">
        <form action="<?=
                base_url(
                    ($status)?
                    "index.php/Student/update"
                    :
                    "index.php/Student/add"
                )
                ?>" method="post">
                <?php if($status){?>
                    <?php foreach ($update as $row){ ?>
                    <input type="hidden" 
                        name="id_student" 
                        value ="<?=$row -> id_student ?>"/>
                    <label>Número de identificación</label>
                    <input type="number" 
                        name="n_identification" 
                        class="form-control"
                        value="<?=$row->n_identification?>"/>
                    <label for="maneStudent">Nombre estudiante</label>
                    <input type="text"  
                        name="name" 
                        class="form-control"
                        value="<?=$row->name?>"/>
                    <label for="homeBirthStudent">Ciudad de nacimiento</label>
                    <input type="text" 
                        name="hometown"
                        class="form-control"
                        value="<?=$row->hometown?>"/>
                    <label for="dateBirthStudent">Fecha de nacimiento</label>
                    <input type="date" 
                        name="date_birth"
                        class="form-control"
                        value="<?=$row->date_birth?>"/>
                    <label for="courseStudent">Curso actual</label>
                    <input type="text" 
                        name="current_course" 
                        class="form-control"
                        value="<?=$row->current_course?>"/>
                    <div class="form-group form-check">
                        <input type="checkbox" 
                                    name="repet_course"
                                    value="1"
                                    <?= 
                                        $sel = ($row->repet_course == 1)?
                                        "checked" : "";
                                    ?> 
                                    class="form-check-input"/>
                         <label class="form-check-label">Repitente</label>
                    </div>
                    <label for="emailStudent">Email</label>
                    <input type="email" 
                        name="email"
                        class="form-control"
                        value="<?=$row->email?>"/>
                    <br>
                    <input type="submit" class="btn btn-info" name="submit" value="Modificar"/>
                    <?php } ?>
                <?php } else {?>
                        <label for="identificacionStudent">Numero de identificación</label>
                       <input type="number" 
                                name="n_identification"
                                class="form-control"
                                placeholder = "Numero de identidad"
                                required/>
                        <label for="maneStudent">Nombre estudiante</label>
                       <input type="text" 
                                name="name"
                                class="form-control"
                                placeholder = "Nombre estudiante"
                                required/>
                        <label for="homeBirthStudent">Ciudad de nacimiento</label>
                       <input type="text" 
                                name="hometown"
                                class="form-control"
                                placeholder = "Ciudad origen"
                                required/>
                        <label for="dateBirthStudent">Fecha de nacimiento</label>
                       <input type="date" 
                                name="date_birth"
                                class="form-control"
                                placeholder = "fecha nacimiento"
                                required/>
                        <label for="courseStudent">Curso actual</label>
                       <input type="text" 
                                name="current_course"
                                class="form-control"
                                placeholder = "curso actual"
                                required/>
                        <div>
                           <input type="checkbox" 
                                name="repet_course"
                                class="form-check-input"
                                value=1 />
                            <label class="form-check-label">Repitente</label>        
                        </div>
                       
                     <label for="emailStudent">Email</label>
                       <input type="email" 
                                name="email"
                                class="form-control"
                                placeholder = "correo estudiante"
                                required/>
                       <input type="submit" 
                                name="add"
                                class="btn btn-primary mb-2"
                                value="Agregar"/>
                <?php } ?>
        </form>
        <div class="text-center">
          <a href="<?=base_url("index.php/Student")?>">Volver</a>
        </div>
      </div>
    </div>
  </div>

    
