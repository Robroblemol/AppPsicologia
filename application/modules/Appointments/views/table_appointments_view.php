<div class="card mb-3">
          <div class="card-header">
            
            <form action="<?=base_url("index.php/Appointments/setForm/add");?>" method="post">
             <i class="fas fa-table"></i>
                Citas agendadas
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
                    <th>id_student</th>
                    <th>Descripción</th>
                    <th>Fecha cita</th>
                    <th>Estado</th>
                    <th>Fecha creación</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>id_student</th>
                    <th>Descripción</th>
                    <th>Fecha cita</th>
                    <th>Estado</th>
                    <th>Fecha creación</th>
                    <th></th>
                  </tr>
                </tfoot>
                <tbody>
        <?php foreach($get as $row){ ?>
            <tr>
                    <td>
                        <?=$row->id_student;?>
                    </td>
                    <td>
                        <?=$row->description;?>
                    </td>
                    <td>
                        <?php
                            switch ($row->asing_appo) {
                                case 1:
                                   echo 'lunes 8:15 am';
                                   break;
                                case 2:
                                   echo 'martes 8:15 am';
                                   break;
                                case 3:
                                   echo 'miercoles 8:15 am';
                                   break;
                                case 4:
                                   echo 'jueves 8:15 am';
                                   break;
                                case 5:
                                   echo 'viernes 8:15 am';
                                    break;
                            }
    
                        ?>
                    </td>
                    <td>
                        <?=$row->state_appo;?>
                    </td>
                    <td>
                        <?=$row->date;?>
                    </td>                     <td>

                       <a href="<?=base_url("index.php/Appointments/setForm/$row->id_appointmet")?>">
                           Modificar</a>
                        <a href="<?=base_url("index.php/Appointments/delete/$row->id_appointmet/true")?>">
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