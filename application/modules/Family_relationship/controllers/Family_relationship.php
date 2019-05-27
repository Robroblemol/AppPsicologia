<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Family_relationship extends MX_Controller {

 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url

        $this->load->model('Family_relationship_model');
        $this->load->library('session');
        modules::run("Auth/logged_in");
 
    }

//funcion por defecto del controlador muestra los estudiantes
public function index(){
    //cargamos un array con el metodo a visualizar
     $datos ["get"]=$this -> Family_relationship_model->get(); 
     $datos ["title"]="Relación familiar";
     $datos ["app"]="Relación familiar";
     $this ->load -> view("Family_relationship_view",$datos);
    }
public function get_table(){
    //cargamos un array con el metodo a visualizar
     //$datos ["get"]=$this -> Family_relationship_model->get(); 
     $this ->load -> view("table_family_relation");
    }
public function findOne(){
        if($this ->input -> post('findOne')){
            $id = $this -> input ->post('id');
            $field = $this -> input ->post('field');
            $datos ["get"]= $this -> Family_relationship_model
                ->getOne($id,'family_relationship',$field);
            
            $this ->load -> view("Family_relationship_view",$datos);
        }else{
            redirect('/Family_relationship');
        }
        
    }
public function add($goto){
    
        if($this->input->post("add")){
            $data = array(
                'id_student' => $this->input->post('id_stu'),
                'with_father' => $this->input->post('w_fat'),
                'with_mother' => $this->input->post('w_mot'),
                'with_brothers' => $this->input->post('w_bro'),
                'with_step_parents' => $this->input->post('w_step_par'),
                'observations' => $this->input->post('obv'),
                'date' => $this->input->post('dat'),
                );
            $add = $this -> Family_relationship_model->add($data);
        //}
        if($add == true){
            //Sesion de una sola ejecucion
            $this -> session -> set_flashdata('Ok','Registro creado correctamente');
        }else{
         $this -> session -> set_flashdata('Fallo','Registro no creado');   
        }
        }
        if($goto) redirect('/Family_relationship');//me devuelvo a la vista principal
    }
public function update($goto){//recibimos el id por la url
        if($this -> input -> post('submit')){
                    
            $data = array(
                'id_relationship' =>$this->input->post('id_relationship'),
                'id_student' => $this->input->post('id_stu'),
                'with_father' => $this->input->post('w_fat'),
                'with_mother' => $this->input->post('w_mot'),
                'with_brothers' => $this->input->post('w_bro'),
                'with_step_parents' => $this->input->post('w_step_par'),
                'observations' => $this->input->post('obv'),
                );
                    
            $upDate =$this ->Family_relationship_model ->update($data);
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
            $data ["title"]= "Editar Registro Relacion familiar";
            $this->load->view('/addForm/head_form',$data);
            $datos ["update"]= 
                $this -> Family_relationship_model
                    ->getOne($id,
                            "family_relationship",
                            "id_relationship");
            $datos ["status"] = true;
            $this->load->view('/addForm/body_family_form',$datos);
            //le enviamos los datos al formulario update
            //$this ->load ->view("FormFamilyRelation_view",$datos);
            $this->load->view('/addForm/footer_form');
        }else{
            $data ["title"]= "Agregar Registro familiar";
            $this->load->view('/addForm/head_form',$data);
           $datos ["status"] = false;
           $datos ["update"] = '';
           $this->load->view('/addForm/body_family_form',$datos);
           $this->load->view('/addForm/footer_form');
        }
    }

public function delete($id,$goto){
        if(is_numeric($id)){
            $delete=$this
                ->Family_relationship_model
                ->delete($id,"family_relationship");
            if($delete){
                $this -> 
                 session ->
                  set_flashdata('Ok','Registro borrado correctamente'); 
            }else{
                $this -> 
                 session ->
                  set_flashdata('Fallo','Registro borrado correctamente'); 
            }
            if($goto) redirect('/Family_relationship'); 
        }
        elseif($goto)
            redirect('/Family_relationship'); 

    }

} 
