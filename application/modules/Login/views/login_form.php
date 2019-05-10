
    <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><?=($status)?"Registro usuario":"Iniciar seccion"?></div>
      <div class="card-body">
    
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
                <form action="<?= base_url("index.php/Login")?>" >
                    
                        <label>Nombre de usuario</label>
                       <input type="text" 
                                name="username"
                                class="form-control"
                                placeholder = "Nombre de usuarios"
                                required/>
                        <label>Contraseña</label>
                       <input type="password" 
                                name="password"
                                class="form-control"
                                placeholder = "Ingrese contraseña"
                                required/>
        
                       <input type="submit" 
                                name="login"
                                class="btn btn-primary"
                                value="login"/>
                </form>
                <?php } ?>
        
        <div class="text-center">
          <a href="<?=base_url("index.php/Student")?>">Volver</a>
        </div>
      </div>
    </div>
  </div>