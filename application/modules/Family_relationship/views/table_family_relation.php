<div class="card mb-3">
          <div class="card-header">
            
            <form action="<?=base_url("index.php/Student/setForm/add");?>" method="post">
             <i class="fas fa-table"></i>
                Registro familiar
            </form>
            </div>
            
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id_student</th>
                        <th>Relacion padre</th>
                        <th>Relacion madre</th>
                        <th>Relacion hermanos</th>
                        <th>Relacion padrastros</th>
                        <th>Observaciones</th>
                        <th>Fecha</th>
                        
                        <form action="<?=base_url("index.php/Family_relationship/setForm/add");?>" method="post">
                             <td>
                                 <input type="submit" 
                                    name="add"
                                    class="btn btn-primary"
                                    value="Agregar"/>
                            </td>
                        </form>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id_student</th>
                        <th>Relacion padre</th>
                        <th>Relacion madre</th>
                        <th>Relacion hermanos</th>
                        <th>Relacion padrastros</th>
                        <th>Observaciones</th>
                        <th>Fecha</th>
                        
                        <form action="<?=base_url("index.php/Family_relationship/setForm/add");?>" method="post">
                             <td>
                                 <input type="submit" 
                                    name="add"
                                    class="btn btn-primary"
                                    value="Agregar"/>
                            </td>
                        </form>
                    </tr>
                </tfoot>
                
            
        <?php foreach($get as $row){ ?>
                    <tr>
                        <td>
                            <?=$row->id_student;?>
                        </td>
                        <td>
                            <?=$row->with_father;?>
                        </td>
                        <td>
                            <?=$row->with_mother;?>
                        </td>
                        <td>
                            <?=$row->with_brothers;?>
                        </td>
                        <td>
                            <?=$row->with_step_parents;?>
                        </td>
                        <td>
                            <?=$row->observations;?>
                        </td>
                        <td>
                            <?=$row->date;?>
                        </td>
                        <td>
                            <a href="<?=base_url("index.php/Family_relationship/setForm/$row->id_relationship")?>">
                               <i class="fa fa-edit"></i>Editar</a>
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-trash"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                                <a class="dropdown-item" href="<?=base_url("index.php/Family_relationship/delete/$row->id_relationship/true")?>">
                                     Eliminar</a>
                            </div>

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