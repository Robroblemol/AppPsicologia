
    <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><?=($status)?"Modificar Estudiante":"Agregar Estudiante"?></div>
      <div class="card-body">
        <form action="<?=
                    base_url(
                        ($status)?
                        "index.php/Social_economic/update/true"
                        :
                        "index.php/Social_economic/add/true"
                        )
                    ?>" method="post"
                    id = setForm>
                    <?php if($status){?>
                        <?php foreach ($update as $row){ ?>
            
                        <input type="hidden" 
                            name="id_soc" 
                            value ="<?=$row -> id_social_economic ?>"/>
                        <label for="">Numero de ID</label>    
                        <input type="number" 
                            name="id_stu" 
                            class="form-control"
                            value ="<?=$row -> id_student ?>"/>
                        <label for="">Tiempo libre</label>
                        <input type="text" 
                            name="f_tim" 
                            class="form-control"
                            value="<?=$row->free_time?>"/>
                            
                        <label for="">Relacion interpersonal:</label>    
                            <select name = "i_per" class="form-control" form = "setForm">
                                <option value="Excelente"
                                    <?= ($row->inter_persons=='Excelente')? 
                                        " selected":"" ?>
                                    >Excelente</option>
                                <option value="Buena"
                                    <?= ($row->inter_persons=='Buena')? 
                                        " selected":"" ?>
                                    >Buena</option>
                                <option value="Regular"
                                     <?= ($row->inter_persons=='Regular')? 
                                        " selected":"" ?>
                                    >Regular</option>
                                <option value="Deficiente"
                                     <?= ($row->inter_persons=='Deficiente')? 
                                        " selected":"" ?>
                                    >Deficiente</option>
                            </select>   
                        <label for="">Comportamiento estado de animo</label>    
                        <input type="text" 
                            name="b_enc" 
                            class="form-control"
                            value="<?=$row->behavior_encouragement?>"/>
                        <label for="">Proyecto de vida</label>
                        <input type="text" 
                            name="l_pro" 
                            class="form-control"
                            value="<?=$row->life_proyect?>"/>
                        <label for="">Antecedentes de salud</label>
                        <input type="text" 
                            name="a_hea" 
                            class="form-control"
                            value="<?=$row->ant_health?>"/>
                        <label for="">Antecedentes psicologico</label>
                        <input type="text" 
                            name="a_psi" 
                            class="form-control"
                            value="<?=$row->ant_psicology?>"/>
    
                        </div>
                            <div class="card card-loggin mt-2">
                                <input type="submit" 
                                    name="submit"
                                    class="btn btn-primary"
                                    value="Editar"/>
                            </div>
                        <?php } ?>
                    <?php } else {?>
                            <label for="">Numero de ID</label> 
                           <input type="number" 
                                    name="id_stu"
                                    class="form-control"
                                    placeholder = "numero de identidad"
                                    required/>
                             <label for="">Tiempo libre</label>
                           <input type="text" 
                                    name="f_tim"
                                    class="form-control"
                                    placeholder = "Tiempo libre"
                                    required/>
                           <label>Relacion interpersonal: </label>
                           <select name = "i_per" class="form-control" form = "setForm">
                                  <option value="Excelente">Excelente</option>
                                  <option value="Buena">Buena</option>
                                  <option value="Regular">Regular</option>
                                  <option value="Deficiente">Deficiente</option>
                           </select>      
                             <label for="">Comportamiento estado de animo</label>            
                           <input type="text" 
                                    name="b_enc"
                                    class="form-control"
                                    placeholder = "Comportamiento y Estado de animo"
                                    required/>
                            <label for="">Proyecto de vida</label>
                           <input type="text" 
                                    name="l_pro"
                                    class="form-control"
                                    placeholder = "Proyecto de vida"
                                    required/>
                            <label for="">Antecedentes de salud</label>
                           <input type="text" 
                                    name="a_hea"
                                    class="form-control"
                                    placeholder = "Antecedentes de salud"
                                    required/>
                            <label for="">Antecedentes psicologico</label>
                           <input type="text" 
                                    name="a_psi"
                                    class="form-control"
                                    placeholder = "Antecedente psicologico"
                                    required/>
                                    
                           </div>
                                <div class="card card-loggin mt-5">
                                    <input type="submit" 
                                        name="add"
                                        class="btn btn-primary"
                                        value="Agregar"/>
                            </div>
                    <?php } ?>
                </form>
        <div class="text-center">
          <a href="<?=base_url("index.php/Student")?>">Volver</a>
        </div>
      </div>
    </div>
  </div>

    
