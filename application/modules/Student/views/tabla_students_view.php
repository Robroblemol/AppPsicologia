<div class="card mb-3">
          <div class="card-header">
            
            <form action="<?=base_url("index.php/Student/setForm/add");?>" method="post">
             <i class="fas fa-table"></i>
                Estudiantes registrados
                 <button type="submit"
                        class="btn btn-primary"
                        name="add"
                        value="Agregar">
                     <i class="fa fa-plus" aria-hidden="true"></i>
                     Agregar
                 </button>
         
            </form>
            </div>
            
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Identificacion</th>
                    <th>Nombre</th>
                    <th>Lugar de nacimiento</th>
                    <th>fecha de nacimiento</th>
                    <th>Curso actual</th>
                    <th>Repitente</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Identificacion</th>
                    <th>Nombre</th>
                    <th>Lugar de nacimiento</th>
                    <th>fecha de nacimiento</th>
                    <th>Curso actual</th>
                    <th>Repitente</th>
                    <th>Email</th>
                  </tr>
                </tfoot>
                <tbody>
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
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    
    </div>