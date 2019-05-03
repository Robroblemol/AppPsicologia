<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Registro familiar</title>
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
        <div class="body">
            <h2 class="display-4"><?=($status)?"Modificar registro familiar":"Agregar registro familiar"?></h2>
            <hr class="my-4">
            <div class = "jumbotron">
                <form action="<?=
                    base_url(
                        ($status)?
                        "index.php/Family_relationship/update/true"
                        :
                        "index.php/Family_relationship/add/true"
                        )
                    ?>"
                    id ="addForm"
                    method="post">
                    <?php if($status){?>
                        <?php foreach ($update as $row){ ?>
                        
                        <input type="hidden" 
                            name="id_relationship" 
                            value ="<?=$row -> id_relationship ?>"/>
                       <label for="">Describe relacion padrasto como:</label>
                        <input type="number" 
                            name="id_stu"
                            class="form-control"
                            value="<?=$row->id_student?>"/>
                            
                            <div>
                            <br/>
                            <label for="">Describe relacion paternal como:</label>    
                            <select name = "w_fat" class="form-control" form = "addForm">
                                <option value="Excelente"
                                    <?= ($row->with_father=='Excelente')? 
                                        " selected":"" ?>
                                    >Excelente</option>
                                <option value="Buena"
                                    <?= ($row->with_father=='Buena')? 
                                        " selected":"" ?>
                                    >Buena</option>
                                <option value="Regular"
                                     <?= ($row->with_father=='Regular')? 
                                        " selected":"" ?>
                                    >Regular</option>
                                <option value="Deficiente"
                                     <?= ($row->with_father=='Deficiente')? 
                                        " selected":"" ?>
                                    >Deficiente</option>
                                <option value="N/A"
                                     <?= ($row->with_father=='N/A')? 
                                        " selected":"" ?>
                                    >N/A</option>
                            </select>    
                        </div>
                        
                        <div>
                            <br/>
                            <label for="">Describe relacion maternal como:</label>    
                            <select name = "w_mot" class="form-control" form = "addForm">
                                <option value="Excelente"
                                    <?= ($row->with_mother=='Excelente')? 
                                        " selected":"" ?>
                                    >Excelente</option>
                                <option value="Buena"
                                    <?= ($row->with_mother=='Buena')? 
                                        " selected":"" ?>
                                    >Buena</option>
                                <option value="Regular"
                                     <?= ($row->with_mother=='Regular')? 
                                        " selected":"" ?>
                                    >Regular</option>
                                <option value="Deficiente"
                                     <?= ($row->with_mother=='Deficiente')? 
                                        " selected":"" ?>
                                    >Deficiente</option>
                                <option value="N/A"
                                     <?= ($row->with_mother=='N/A')? 
                                        " selected":"" ?>
                                    >N/A</option>
                            </select>    
                        </div>
                        <div>
                            <br/>
                            <label for="">Describe relacion hermanos como:</label>    
                            <select name = "w_bro" class="form-control" form = "addForm">
                                <option value="Excelente"
                                    <?= ($row->with_brothers=='Excelente')? 
                                        " selected":"" ?>
                                    >Excelente</option>
                                <option value="Buena"
                                    <?= ($row->with_brothers=='Buena')? 
                                        " selected":"" ?>
                                    >Buena</option>
                                <option value="Regular"
                                     <?= ($row->with_brothers=='Regular')? 
                                        " selected":"" ?>
                                    >Regular</option>
                                <option value="Deficiente"
                                     <?= ($row->with_brothers=='Deficiente')? 
                                        " selected":"" ?>
                                    >Deficiente</option>
                                <option value="N/A"
                                     <?= ($row->with_brothers=='N/A')? 
                                        " selected":"" ?>
                                    >N/A</option>
                            </select>    
                        </div>   
                        <div>
                            <br/>
                            <label for="">Describe relacion padrasto como:</label>    
                            <select name = "w_step_par" class="form-control" form = "addForm">
                                <option value="Excelente"
                                    <?= ($row->with_step_parents=='Excelente')? 
                                        " selected":"" ?>
                                    >Excelente</option>
                                <option value="Buena"
                                    <?= ($row->with_step_parents=='Buena')? 
                                        " selected":"" ?>
                                    >Buena</option>
                                <option value="Regular"
                                     <?= ($row->with_step_parents=='Regular')? 
                                        " selected":"" ?>
                                    >Regular</option>
                                <option value="Deficiente"
                                     <?= ($row->with_step_parents=='Deficiente')? 
                                        " selected":"" ?>
                                    >Deficiente</option>
                                <option value="N/A"
                                     <?= ($row->with_step_parents=='N/A')? 
                                        " selected":"" ?>
                                    >N/A</option>
                            </select>    
                        </div>
                        <br/>
                        <label for="">Observaciones </label>
                        <textarea class="form-control" 
                            name="obv" 
                            rows="3"
                        ><?=$row->observations?></textarea>
                        <br/> 
                        <input type="submit" class="btn btn-primary mb-2" name="submit" value="Modificar"/>
                        <?php } ?>
                    <?php } else {?>
                           
                           <input type="number" 
                                    name="id_stu"
                                    placeholder = "id estudiante"
                                    required/>
                            <div>
                            <br/>
                                <label for="">Describe relacion paternal como:</label>    
                                <select name = "w_fat" class="form-control"form = "addForm">
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
                                <select name = "w_mot" class="form-control"form = "addForm">
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
                                <select name = "w_bro" class="form-control"form = "addForm">
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
                                <select name = "w_step_par"class="form-control" form = "addForm">
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
                                        required/>
                               <br/>        
                               <input type="submit" 
                                        name="add"
                                        value="Agregar"/>
                            </div>
        
                    <?php } ?>
                </form>
                <a href="<?=base_url("index.php/Family_relationship")?>">Volver</a>

            </div>
        </div>
        
    </body>
</html>
