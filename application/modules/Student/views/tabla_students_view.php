<div class="card mb-3">
          <div class="card-header">

            <form action="<?=base_url("index.php/Student/setForm/add");?>" method="post">
             <i class="fas fa-table"></i>
                 Registro Estudiantes
               </form>
               </div>

               <div class="card-body">
                   <form action="<?=base_url("index.php/Student/setForm/add");?>" method="post">
                      <td>

                 <button type="submit"
                         name="add"
                         class="btn btn-primary"
                        value="Agregar">
                       <i class="fa fa-plus"></i>  Agregar</button>

                 </td>
              </form>
                             <br/>

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

                    <?=$row->n_identification;?>
               </td>
                <td>
                        <?=$row->name;?>
                </td>
                <td>
                        <?=$row->hometown;?>
                </td>
                <td>
                        <?=$row->date_birth;?>
                </td>
                <td>
                        <?=$row->current_course;?>
                </td>
                    <td>
                        <?=($row->repet_course==1)? "Si":"No";?>
                </td>
                    <td>
                        <?=$row->email;?>
                    </td>

            </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <br/>
            <form action="<?=base_url("index.php/Student/setForm/add");?>" method="post">
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
