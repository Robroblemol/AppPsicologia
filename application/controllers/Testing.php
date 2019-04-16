<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Testing extends CI_Controller {
 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url

        $this->load->model('grocery_crud_model');
        $this->load->library('grocery_CRUD');
        
 
    }
 
public function index()
    {
     ?>   <div>
            <a href='<?php echo site_url('Testing/')?>'>Inicio</a> 
            <a href='<?php echo site_url('Testing/students')?>'>Estudiantes</a> 
            <a href='<?php echo site_url('Testing/psychologicalHistories')?>'>Antecedentes psicologicos</a> 
            <a href='<?php echo site_url('Testing/relatives')?>'>Acudientes</a> 
        
        </div>
       <?php
        echo "<h1>Aqui va a haber algo de
                notificaciones creo, espero y aspiro
            </h1>";//Just an example to ensure that we get into the function
        die();
        
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
        $this->load->helper('set_form');
        return setBoleanDataAdd();
                        
    });
    
    $crud->callback_read_field('repet_course', function ($value, $primaty_key) {
        $this->load->helper('set_form');
        return fromRepeatView($value);
    });
    
    
    
    
    $output = $crud->render();
    
    $this->_view_output($output); 
    
}

public function psychologicalHistories(){
        $crud = new grocery_CRUD();
        $crud -> set_subject('registro psicologico');
        $crud->set_language('spanish');
        $crud->set_table('students');
        
       /* $crud->set_relation_n_n('acudiente',
                'students_relatives','relatives',
                'id_student','id_relative','name');
        */
        $crud->add_fields(
                        'n_identification',
                        'name',
                        'hometown',
                        'date_birth',
                        'current_course',
                        'repet_course',
                        'email',
                        ' ',
                        'acudiente',
                        'parentesco',
                        'acudiente fecha nacimiento',
                        'grade','profesion',
                        'dirección','telefono',
                        'email');       
        
        
        
        $crud -> columns('id_student','n_identification');
        $crud->set_relation('id_student', 'students', '{name}');
        //$crud->callback_insert(array($this,'insertAcudiente'));
     
        
        $crud->callback_edit_field('acudiente',array($this,'getRelatives'));
        $crud->callback_add_field(' ',array($this,'addRelatives'));
       /* $crud->callback_add_field('parentesco',array($this,function(){
            $input = '<input name= "typeAcu" type= "text" style= "width: 300px;"/>';
            return $input;
        }));*/
        $crud->display_as('id_student','Nombre Estudiante');
     
        $crud->callback_read_field('repet_course', function ($value) {
         $this->load->helper('set_form');
         return fromRepeatView($value);
        });
        
        $output = $crud->render();
        $this->_view_output($output); 
    }
 function insertAcudiente($post_array){
     $name = $post_array['nameAcudiente'];
     echo '<script">';
     echo 'console.log ("'.$name.'");';
     echo '</script>';
     //return $this->db->insert('students', $post_array);
    return $post_array;
     
 }
 function AddRelatives($primary_key){
    
    $input = '
        <h3> Informacion acudiente </h3>
			';
    return $input;
    
    }   
    

public function getRelatives($primary_key,$row){

    // getting id student  by url 
    
    $id_studentUrl = $this->uri->segment(4);
    
    //verification operation
    
    $crud = new grocery_CRUD();
    
    if(isset($id_studentUrl) && 
        $crud -> getState() == 'edit'){
    //select only relative with id_student        
            $this -> db -> select('id_relative,id_alum,name')
                        -> from ('relatives')
                        -> where ('id_alum',$id_studentUrl);
            
            $query = $this -> db -> get();  
            //|findRelative();
            $this->load->helper('set_form');
            return fromSelectAcudiente($query,$id_studentUrl);
            
  
            //$name = $row -> name;
            //$date_birth = $row -> date_birth;
            //$adress = $row ->adress;
            
        }
        return FALSE;

}




public function _view_output($output = null){
        
        $this->load->view('FormView.php',$output); 
   
    }
} 



 
 
/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
 