<!DOCTYPE HTML>
<html lang="es">
  <head>
        <meta charset="utf-8"/>
        <title>Seguimiento psicologico</title>
        
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


 <!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd;">-->
    <!-- Navbar content -->
<div class ="body">
    <h2 class="display-4">Estudientes registrados</h2>
     <hr class="my-4">
    <div class ='detail'>
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
    
        <table class="table">
            <tr>
                <th>Identificacion</th>
                <th>Nombre Estudiante</th>
            
                <form action="<?=base_url("index.php/Psicology_history/setForm/add");?>" method="post">
                     <td>
                     <input type="submit" 
                            name="add"
                            class="btn btn-primary"
                            value="Agregar"/>
                     </td>
                </form>
                
            </tr>
            <?php foreach($get as $row){ ?>
            <tr>
                <td>
    
                    <?=$row->n_identification;?>
                    
                </td>
                <td>
                    <a href="<?=base_url("index.php/Psicology_history/get_detail/$row->id_student")?>"> 
                    <?=$row->name;?>
                    </a>
                </td>

                <td>
        
                    <a href="<?=base_url("index.php/Psicology_history/delete/$row->id_student/true")?>">
                       Eliminar</a>
                </td>

            </tr>
            <?php } ?>
        </table>
        <div class="container">
             <form action="<?=base_url("index.php/Psicology_history/findOne");?>" id = "find" method="post">
                <div class="row">
                <div class="col-sm">
                    <input type="texto" 
                            name="id"
                            placeholder = "valor a buscar"
                            required
                            style="border-radius: 5px;
                                   padding: 5px;"/>
                </div>
                <div class="col-sm">
                    <select  class="btn btn-info dropdown-toggle" 
                        name = "field" form = "find" style= 'padding: 5px;'>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <option value="n_identification" 
                            class="dropdown-item">Identificacion</option>
                        <option value="name"
                            class="dropdown-item">Nombre estudiente</option>
                        </div>
                    </select>
                </div>
                <div class="col-sm">
                    <input type="submit"
                        class="btn btn-secondary"
                        name="findOne"
                        value="Buscar"
                        /> 
            
                    <a href="<?=base_url("index.php/Psicology_history")?>">
                       Reset</a>
                </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
    
</body>
</html>