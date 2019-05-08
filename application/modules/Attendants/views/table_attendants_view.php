<div class="card mb-3">
          <div class="card-header">
            
            <form action="<?=base_url("index.php/Attendants/setForm/add");?>" method="post">
             <i class="fas fa-table"></i>
                Acudientes registrados
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
                    <th>Id Estudiante</th>
                    <th>Parentesco</th>
                    <th>Nombre Acudiente</th>
                    <th>Fecha nacimiento</th>
                    <th>Grado Escolaridad</th>
                    <th>Profesión</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Accion</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id Estudiante</th>
                    <th>Parentesco</th>
                    <th>Nombre Acudiente</th>
                    <th>Fecha nacimiento</th>
                    <th>Grado Escolaridad</th>
                    <th>Profesión</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Accion</th>
                  </tr>
                </tfoot>
                <tbody>
        <?php foreach($get as $row){ ?>
            <tr>
                       
                 <td>
                        <?=$row->id_student;?>
                    </td>
                    <td>
                        <?=$row->type;?>
                    </td>
                    <td>
                        <?=$row->name;?>
                    </td>
                    <td>
                        <?=$row->date_birth;?>
                    </td>
                    <td>
                        <?=$row->grade;?>
                    </td>
                    <td>
                        <?=$row->profession;?>
                    </td>
                    <td>
                        <?=$row->adress;?>
                    </td>
                    <td>

                        <?=$row->phone;?>
                    </td>
                    <td>

                        <?=$row->email;?>
                    </td>
                     <td>

                       <a href="<?=base_url("index.php/Attendant/setForm/$row->id_relative")?>">
                           Modificar</a>
                        <a href="<?=base_url("index.php/Attendant/delete/$row->id_relative")?>">
                           Eliminar</a>
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