<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Estudiantes</title>
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
          <h2><?=($status)?"Modificar registro":"Agregar registro"?></h2>
          <hr class="my-4">
            <div class = "jumbotron">
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
                        <br/>
                        <input type="submit" 
                                name="submit"
                                class="btn btn-primary mb-2"
                                value="Modificar"/>
                        <?php } ?>
                    <?php } else {?>
                           <input type="number" 
                                    name="id_stu"
                                    placeholder = "numero de identidad"
                                    required/>
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
                                    
                           <input type="submit" 
                                    name="add"
                                    value="Agregar"/>
                    <?php } ?>
                </form>
                <a href="<?=base_url()?>">Volver</a>  
            </div>  
        
        </div>
        
    </body>
</html>
