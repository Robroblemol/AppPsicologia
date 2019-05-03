<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Registro psicologico</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <style type="text/css">
        .detail{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 5px;
        }
        .body{
            width : 70%;
            margin-left : auto;
            margin-right : auto;
            padding : 0px;
        }
    </style>
    <body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class = "body">
        
        <h2 class="display-4"><?="Seguimiento spicologico"?></h2>
         <hr class="my-4">
        <form action="<?=
            base_url(
                "index.php/Psicology_history/add/true"
                )
            ?>"
            id ="addForm"
            method="post">
        <a href="<?=base_url("index.php/Psicology_history")?>">Volver</a>
        <h2><?="Identificacion del estudiante"?></h2>
        <div class = "jumbotron">
            
            <label for="identificacionStudent">Numero de identificación</label>
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
        <h2><?="Relacion familiar"?></h2>
        <div class = "jumbotron">
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
        <h2><?="Antecendente escolar"?></h2>
        <div class = "jumbotron">
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
        </div>
        <h2><?="Historia socioemocional"?></h2>
        <div class="jumbotron">
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
        
        
        <input type="submit" 
                    name="add"
                    class="btn btn-primary mb-2"
                    value="Agregar"/>
        </form>
        <a href="<?=base_url("index.php/Psicology_history")?>">Volver</a>
        
        
        
    </div>
           
          
    </body>
</html>
