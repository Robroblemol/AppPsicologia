<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Citas</title>
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
        <h2><?=($status)?"Modificar registro":"Agregar registro"?></h2>
        <hr class="my-4">
        <div class = "jumbotron">
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
                          <option value="fecha 0">
                                  fecha 0</option>
                          <option value="fecha 1">
                                  fecha 1</option>
                          <option value="fecha 2">
                                  fecha 2</option>
                          <option value="fecha 3">
                                  fecha 3</option>
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
        <a href="<?=base_url('index.php/Appointments')?>">Volver</a>
        </div>
        
    </div>        
        
    </body>
</html>
