<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Social_economic extends MX_Controller {

 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url

        $this->load->model('Social_economic_model');
        $this->load->library('session');
        modules::run("Auth/logged_in");
 
    }

//funcion por defecto del controlador muestra los estudiantes
public function index(){
    //cargamos un array con el metodo a visualizar
     $datos ["title"]= "Socioemocional";
     $datos ["app"]= "Registro Socioemocional";
     $datos ["get"]=$this -> Social_economic_model->get(); 
     $this ->load -> view("social_economic_view",$datos);
    }
public function get_table(){
    //cargamos un array con el metodo a visualizar
    // $datos ["get"]=$this -> Social_economic_model->get(); 
     $this ->load -> view("table_social_economic_view");
    }
public function findOne(){
        if($this ->input -> post('findOne')){
            $id = $this -> input ->post('id');
            $field = $this -> input ->post('field');
            $datos ["get"]= $this -> Social_economic_model
                ->getOne($id,'social_economic_histories',$field);
            
            $this ->load -> view("Social_economic_view",$datos);
        }else{
            redirect('/Social_economic_view');
        }
        
    }
public function add($goto){
    
        if($this->input->post("add")){
            $data = array(
                'id_student' => $this->input->post('id_stu'),
                'free_time' => $this->input->post('f_tim'),
                'inter_persons' => $this->input->post('i_per'),
                'behavior_encouragement' => $this->input->post('b_enc'),
                'life_proyect' => $this->input->post('l_pro'),
                'ant_health' => $this->input->post('a_hea'),
                'ant_psicology' => $this->input->post('a_psi'),
               // 'date' => $this->input->post('dat'),
                );
            $add = $this -> Social_economic_model->add($data);
        //}
        if($add == true){
            //Sesion de una sola ejecucion
            $this -> session -> set_flashdata('Ok','Registro creado correctamente');
        }else{
         $this -> session -> set_flashdata('Fallo','Registro no creado');   
        }
        }
        if($goto) redirect('/Social_economic');//me devuelvo a la vista principal
    }
public function update($goto){//recibimos el id por la url
        if($this -> input -> post('submit')){
                    
            $data = array(
                'id_soc' => $this->input->post('id_soc'),
                'id_stu' => $this->input->post('id_stu'),
                'f_tim' => $this->input->post('f_tim'),
                'i_per' => $this->input->post('i_per'),
                'b_enc' => $this->input->post('b_enc'),
                'l_pro' => $this->input->post('l_pro'),
                'a_hea' => $this->input->post('a_hea'),
                'a_psi' => $this->input->post('a_psi'),
               // 'date' => $this->input->post('dat'),
                );
                    
            $upDate =$this ->Social_economic_model ->update($data);
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
            $data ["title"]= "Editar Registro Socioemocional";
            $this->load->view('/addForm/head_form',$data);
            $datos ["update"]= 
                $this -> Social_economic_model
                    ->getOne($id,
                            "social_economic_histories",
                            "id_social_economic");
            $datos ["status"] = true;
            $this->load->view('/addForm/body_social_form',$datos);
            //le enviamos los datos al formulario update
            //$this ->load ->view("FormSocial_eco_view",$datos);
            $this->load->view('/addForm/footer_form');
        }else{
            $data ["title"]= "Agregar Registro Socioemocional";
            $this->load->view('/addForm/head_form',$data);
           $datos ["status"] = false;
           $datos ["update"] = '';
           $this->load->view('/addForm/body_social_form',$datos);
           //$this ->load ->view("FormSocial_eco_view",$datos);
           $this->load->view('/addForm/footer_form');
        }
    }

public function delete($id,$goto){
        if(is_numeric($id)){
            $delete=$this
                ->Social_economic_model
                ->delete($id,"social_economic_histories");
            if($delete){
                $this -> 
                 session ->
                  set_flashdata('Ok','Registro borrado correctamente'); 
            }else{
                $this -> 
                 session ->
                  set_flashdata('Fallo','Registro borrado correctamente'); 
            }
            if($goto) redirect('/Social_economic'); 
        }
        elseif($goto)
            redirect('/Social_economic'); 

    }

} 
