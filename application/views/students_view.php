<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Estudientes</title>
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
   
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <!-- Navbar content -->
        <a href='<?php echo site_url('Psicology_history')?>'>
            Seguimiento Psicologico</a>
        <a href='#'>
            Estudiantes</a>
    
     </nav>
     
     <div class=body>
       <h2>Estudientes registrados</h2>
       <hr class="my-4">
         <div class = "jumbotron">
            <?php 
            //si hay sessiones flashdata se muestran!
            if($this ->session ->flashdata('Ok')){?>
                <div class="alert alert-success" 
                    role="alert">
                    <?= $this ->session ->flashdata('Ok');?>
                </div>
           <?php }
            if($this ->session ->flashdata('Fallo')){?>
                <div class="alert alert-info" role="alert">
                    <?=$this ->session ->flashdata('Fallo');?>
                </div>
            <?php }?>
    <form action="<?=base_url("index.php/Student/setForm/add");?>" method="post">
             <td>
                 <input type="submit"
                        class="btn btn-primary"
                        name="add"
                        value="Agregar"/>
            </td>
    </form>
    <table class="table table-responsive" style="width= 80%;padding: 5px;">
                            
        <tr>
            <th>Identificacion</th>
            <th>Nombre Estudiante</th>
            <th>Lugar nacimiento</th>
            <th>Fecha nacimientos</th>
            <th>Curso acutal</th>
            <th>repitente</th>
            <th>email</th>
            
        </tr>
        <?php foreach($get as $row){ ?>
            <tr>
                       
                <td>
                    <a href="<?=base_url("index.php/Student/setForm/$row->id_student")?>">
                    <?=$row->n_identification;?>
                    </a>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Student/setForm/$row->id_student")?>">
                        <?=$row->name;?>
                    </a>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Student/setForm/$row->id_student")?>">
                        <?=$row->hometown;?>
                    </a>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Student/setForm/$row->id_student")?>">
                        <?=$row->date_birth;?>
                    </a>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Student/setForm/$row->id_student")?>">
                        <?=$row->current_course;?>
                    </a>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Student/setForm/$row->id_student")?>">
                        <?=($row->repet_course==1)? "Si":"No";?>
                    </a>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Student/setForm/$row->id_student")?>">
                        <?=$row->email;?>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table> 
    
    <div class="container">
         <form action="<?=base_url("index.php/Student/findOne");?>" id = "find" method="post">
                 <div class="row">
                     <div class="col-sm">
                         <input type="texto" 
                                name="id"
                                placeholder = "valor a buscar"
                                required
                                class="form-control"
                             />
                    </div>
                <div class="col-sm">
                    <select class="form-control"
                        name = "field" form = "find">
                          <option value="n_identification">Identificacion</option>
                          <option value="name">Nombre estudiente</option>
                          <option value="hometown">Lugar nacimiento</option>
                          <option value="date_birth">Fecha de nacimiento</option>
                          <option value="current_course">Curso acutal</option>
                          <option value="repet_course">Repitente</option>
                          <option value="email">email</option>
                    </select>
                </div>
                <div class="col-sm">
                     <input type="submit"
                            class="btn btn-info"
                            name="findOne"
                            value="Buscar"/>
                    <a href="<?=base_url("index.php/Student")?>">
                       Reset</a>
                </div>
            
        </form>
    </div>
         
    </div>
    
    </div>
    
</body>
</html>