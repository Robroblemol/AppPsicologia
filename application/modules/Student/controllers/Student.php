<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Student extends CI_Controller {

 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url

        $this->load->model('Students_model');
        $this->load->library('session');
        $this->load->helper('set_form');
        
 
    }

//funcion por defecto del controlador muestra los estudiantes
public function index(){
    //cargamos un array con el metodo a visualizar
     $datos ["get"]=$this -> Students_model->get(); 
     $this ->load -> view("students_view",$datos);
    }
public function add(){
    $r_corse;
    if($this ->input ->post('repet_course')== null)
       $r_corse = 0;
     else
        $r_corse = $this ->input ->post('repet_course');
    //compruebo si se a enviado submit
        if($this->input->post("add")){
            $student = array(
                'n_identification' => $this->input->post('n_identification'),
                'name' => $this->input->post('name'),
                'hometown' => $this->input->post('hometown'),
                'date_birth' => $this->input->post('date_birth'),
                'current_course' => $this->input->post('current_course'),
                'repet_course' => $r_corse,
                'email' => $this->input->post('email')
                );
            $add = $this -> Students_model->add($student);
        //}
        if($add == true){
            //Sesion de una sola ejecucion
            $this -> session -> set_flashdata('Ok','Estudiente creado correctamente');
        }else{
         $this -> session -> set_flashdata('Fallo','Estudiente no creado');   
        }
        }
        redirect('/Student');//me devuelvo a la vista principal
    }
public function update(){//recibimos el id por la url
        if($this -> input -> post('id_student')){
                    
            $data = array(
                    'id_student' =>$this->input->post('id_student'),
                    'n_identification' => $this->input->post('n_identification'),
                    'name' => $this->input->post('name'),
                    'hometown' => $this->input->post('hometown'),
                    'date_birth' => $this->input->post('date_birth'),
                    'current_course' => $this->input->post('current_course'),
                    'repet_course' => $this->input->post('repet_course'),
                    'email' => $this->input->post('email')
                    );
                    
            $add = $this -> Students_model -> update($data);
            if($add){
                //Sesion de una sola ejecucion
                $this -> 
                 session ->
                  set_flashdata('Ok','Estudiente modificado correctamente');
            }else{
               $this -> 
                session ->
                 set_flashdata('Fallo','Estudiente no modificado correctamente'); 
            }
            redirect('/Student');
        }
    }

public function delete($id){
        if(is_numeric($id)){
            $delete=$this->Students_model->delete($id,"students");
            if($delete){
                $this -> 
                 session ->
                  set_flashdata('Ok','Estudiente borrado correctamente'); 
            }else{
                $this -> 
                 session ->
                  set_flashdata('Fallo','Estudiente borrado correctamente'); 
            }
            redirect('/Student'); 
        }
        else
            redirect('/Student'); 

    }
public function setForm($id){
        if(is_numeric($id)){
            $datos ["update"]= 
                $this -> Students_model
                    ->getOne($id,"students","id_student");
            $datos ["status"] = true;
            //le enviamos los datos al formulario update
            $this ->load ->view("setForm_view",$datos);
        }else{
           $datos ["status"] = false;
           $datos ["update"] = '';
           $this ->load ->view("setForm_view",$datos);
        }
    }
public function findOne(){
        $id = $this -> input ->post('id');
        $field = $this -> input ->post('field');
        $datos ["get"]= $this -> Students_model
            ->getOne($id,'students',$field);
        
        $this ->load -> view("students_view",$datos);
    }

} 



 
 
/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
 