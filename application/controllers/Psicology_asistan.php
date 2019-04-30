<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Psicology_asistan extends CI_Controller {

 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url

        $this->load->model('Psicology_asistan_model');
        $this->load->library('session');
 
    }

//funcion por defecto del controlador muestra los estudiantes
public function index(){
    //cargamos un array con el metodo a visualizar
     $datos ["get"]=$this -> Psicology_asistan_model->get(); 
     $this ->load -> view("Psicology_asistan_view",$datos);
    }
public function findOne(){
        if($this ->input -> post('findOne')){
            $id = $this -> input ->post('id');
            $field = $this -> input ->post('field');
            $datos ["get"]= $this -> Psicology_asistan_model
                ->getOne($id,'psicology_asistan_register',$field);
            
            $this ->load -> view("Psicology_asistan_view",$datos);
        }else{
            redirect('/Psicology_asistan_view');
        }
        
    }
public function add($goto){
    
        if($this->input->post("add")){
            $data = array(
                'id_student' => $this->input->post('id_stu'),
                'reason' => $this->input->post('rea'),
                'funcionary' => $this->input->post('fun'),
               // 'date' => $this->input->post('dat'),
                );
            if($this->input->post("reao")!=null)
                $data['reason']=$this->input->post("reao");
            $add = $this -> Psicology_asistan_model->add($data);
        //}
        if($add == true){
            //Sesion de una sola ejecucion
            $this -> session -> set_flashdata('Ok','Registro creado correctamente');
        }else{
         $this -> session -> set_flashdata('Fallo','Registro no creado');   
        }
        }
        if($goto) redirect('/Psicology_asistan');//me devuelvo a la vista principal
    }
public function update($goto){//recibimos el id por la url
        if($this -> input -> post('submit')){
                    
            $data = array(
                'id_reg' => $this->input->post('id_reg'),
                'id_stu' => $this->input->post('id_stu'),
                'rea' => $this->input->post('rea'),
                'fun' => $this->input->post('fun'),
               // 'date' => $this->input->post('dat'),
                );
            if($this->input->post("reao")!=null)
                $data['reason']=$this->input->post("reao");        
            $upDate =$this ->Psicology_asistan_model ->update($data);
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
            if($goto) redirect('/Psicology_asistan');
        }
    }
public function setForm($id){
        if(is_numeric($id)){
            $datos ["update"]= 
                $this -> Psicology_asistan_model
                    ->getOne($id,
                            "psicology_asistan_register",
                            "id_register");
            $datos ["status"] = true;
            //le enviamos los datos al formulario update
            $this ->load ->view("FormPsicology_asistan_view",$datos);
        }else{
           $datos ["status"] = false;
           $datos ["update"] = '';
           $this ->load ->view("FormPsicology_asistan_view",$datos);
        }
    }

public function delete($id,$goto){
        if(is_numeric($id)){
            $delete=$this
                ->Psicology_asistan_model
                ->delete($id,"psicology_asistan_register");
            if($delete){
                $this -> 
                 session ->
                  set_flashdata('Ok','Registro borrado correctamente'); 
            }else{
                $this -> 
                 session ->
                  set_flashdata('Fallo','Registro borrado correctamente'); 
            }
            if($goto) redirect('/Psicology_asistan'); 
        }
        elseif($goto)
            redirect('/Psicology_asistan'); 

    }

} 
