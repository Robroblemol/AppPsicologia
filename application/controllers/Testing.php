<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Testing extends CI_Controller {

 
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
   // if($this ->input ->post('repet_course')=="Null")
     //   $r_corse = false;
    //compruebo si se a enviado submit
        if($this->input->post("add")){
            $student = array(
                'n_identification' => $this->input->post('n_identification'),
                'name' => $this->input->post('name'),
                'hometown' => $this->input->post('hometown'),
                'date_birth' => $this->input->post('date_birth'),
                'current_course' => $this->input->post('current_course'),
                'repet_course' => $this ->input ->post('repet_course'),
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
        redirect('/Testing');//me devuelvo a la vista principal
    }
public function update($id){//recibimos el id por la url
        if(is_numeric($id_usuario)){
            $datos ["update"]= 
                $this -> Students_model
                    ->update($data['id_student']=$id);
            
            //le enviamos los datos al formulario update
            $this ->load ->view("update_view",$datos);
            
            if($this -> input -> post('submit')){
                $add = $this -> Students_model -> update(
                    $data = array(
                        'n_identification' => $this->input->post('n_identification'),
                        'name' => $this->input->post('name'),
                        'hometown' => $this->input->post('hometown'),
                        'date_birth' => $this->input->post('date_birth'),
                        'current_course' => $this->input->post('current_course'),
                        'repet_course' => $this->input->post('repet_course'),
                        'email' => $this->input->post('email')
                        )
                    );
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
                redirect('/Testing');
            }
        }
        else{
           redirect('/Testing'); 
        }
        
    }

public function _delete($id){
        if(is_numeric($id_usuario)){
            $delete=$this->Students_model->_delete($id_usuario);
            if($delete){
                $this -> 
                 session ->
                  set_flashdata('Ok','Estudiente borrado correctamente'); 
            }else{
                $this -> 
                 session ->
                  set_flashdata('Fallo','Estudiente borrado correctamente'); 
            }
            redirect('/Testing'); 
        }
        else
            redirect('/Testing'); 

    }



} 



 
 
/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
 