<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Psicology_history extends CI_Controller {

 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url

        $this->load->model('Students_model');
        $this->load->model('School_histories_model');
        $this->load->model('Family_relationship_model');
        $this->load->model('Social_economic_model');
        
        $this->load->library('session');
 
    }

//funcion por defecto del controlador muestra los estudiantes
public function index(){
    //cargamos un array con el metodo a visualizar
     $datos ["get"]=$this -> Students_model->get(); 
     $this ->load -> view("Psicology_histories_view",$datos);
    }
public function get_detail($id){
    $datos ["get"]=$this -> Students_model->getOne(
        $id,'students','id_student'
        );
    $datos ["getFamily"]=
        $this->Family_relationship_model->getOne(
            $id,'family_relationship','id_student'
            );
    $datos ["getSchool"]=
        $this-> School_histories_model->getOne(
            $id,'school_histories','id_student'
            );
    $datos ["getSocial"]=
        $this-> Social_economic_model->getOne(
            $id,'social_economic_histories','id_student'
            );
    $this->load->view("Psicology_histories_detail_view",$datos);
    
}
public function findOne(){
        if($this ->input -> post('findOne')){
            $id = $this -> input ->post('id');
            $field = $this -> input ->post('field');
            $datos ["get"]= $this -> Students_model
                ->getOne($id,'students',$field);
            
            $this ->load -> view("Psicology_histories_view",$datos);
        }else{
            redirect('/Psicology_histories_view');
        }
        
    }
public function add($goto){
    $s_app;
    if($this ->input ->post('s_app')== null)
       $s_app = 0;
     else
        $s_app = $this ->input ->post('s_app');
        if($this->input->post("add")){
            $data = array(
                'id_student' => $this->input->post('id_stu'),
                'description' => $this->input->post('des'),
                'asing_appo' => $this->input->post('a_app'),
                'state_appo' => $s_app,
                //'request_date' => $this->input->post('r_date'),
               // 'date' => $this->input->post('dat'),
                );
            //if($this->input->post("reao")!=null)
            //    $data['reason']=$this->input->post("reao");
            $add = $this -> Appointments_model->add($data);
        //}
        if($add == true){
            //Sesion de una sola ejecucion
            $this -> session -> set_flashdata('Ok','Registro creado correctamente');
        }else{
         $this -> session -> set_flashdata('Fallo','Registro no creado');   
        }
        }
        if($goto) redirect('/Appointments');//me devuelvo a la vista principal
    }
public function update($goto){//recibimos el id por la url
    $s_app;
    if($this ->input ->post('s_app')== null)
       $s_app = 0;
     else
        $s_app = $this ->input ->post('s_app');
        if($this -> input -> post('submit')){
                    
            $data = array(
                'id_app' => $this->input->post('id_app'),
                'id_stu' => $this->input->post('id_stu'),
                'des' => $this->input->post('des'),
                'a_app' => $this->input->post('a_app'),
                's_app' => $s_app,
            //    'r_dat' => $this->input->post('r_date'),
               // 'date' => $this->input->post('dat'),
                );
            //if($this->input->post("reao")!=null)
            //    $data['rea']=$this->input->post("reao");        
            $upDate =$this ->Appointments_model ->update($data);
            if($upDate){
                //Sesion de una sola ejecucion
                $this -> 
                 session ->
                  set_flashdata('Ok','Registro modificado correctamente');
            }else{
               $this -> 
                session ->
                 set_flashdata('Fallo','Registro no modificado correctamente'); 
            }
            //me devuelvo a la vista principal si vengo del maestro
            if($goto) redirect('/Appointments');
        }
    }
public function setForm($id){
        if(is_numeric($id)){
            $datos ["update"]= 
                $this -> Appointments_model
                    ->getOne($id,
                            "appointmets",
                            "id_appointmet");
            $datos ["status"] = true;
            //le enviamos los datos al formulario update
            $this ->load ->view("FormAppointments_view",$datos);
        }else{
           $datos ["status"] = false;
           $datos ["update"] = '';
           $this ->load ->view("FormAppointments_view",$datos);
        }
    }

public function delete($id,$goto){
        if(is_numeric($id)){
            $delete=$this
                ->Appointments_model
                ->delete($id,"appointmets");
            if($delete){
                $this -> 
                 session ->
                  set_flashdata('Ok','Registro borrado correctamente'); 
            }else{
                $this -> 
                 session ->
                  set_flashdata('Fallo','Registro borrado correctamente'); 
            }
            if($goto) redirect('/Appointments'); 
        }
        elseif($goto)
            redirect('/Appointments'); 

    }

} 
