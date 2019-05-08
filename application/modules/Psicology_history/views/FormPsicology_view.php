<?php 
    echo modules::run("Home/get_head");
    echo modules::run("Home/get_nav");
    echo modules::run("Home/get_header");
    ?>
<h2 class="display-4"><?="Seguimiento psicologico"?></h2>
    <div class="container">

        
         <hr class="my-4">
        <form action="<?=
            base_url(
                "index.php/Psicology_history/add/true"
                )
            ?>"
            id ="addForm"
            method="post">
            <a href="<?=
            base_url("index.php/Psicology_history")?>"
            >
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
          </a>
        <!-- agregar estudiante -->       
        <div class="card card-register  mx-auto mt-10">
         <div class="card-header">Agregar Estudiante</div>
          <div class="card-body">  
            <input type="number" 
                    class="form-control" 
                    name="n_ide"
                    placeholder = "Numero de identidad"
                    required/>
           <label for="maneStudent">Nombre estudiante</label>
           <input type="text" 
                    name="nam"
                    class="form-control" 
                    placeholder = "Nombre estudiante"
                    required/>
            <label for="homeBirthStudent">Ciudad de nacimiento</label>
           <input type="text" 
                    name="hom"
                    class="form-control" 
                    placeholder = "Ciudad origen"
                    required/>
           <label for="dateBirthStudent">Fecha de nacimiento</label>
           <input type="date" 
                    name="d_bir"
                    class="form-control" 
                    placeholder = "fecha nacimiento"
                    required/>
           <label for="courseStudent">Curso actual</label>
           <input type="text" 
                    name="c_cou"
                    class="form-control" 
                    placeholder = "Curso actual"
                    required/>
           <div class="form-group form-check">
               <input type="checkbox" 
                        name="r_cou"
                        class="form-check-input"
                        value=1 /> 
                <label class="form-check-label">Repitente</label>
            </div>
            <label for="emailStudent">Email</label>
           <input type="email" 
                    name="ema"
                    class="form-control" 
                    placeholder = "Email"
                    required/>
          </div>
        </div>
        <!-- Relacion familiar--> 
        <div class="card card-register  mx-auto mt-5">
         <div class="card-header">Relacion familiar</div>
          <div class="card-body">  
            <br/>
            <div>
                <label for="">Describe relacion paternal como:</label>    
                <select name = "w_fat" class="form-control" form = "addForm">
                    <option value="Excelente">Excelente</option>
                    <option value="Buena">Buena</option>
                    <option value="Regular">Regular</option>
                    <option value="Deficiente">Deficiente</option>
                    <option value="N/A">N/A</option>
                </select>    
            </div>
            <br/>
            <div>
                <label for="">Describe relacion maternal como: </label>
                <select name = "w_mot" class="form-control" form = "addForm">
                    <option value="Excelente">Excelente</option>
                    <option value="Buena">Buena</option>
                    <option value="Regular">Regular</option>
                    <option value="Deficiente">Deficiente</option>
                    <option value="N/A">N/A</option>
                </select>    
            </div>
            <br/>
            <div>
                <label for="">Describe relacion hermanos como: </label>
                <select name = "w_bro" class="form-control" form = "addForm">
                    <option value="Excelente">Excelente</option>
                    <option value="Buena">Buena</option>
                    <option value="Regular">Regular</option>
                    <option value="Deficiente">Deficiente</option>
                    <option value="N/A">N/A</option>
                </select>    
            </div>
            <br/>
            <div>
                <label for="">Describe relacion padrasto como: </label>
                <select name = "w_step_par" class="form-control" form = "addForm">
                    <option value="Excelente">Excelente</option>
                    <option value="Buena">Buena</option>
                    <option value="Regular">Regular</option>
                    <option value="Deficiente">Deficiente</option>
                    <option value="N/A">N/A</option>
                </select>    
            </div>
            <br/>
            <div>
            <label for="">Observaciones </label>
                <textarea class="form-control"
                        name="obv"
                        id="obv"
                        placeholder = "Observaciones"
                        rows="3"
                        /></textarea>
               <br/>        
            </div>
          </div>
        </div>
         <!-- Historial escolar-->      
         <div class="card card-register  mx-auto mt-5">
         <div class="card-header">Historial escolar</div>
          <div class="card-body">  
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
          </div>
        </div>
        <!-- Historial socioemocional--> 
        <div class="card card-register  mx-auto mt-5">
         <div class="card-header">Historia socioemocional</div>
          <div class="card-body"> 
            <label >Tiempo libre</label>
            <input type="text" 
                    name="f_tim"
                    class="form-control" 
                    placeholder = "Tiempo libre"
                    required/>
           <label for="">Relacion interpersonal </label>
           <select name = "i_per" class="form-control" form = "setForm">
                  <option value="Excelente">Excelente</option>
                  <option value="Buena">Buena</option>
                  <option value="Regular">Regular</option>
                  <option value="Deficiente">Deficiente</option>
           </select>      
           <label for="">Comportamiento y estado de animo </label>            
           <input type="text" 
                    name="b_enc"
                    class="form-control" 
                    placeholder = "Comportamiento y Estado de animo"
                    required/>
           <label for="">Proyecto de vida </label>
           <input type="text" 
                    name="l_pro"
                    class="form-control" 
                    placeholder = "Proyecto de vida"
                    required/>
           <label for="">Antecedente de salud </label>    
           <input type="text" 
                    name="a_hea"
                    class="form-control" 
                    placeholder = "Antecedentes de salud"
                    required/>
           <label for="">Antecedentes spicologico </label>
           <input type="text" 
                    name="a_psi"
                    class="form-control" 
                    placeholder = "Antecedente psicologico"
                    required/>
           
           </div> 
        </div>
        
        <div class="card card-register  mx-auto mt-5">
        <input type="submit" 
                    name="add"
                    class="btn btn-primary"
                    value="Agregar"/>
        </form>
        
        </div> 
    <a href="<?=
            base_url("index.php/Psicology_history")?>"
            >
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
          </a>
    </div>
           
          
<?php 
    echo modules::run("Home/get_footer");
?>
      