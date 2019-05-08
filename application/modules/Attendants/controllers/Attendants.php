<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Attendants extends MX_Controller {
  function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url
        $this->load->model('Attendants_model');
        $this->load->library('session');
    }
    public function index(){
    //cargamos un array con el metodo a visualizar
    $datos['title']="Acudientes";
    $datos['app']="Seguimiento psicológicos";
    $datos ["get"]= $this -> Attendants_model->get();
    $this ->load -> view("attendant_view",$datos);
    
     //$this ->load -> view("Attendants_view",$datos);
    }
    public function get_table(){
    //cargamos un array con el metodo a visualizar
     //$datos ["get"]=$this -> Family_relationship_model->get(); 
     $this ->load -> view("table_attendants_view");
    }
    public function add(){
    //compruebo si se a enviado submit
        if($this->input->post("add")){
            $data = array(
                'id_student' => $this->input->post('id_student'),
                'type' => $this->input->post('type'),
                'name' => $this->input->post('name'),
                'date_birth' => $this->input->post('date_birth'),
                'grade' => $this->input->post('grade'),
                'profession' => $this->input->post('profession'),
                'adress' => $this->input->post('adress'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email')
                );
            $add = $this -> Attendants_model->add($data);
        //}
        if($add == true){
            //Sesion de una sola ejecucion
            $this -> session -> set_flashdata('Ok','Acudiente creado correctamente');
        }else{
         $this -> session -> set_flashdata('Fallo','Acudiente no creado');
        }
        }
        redirect('/Attendants');//me devuelvo a la vista principal
    }
    public function update(){//recibimos el id por la url
        if($this -> input -> post('submit')){
            $data = array(
              'id_relative' => $this->input->post('id_relative'),
              'id_student' => $this->input->post('id_student'),
              'type' => $this->input->post('type'),
              'name' => $this->input->post('name'),
              'date_birth' => $this->input->post('date_birth'),
              'grade' => $this->input->post('grade'),
              'profession' => $this->input->post('profession'),
              'adress' => $this->input->post('adress'),
              'phone' => $this->input->post('phone'),
              'email' => $this->input->post('email')
              );
            $add = $this -> Attendants_model -> update($data);
            if($add){
                //Sesion de una sola ejecucion
                $this ->
                 session ->
                  set_flashdata('Ok','Acudiente modificado correctamente');
            }else{
               $this ->
                session ->
                 set_flashdata('Fallo','Acudiente no modificado correctamente');
            }
              redirect('/Attendants');
        }
        redirect('/Attendants');
    }
    public function delete($id){
        if(is_numeric($id)){
            $delete=$this->Attendants_model->delete($id,"relatives");
            if($delete){
                $this ->
                 session ->
                  set_flashdata('Ok','Acudiente borrado correctamente');
            }else{
                $this ->
                 session ->
                  set_flashdata('Fallo','Acudiente borrado correctamente');
            }
            redirect('/Attendants');
        }
        else
            redirect('/Attendants');
    }
public function setForm($id){
        if(is_numeric($id)){
            $data ["title"]= "Editar Acudiente";
            $this->load->view('/addForm/head_form',$data);
            $datos ["update"]=
                $this -> Attendants_model
                    ->getOne($id,"relatives","id_relative");
            $datos ["status"] = true;
            $this->load->view('/addForm/body_attendants_form',$datos);
            //le enviamos los datos al formulario update
            $this->load->view('/addForm/footer_form');
            //$this ->load ->view("formAttendant_view",$datos);
        }else{
            $data ["title"]= "Agregar Acudiente";
            $this->load->view('/addForm/head_form',$data);    
           $datos ["status"] = false;
           $datos ["update"] = '';
           $this->load->view('/addForm/body_attendants_form',$datos);
           $this->load->view('/addForm/footer_form');
           //$this ->load ->view("formAttendant_view",$datos);
        }
    }
public function findOne(){
  if($id = $this -> input ->post('findOne')){
    $id = $this -> input ->post('id');
    $field = $this -> input ->post('field');
    $datos ["get"]= $this -> Attendants_model
    ->getOne($id,'relatives',$field);
    $this ->load -> view("Attendants_view",$datos);
  }else   redirect('/Attendant');
    }
}