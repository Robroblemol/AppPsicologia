<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
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
        //die();
        //DEPENDENT DROPDOWN SETUP
        $crud = new grocery_CRUD();
$datos = array(
//GET THE STATE OF THE CURRENT PAGE - E.G LIST | ADD
'estado' =>  $crud->getState(),
//SETUP YOUR DROPDOWNS
//Parent field item always listed first in array, in this case countryID
//Child field items need to follow in order, e.g idprovincia then idlocalidad
'combos' => array('id_relative','id_student'),
//SETUP URL POST FOR EACH CHILD
//List in order as per above
'url' => array('', site_url().'/Main/findRelative/'),
//LOADER THAT GETS DISPLAYED NEXT TO THE PARENT DROPDOWN WHILE THE CHILD LOADS
'icon_ajax' => base_url().'ajax-loader.gif'
);
    $output->combo_setup = $datos;
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
        
        $crud->set_relation_n_n('acudiente',
                'students_relatives','relatives',
                'id_student','id_relative','name');
               
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
        
        
        
        $crud -> columns('id_student','n_identification');
        $crud->set_relation('id_student', 'students', '{name}');
        //$crud->set_relation('id_relative', 'relatives', '{name}');
        //$crud->callback_field('acudiente',array($this,'getRelatives'));
        $crud->callback_field('acudiente',array($this,'findRelative'));
        //$crud->set_relation('n_identification', 'students', '{n_identification}');
        $crud->display_as('id_student','Nombre Estudiante');
     
        $crud->callback_read_field('repet_course', function ($value, $primaty_key) {
         $this->load->helper('set_form');
         return fromRepeatView($value);
        });
        
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
            $this->load->helper('set_form');
            return fromSelectAcudiente($query,$id_studentUrl);
            
  
            //$name = $row -> name;
            //$date_birth = $row -> date_birth;
            //$adress = $row ->adress;
            
        }
        return FALSE;

}

function findRelative()
{
 
     //Tomo el id de provincia que se envió como parámetro por url al seleccionar
//una provincia del combo idprovincia
 
  $id_studentUrl = $this->uri->segment(3);
 
 
//consulto las localidades segun la provincia seleccionada
  $this->db->select("*")
 
     ->from('relatives')
     ->where('id_alum', $id_studentUrl);
 
  $db = $this->db->get();
 
 
        //Asigno la respuesta sql a un array
  $array = array();
 
  foreach($db->result() as $row):
   $array[] = array("value" => $row->id_alum, "property" => $row->name);
 
  endforeach;
 
 
  echo json_encode($array);
  exit;
 
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

    function _view_output($output = null){
        
        $this->load->view('FormView.php',$output); 
   
    }
} 



 
 
/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
 