    <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><?=($status)?"Modificar Estudiante":"Agregar Estudiante"?></div>
      <div class="card-body">
       <form action="<?=
                    base_url(
                        ($status)?
                        "index.php/School_histories/update/true"
                        :
                        "index.php/School_histories/add/true"
                        )
                    ?>"
                    id ="addForm"
                    method="post">
                    <?php if($status){?>
                        <?php foreach ($update as $row){ ?>
                        <input type="hidden" 
                            name="id_sch" 
                            class="form-control"
                            value ="<?=$row -> id_school_histories ?>"/>
                       <label for="identificacionStudent">Numero de identificación</label>
                        <input type="number" 
                            name="id_stu" 
                            class="form-control"
                            value ="<?=$row -> id_student ?>"/>
                        <label >Historial escolar</label>
                        <input type="text" 
                            name="h_sch" 
                            class="form-control"
                            value="<?=$row->histori_school?>"/>
                        <label >Habilidades y dificultades</label>
                        <input type="text"  
                            name="s_dif" 
                            class="form-control"
                            value="<?=$row->skills_dificulties?>"/>
                
                        <div class="card card-loggin  mx-auto mt-5">
                            <input type="submit" 
                                    name="submit" 
                                    class="btn btn-primary"
                                    value="Editar"/>
                        </div>
                        <?php } ?>
                    <?php } else {?>
                            <label for="identificacionStudent">Numero de identificación</label>
                           <input type="number" 
                                    name="id_stu"
                                    class="form-control"
                                    placeholder = "numero de identidad"
                                    required/>
                            <label >Historial escolar</label>
                           <input type="text" 
                                    name="h_sch"
                                    class="form-control"
                                    placeholder = "historial escolar"
                                    required/>
                            <label >Habilidades y dificultades</label>
                           <input type="text" 
                                    name="s_dif"
                                    class="form-control"
                                    placeholder = "Dificultades y habilidades"
                                    required/>
                    
                                <div class="card card-loggin  mx-auto mt-5">
                                    <input type="submit" 
                                        name="add"
                                        class="btn btn-primary"
                                        value="Agregar"/>
                                </div>
                    <?php } ?>
                </form>
        <div class="text-center">
          <a href="<?=base_url("index.php/Psicology_history")?>">Volver</a>
        </div>
      </div>
    </div>
  </div>

    
