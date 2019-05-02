<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Registro psicologico</title>
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
    <div class = "body">
        <h1><?="Seguimiento spicologico"?></h1>
        <form action="<?=
            base_url(
                "index.php/Psicology_history/add/true"
                )
            ?>"
            id ="addForm"
            method="post">
        <div class ="detail">
        <h2><?="Identificacion del estudiante"?></h2>
            <input type="number" 
                    name="n_ide"
                    placeholder = "numero de identidad"
                    required/>
           <input type="text" 
                    name="nam"
                    placeholder = "nombre estudiante"
                    required/>
           <input type="text" 
                    name="hom"
                    placeholder = "ciudad origen"
                    required/>
           <input type="date" 
                    name="d_bir"
                    placeholder = "fecha nacimiento"
                    required/>
           <input type="text" 
                    name="c_cou"
                    placeholder = "curso actual"
                    required/>
           <input type="checkbox" 
                    name="r_cou"
                    value=1 > Repitente </input>
           <input type="email" 
                    name="ema"
                    placeholder = "correo estudiante"
                    required/>

        </div>
        <h2><?="Relacion familiar"?></h2>
        <div class = "detail">
            <br/>
            <div>
                <label for="">Describe relacion paternal como:</label>    
                <select name = "w_fat" form = "addForm">
                    <option value="Exclente">Exclente</option>
                    <option value="Buena">Buena</option>
                    <option value="Regular">Regular</option>
                    <option value="Deficiente">Deficiente</option>
                    <option value="N/A">N/A</option>
                </select>    
            </div>
            <br/>
            <div>
                <label for="">Describe relacion maternal como: </label>
                <select name = "w_mot" form = "addForm">
                    <option value="Exclente">Exclente</option>
                    <option value="Buena">Buena</option>
                    <option value="Regular">Regular</option>
                    <option value="Deficiente">Deficiente</option>
                    <option value="N/A">N/A</option>
                </select>    
            </div>
            <br/>
            <div>
                <label for="">Describe relacion hermanos como: </label>
                <select name = "w_bro" form = "addForm">
                    <option value="Exclente">Exclente</option>
                    <option value="Buena">Buena</option>
                    <option value="Regular">Regular</option>
                    <option value="Deficiente">Deficiente</option>
                    <option value="N/A">N/A</option>
                </select>    
            </div>
            <br/>
            <div>
                <label for="">Describe relacion padrasto como: </label>
                <select name = "w_step_par" form = "addForm">
                    <option value="Exclente">Exclente</option>
                    <option value="Buena">Buena</option>
                    <option value="Regular">Regular</option>
                    <option value="Deficiente">Deficiente</option>
                    <option value="N/A">N/A</option>
                </select>    
            </div>
            <br/>
            <div>
                <input type="textarea" 
                        name="obv"
                        placeholder = "Observaciones"
                        style = "
                            width: 30%;
                            padding: 12px;
                            height:200px;
                            "
                        />
               <br/>        
            </div>
        </div>
        <h2><?="Antecendente escolar"?></h2>
        <div class = "detail">
            <input type="text" 
                name="h_sch"
                placeholder = "historial escolar"
                required/>
            <input type="text" 
                name="s_dif"
                placeholder = "Dificultades y habilidades"
                required/>
        </div>
        <h2><?="Historia socioemocional"?></h2>
        <div class="detail">
            <input type="text" 
                    name="f_tim"
                    placeholder = "Tiempo libre"
                    required/>
           <label for="">Relacion interpersonal: </label>
           <select name = "i_per" form = "setForm">
                  <option value="Excelente">Excelente</option>
                  <option value="Buena">Buena</option>
                  <option value="Regular">Regular</option>
                  <option value="Deficiente">Deficiente</option>
           </select>      
                    
           <input type="text" 
                    name="b_enc"
                    placeholder = "Comportamiento y Estado de animo"
                    required/>
           <input type="text" 
                    name="l_pro"
                    placeholder = "Proyecto de vida"
                    required/>
           <input type="text" 
                    name="a_hea"
                    placeholder = "Antecedentes de salud"
                    required/>
           <input type="text" 
                    name="a_psi"
                    placeholder = "Antecedente psicologico"
                    required/>
           
            
        </div>
        
        
        <input type="submit" 
                    name="add"
                    value="Agregar"/>
        </form>
        <a href="<?=base_url("index.php/Psicology_history")?>">Volver</a>
        
        
        
    </div>
           
          
    </body>
</html>
