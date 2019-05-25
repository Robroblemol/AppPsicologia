
    <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><?=($status)?"Modificar Cita":"Agregar Cita"?></div>
      <div class="card-body">
        <form action="<?=
            base_url(
                ($status)?
                "index.php/Appointments/update/true"
                :
                "index.php/Appointments/add/true"
                )
            ?>" method="post"
            id = setForm>
            <?php if($status){?>
                <?php foreach ($update as $row){ ?>
                <input type="hidden" 
                    name="id_app"
                    class="form-control"
                    value ="<?=$row -> id_appointmet ?>"/>
                <label for="identificacionStudent">Numero de identificación</label>
                <input type="number" 
                    name="id_stu"
                    class="form-control"
                    value ="<?=$row -> id_student ?>"/>
                <label >Selecsion fecha de cita</label>
                <input type="text" 
                    name="des"
                    class="form-control"
                    value ="<?=$row -> description ?>"/>
                 <label >Seleccion fecha de cita</label>
                    <select name = "a_app" class="form-control" form = "setForm">
                      <option value="fecha 0"
                        <?= ($row->asing_appo=='fecha 0')? 
                        " selected":"" ?>
                        > fecha 0</option>
                      <option value="fecha 1"
                        <?= ($row->asing_appo=='fecha 1')? 
                        " selected":"" ?>
                        > fecha 1</option>
                      <option value="fecha 2"
                        <?= ($row->asing_appo=='fecha 2')? 
                        " selected":"" ?>
                        > fecha 2</option>
                      <option value="fecha 3 "
                      <?= ($row->asing_appo=='fecha 3')? 
                        " selected":"" ?>
                        > fecha 3</option>
                   </select> 
                 
                <div>
                     <input type="checkbox" 
                                name="s_app"
                                value="1"
                                <?= 
                                    $sel = ($row->state_appo == 1)?
                                    "checked" : "";
                                ?> />
                </div>  
               
                <input type="submit" 
                        name="submit" 
                        class="btn btn-primary mb-2"    
                        value="Modificar"/>
                <?php } ?>
            <?php } else {?>
                   <label for="identificacionStudent">Numero de identificación</label>
                   <input type="number" 
                            name="id_stu"
                            class="form-control"
                            placeholder = "Numero de identidad"
                            required/>
                    <label >Descripción</label>
                    <input type="text" 
                            name="des"
                            placeholder = "Descripción"
                            class="form-control"
                            required/>                            
                    <label >Seleccion fecha de cita</label>
                    <select name = "a_app" class="form-control"
                            form = "setForm">
                        <?php 
                        //echo $checkApp->
                        foreach ($checkApp as $row){ ?>
                          <option value="<?=$row->id_asing_date; ?>">
                                  <?=$row->asing_appo; ?></option>

                        <?php }?>          
                     </select> 
    
                    
                    <div class="form-group form-check">
                        <!-- <input type="week" 
                                name="a_app"
                                /> -->
                        <input type="checkbox" 
                            name="s_app"
                            value=1 
                            class="form-check-input"/> 
                        <label class="form-check-label">Estado</label>
                    </div>
                    
                  <div>
                    <input type="submit" 
                        name="add"
                        class="btn btn-primary"
                        value="Agregar"/>
                      
                  </div>
                            
                            

            <?php } ?>
        </form>

        <div class="text-center">
          <a href="<?=base_url("index.php/Appointments")?>">Volver</a>
        </div>
      </div>
    </div>
  </div>
