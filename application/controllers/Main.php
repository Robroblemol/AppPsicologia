<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url

        $this->load->library('grocery_CRUD');
 
    }
 
public function index()
    {
     ?>   <div>
            <a href='<?php echo site_url('Main/')?>'>Inicio</a> 
            <a href='<?php echo site_url('Main/students')?>'>Estudiantes</a> 
            <a href='<?php echo site_url('Main/psychologicalHistories')?>'>Antecedentes psicologicos</a> 
            <a href='<?php echo site_url('Main/relatives')?>'>Acudientes</a> 
            <a href='<?php echo site_url('Main/family_histories')?>'>Antecedente Familiar</a> 
            <a href='<?php echo site_url('Main/family_relationship')?>'>Relacion Familiar</a>
            <a href='<?php echo site_url('Main/school_histories')?>'>Antecedente escuela</a>
        </div>
       <?php
        echo "<h1>Aqui va a haber algo de
                notificaciones creo, espero y aspiro
            </h1>";//Just an example to ensure that we get into the function
        die();
    }
public function school_histories(){
    $crud = new grocery_CRUD();
    $crud -> set_subject('Antecedente escolar');
    $crud->set_language('spanish');
    $crud->set_table('school_histories');
    $crud->set_relation('id_student', 
        'students', '{name_student}');
    
    $output = $crud->render();
    $this->_view_output($output); 
    
}
public function family_histories(){
    $crud = new grocery_CRUD();
    $crud -> set_subject('Antecedente familiar');
    $crud->set_language('spanish');
    $crud->set_table('family_histories');
    $crud->set_relation('id_student', 'students', '{name_student}');
    $crud->set_relation('id_relative', 'relatives', '{name}');
    
    $output = $crud->render();
    $this->_view_output($output); 
    
}
public function family_relationship(){
    $crud = new grocery_CRUD();
    $crud -> set_subject('relación familiar');
    $crud->set_language('spanish');
    $crud->set_table('family_relationship');
    $crud->set_relation('id_student', 
        'students', '{name_student}');

    
    
    
    $output = $crud->render();
    $this->_view_output($output); 
    
}
public function relatives(){
    $crud = new grocery_CRUD();
    $crud -> set_subject('acudiente');
    $crud->set_language('spanish');
    $crud->set_table('relatives');
    $crud->set_relation('id_alum', 
       'students', '{n_identification}');
    
    $output = $crud->render();
    $this->_view_output($output); 
    
}
    
public function students(){
    $crud = new grocery_CRUD();
    $crud -> set_subject('estudiante');
    $crud->set_language('spanish');
    $crud->set_table('students');
    
    
    $crud -> columns('n_identification','name',
                    'hometown','current_course'
                    );
    $crud->display_as('n_identification','N° Documentos de identidad');//muestra alias
    $crud->display_as('name','Nombre estudiante');
    $crud->display_as('hometown','Cuidad de origen');
    $crud->display_as('date_birth','Fecha de nacimiento');
    $crud->display_as('current_course','Curso actual');
    $crud->display_as('repet_course','Repitente');
    
    $crud->required_fields('n_identification','name_student',
                    'hometown','date_birth','current_course',
                    'repet_course');//campo obligatorio
    
    $crud -> field_type('repet_course','true_false');
    $crud->callback_add_field('repet_course', function () {
        return 
         '<div class = "pretty.radio-buttons">
                    <div class = "radio">
                        <label>
                            <input id = "field-repet_course-true"
                                type = "radio" name = "repet_course"
                                value="1">
                                 No
                        </label>
                    </div>
                    <div class = "radio">
                        <label>
                            <input id = "field-repet_course-flase"
                                type = "radio" name = "repet_course"
                                value="0" checked="checked" >
                                 Si
                        </label>
                    </div>
                </div>';
                        
                        
    });
    
    
    
    $output = $crud->render();
    
    $this->_view_output($output); 
    
}

public function psychologicalHistories(){
        $crud = new grocery_CRUD();
        $crud -> set_subject('registro psicologico');
        $crud->set_language('spanish');
        $crud->set_table('students');
        
        /*$crud->set_relation_n_n('acudiente',
                'students_relatives','relatives',
                'id_student','id_relative','name');
        */        
        $crud->set_relation_n_n('fecha nacimiento',
                'students_relatives','relatives',
                'id_student','id_relative','date_birth');
                
        $crud->set_relation_n_n('direccion',
                'students_relatives','relatives',
                'id_student','id_relative','adress');
        
       // $crud->set_relation_n_n('acudiente',
       //        'psychological_histories','family_histories',
       //         'id_student','id_relative','name');
        //$crud->set_relation_n_n('phone_acu',
        //        'family_histories','relatives',
         //       'id_student','id_relative','phone');
        
        
        
        $crud -> columns('id_student','n_identification','acudiente');
        $crud->set_relation('id_student', 'students', '{name}');
        //$crud->set_relation('id_relative', 'relatives', '{name}');
        $crud->callback_column('acudiente',array($this,'getRelatives'));
        //$crud->set_relation('n_identification', 'students', '{n_identification}');
        $crud->display_as('id_student','Nombre Estudiante');
     
        
        
        //$crud -> columns('fullname','last_update');
        //$crud->add_fields('fullname');//campo a agregar 
        //$crud->edit_fields('fullname','last_update');
        //$crud->required_fields('fullname');//campo obligatorio
        //$crud->unset_delete(); //para que no se pueda borrar
        $output = $crud->render();
        //$output = $this->grocery_crud->render();
 
        //echo "<pre>";
        //print_r($output);
        //echo "</pre>";
        //die();
        $this->_view_output($output); 
    }
    
public function getRelatives($primaty_key,$row){
    
    //crete combo

    $combo = '<select name = "id_alum" class = "chosen-select" data-placeholder="Seleccionar acudiente" style="width: 300px; display: none;">';
    $fincombo = '</select>';
    
    // getting id student  by url 
    
    $id_studentUrl = $this->uri->segment(4);
    
    //verification operation
    
    $crud = new grocery_CRUD();
    
    if(isset($id_studentUrl) && 
        $crud -> getState() == 'edit'){
    //select only relative with id_student        
            $this -> db -> select('name','date_birth','adress')
                        -> from ('relatives')
                        ->where ('id_alum',$id_studentUrl);
                        
            //$row = $this -> db -> get() -> row(0);
            
            $db = $this -> db -> get();
            $row = $db -> row(0);
            
            return $db;
            //$name = $row -> name;
            //$date_birth = $row -> date_birth;
            //$adress = $row ->adress;
            
        }
        return FALSE;

}
public function category(){
    
    $crud = new grocery_CRUD();//creamos objeto CRUD
    $crud -> set_subject('Categoria');
    $crud -> set_table('category');// indicamos la tabla que se quiere consultar
    $crud -> columns('name');
    $crud -> fields('name');
    $crud->display_as('name','Nombres');
    $output = $crud->render(); // en al variable de salida agregamos 
                                //el objeto que será mostrado.
    $this->_view_output($output);
    
}
public function tarea(){
    $crud = new grocery_CRUD();//creamos objeto CRUD
    $crud -> set_subject('Examenes');
    $crud -> set_table('examens');
    $crud -> columns('id_student','id_subject','exam_name','score','date');
    $crud->display_as('exam_name','Nombre prueba');
    $crud->display_as('date','Fecha');
    $crud->display_as('id_subject','Materia');
    $crud->display_as('score','Calificación');
    $crud->set_relation('id_subject', 'subjects', '{name}');
    $crud->set_relation('id_student', 'students', '{name}');
    $crud->display_as('id_student','Estudiante');
    
    $output = $crud->render(); // en al variable de salida agregamos 
    $this->_view_output($output);
    
    
}
    function _view_output($output = null){
        
        $this->load->view('FormView.php',$output); 
   
    }
} 



 
 
/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
 