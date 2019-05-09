<div class="card mb-3">
          <div class="card-header">
            
            <form action="<?=base_url("index.php/Psicology_history/setForm/add");?>" method="post">
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
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Identificacion</th>
                    <th>Nombre</th>
                    <th></th>
                  </tr>
                </tfoot>
                <tbody>
                    <?php foreach($get as $row){ ?>
                <tr>
                       
                <td>
                    <a href="<?=base_url("index.php/Psicology_history/get_detail/$row->id_student")?>">
                    <?=$row->n_identification;?>
                    </a>
                </td>
                <td>
                    <a href="<?=base_url("index.php/Psicology_history/get_detail/$row->id_student")?>">
                        <?=$row->name;?>
                    </a>
                </td>
                <td>
                       
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-trash"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="<?=base_url("index.php/Psicology_history/delete/$row->id_student/true")?>">
                             Eliminar</a>
                    </div>
                        
                </td>
                
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    
    </div>