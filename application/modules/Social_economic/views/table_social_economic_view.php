<div class="card mb-3">
          <div class="card-header">
            
            <form action="<?=base_url("index.php/Student/setForm/add");?>" method="post">
             <i class="fas fa-table"></i>
                Registro socioemocional
            </form>
            </div>
            
          <div class="card-body">
              <form action="<?=base_url("index.php/Social_economic/setForm/add");?>" method="post">
                 <td>
                     <input type="submit" 
                        name="add"
                        class="btn btn-primary"
                        value="Agregar"/>
                </td>
             </form>
                        <br/>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    
                    <tr>
                        <th>Editar/Eliminar</th>
                        <th>id_student</th>
                        <th>Tiempo libre</th>
                        <th>Relacion interpersonal</th>
                        <th>Comportamiento / Estado de animo</th>
                        <th>Proyecto de vida</th>
                        <th>Antecedente de salud</th>
                        <th>Antecedente psicologico</th>
                        <th>Fecha</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Editar/Eliminar</th>
                        <th>id_student</th>
                        <th>Tiempo libre</th>
                        <th>Relacion interpersonal</th>
                        <th>Comportamiento / Estado de animo</th>
                        <th>Proyecto de vida</th>
                        <th>Antecedente de salud</th>
                        <th>Antecedente psicologico</th>
                        <th>Fecha</th>
                    
                    </tr>
                </tfoot>
                
            
        <?php foreach($get as $row){ ?>
                    <tr>
                        <td>
                            <a href="<?=base_url("index.php/Social_economic/setForm/$row->id_social_economic")?>">
                               <i class="fa fa-edit"></i>Editar</a>
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-trash"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                                <a class="dropdown-item" href="<?=base_url("index.php/Social_economic/delete/$row->id_social_economic/true")?>">
                                     Eliminar</a>
                            </div>

                        </td>
                        <td>
                            <?=$row->id_student;?>
                        </td>
                        <td>
                            <?=$row->free_time;?>
                        </td>
                        <td>
                            <?=$row->inter_persons;?>
                        </td>
                        <td>
                            <?=$row->behavior_encouragement;?>
                        </td>
                        <td>
                            <?=$row->life_proyect;?>
                        </td>
                        <td>
                            <?=$row->ant_health;?>
                        </td>
                        <td>
                            <?=$row->ant_psicology;?>
                        </td>
                        <td>
                            <?=$row->date;?>
                        </td>
                        
                    </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
            <br/>
            <form action="<?=base_url("index.php/Social_economic/setForm/add");?>" method="post">
                             <td>
                                 <input type="submit" 
                                    name="add"
                                    class="btn btn-primary"
                                    value="Agregar"/>
                            </td>
                        </form>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    
    </div>