<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Estudiantes</title>
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
          <!-- Beginning header -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <div class ="body"> 
            <h2><?=($status)?"Modificar registro":"Agregar registro"?></h2>
            <hr class="my-4">
            <div class ="jumbotron">
                    <form action="<?=
                    base_url(
                        ($status)?
                        "index.php/School_histories/update/true"
                        :
                        "index.php/School_histories/add/true"
                        )
                    ?>" method="post">
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
                        <br>
                        <input type="submit" 
                                name="submit" 
                                class="btn btn-primary mb-2"
                                value="Modificar"/>
                        <?php } ?>
                    <?php } else {?>
                           <input type="number" 
                                    name="id_stu"
                                    class="form-control"
                                    placeholder = "numero de identidad"
                                    required/>
                           <input type="text" 
                                    name="h_sch"
                                    class="form-control"
                                    placeholder = "historial escolar"
                                    required/>
                           <input type="text" 
                                    name="s_dif"
                                    class="form-control"
                                    placeholder = "Dificultades y habilidades"
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
