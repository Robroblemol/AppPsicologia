<div class="card mb-3">
          <div class="card-header">

            <form action="<?=base_url("index.php/Attendants/setForm/add");?>" method="post">
             <i class="fas fa-table"></i>
              Registro Acudientes
            </form>
            </div>

            <div class="card-body">
                <form action="<?=base_url("index.php/Attendant/setForm/add");?>" method="post">
                   <td>
                 <button type="submit"
                        class="btn btn-primary"
                        name="add"
                        value="Agregar">
                     <i class="fa fa-plus"></i>  Agregar</button>
          </td>
            </form>
            <br/>

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

                   <a href="<?=base_url("index.php/Attendant/setForm/$row->id_student")?>">
                      <i class="fa fa-edit"></i>Editar</a>
                     <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fa fa-trash"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                         <a class="dropdown-item" href="<?=base_url("index.php/Social_economic/delete/$row->id_student/true")?>">
                              Eliminar</a>
                     </div>

                   </td>
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
            </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            </br>
            <form action="<?=base_url("index.php/Attendant/setForm/add");?>" method="post">
                             <td>
                                 <button type="submit"
                                    name="add"
                                    class="btn btn-primary"/>
                                    <i class="fa fa-plus"></i>  Agregar</button>
                            </td>
                        </form>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
