<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class School_histories extends MX_Controller {

 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url

        $this->load->model('School_histories_model');
        $this->load->library('session');
        modules::run("Auth/logged_in");
 
    }

//funcion por defecto del controlador muestra los estudiantes
public function index(){
    //cargamos un array con el metodo a visualizar
     $datos ["get"]=$this -> School_histories_model->get(); 
     $this ->load -> view("School_histories_view",$datos);
    }
public function get_table(){
    //cargamos un array con el metodo a visualizar
     $datos ["get"]=$this -> School_histories_model->get(); 
     $this ->load -> view("table_school_histories_view",$datos);
    }
public function findOne(){
        if($this ->input -> post('findOne')){
            $id = $this -> input ->post('id');
            $field = $this -> input ->post('field');
            $datos ["get"]= $this -> School_histories_model
                ->getOne($id,'school_histories',$field);
            
            $this ->load -> view("School_histories_view",$datos);
        }else{
            redirect('/School_histories_view');
        }
        
    }
public function add($goto){
    
        if($this->input->post("add")){
            $data = array(
                'id_student' => $this->input->post('id_stu'),
                'histori_school' => $this->input->post('h_sch'),
                'skills_dificulties' => $this->input->post('s_dif'),
               // 'date' => $this->input->post('dat'),
                );
            $add = $this -> School_histories_model->add($data);
        //}
        if($add == true){
            //Sesion de una sola ejecucion
            $this -> session -> set_flashdata('Ok','Registro creado correctamente');
        }else{
         $this -> session -> set_flashdata('Fallo','Registro no creado');   
        }
        }
        if($goto) redirect('/School_histories');//me devuelvo a la vista principal
    }
public function update($goto){//recibimos el id por la url
        if($this -> input -> post('submit')){
                    
            $data = array(
                'id_sch'=> $this->input->post('id_sch'),
                'id_stu' => $this->input->post('id_stu'),
                'h_sch' => $this->input->post('h_sch'),
                's_dif' => $this->input->post('s_dif'),
               // 'date' => $this->input->post('dat'),
                );
                    
            $upDate =$this ->School_histories_model ->update($data);
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
            if($goto) redirect('/Psicology_history');
        }
    }
public function setForm($id){
        if(is_numeric($id)){
            $data ["title"]= "Editar Historial familiar";
            $this->load->view('/addForm/head_form',$data);
            $datos ["update"]= 
                $this -> School_histories_model
                    ->getOne($id,
                            "school_histories",
                            "id_school_histories");
            $datos ["status"] = true;
            $this->load->view('/addForm/body_school_form',$datos);
            //le enviamos los datos al formulario update
            //$this ->load ->view("FormSchoolHistories_view",$datos);
            $this->load->view('/addForm/footer_form');
        }else{
           $data ["title"]= "Editar Historial familiar";
           $this->load->view('/addForm/head_form',$data);
           $datos ["status"] = false;
           $datos ["update"] = '';
           $this->load->view('/addForm/body_school_form',$datos);
           //$this ->load ->view("FormSchoolHistories_view",$datos);
        }
    }

public function delete($id,$goto){
        if(is_numeric($id)){
            $delete=$this
                ->School_histories_model
                ->delete($id,"school_histories");
            if($delete){
                $this -> 
                 session ->
                  set_flashdata('Ok','Registro borrado correctamente'); 
            }else{
                $this -> 
                 session ->
                  set_flashdata('Fallo','Registro borrado correctamente'); 
            }
            if($goto) redirect('/School_histories'); 
        }
        elseif($goto)
            redirect('/School_histories'); 

    }

} 
