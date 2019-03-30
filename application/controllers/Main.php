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
        </div>
       <?php
        echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
        die();
    }
public function students(){
    $crud = new grocery_CRUD();
    $crud -> set_subject('estudiante');
    $crud->set_table('students');
    $crud -> fields('n_identification','name_student',
                    'hometown','date_birth','current_course',
                    'repet_course','email');
    $crud->display_as('n_identification','N° Documentos de identidad');//muestra alias
    $crud->display_as('name_student','Nombre estudiante');
    $crud->display_as('hometown','Cuidad de origen');
    $crud->display_as('date_birth','Fecha de nacimiento');
    $crud->display_as('current_course','Curso actual');
    $crud->display_as('repet_course','Repitente');
    
    $crud->required_fields('n_identification','name_student',
                    'hometown','date_birth','current_course',
                    'repet_course','email');//campo obligatorio
    
    
    
    $output = $crud->render();
    
    $this->_view_output($output); 
    
}

public function psychologicalHistories(){
        $crud = new grocery_CRUD();
        $crud -> set_subject('registro psicologico');
        $crud->set_table('psychological_histories');
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
 