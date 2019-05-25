<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Appointments extends MX_Controller {

 
function __construct()
    {
        parent::__construct();
 
    
        $this->load->model('Appointments_model');
        $this->load->library('session');
 
    }

//funcion por defecto del controlador muestra los estudiantes
public function index(){
    //cargamos un array con el metodo a visualizar
    $datos['title']="Citas";
    $datos['app']="citas";
     $datos ["get"]=$this -> Appointments_model->get();
     $this ->load -> view("Appointments_view",$datos);
    }
public function get_table(){
    $this ->load -> view("table_appointments_view");
}
public function get(){
    $datos ["get"]=$this -> Appointments_model->get();
    return $datos;
}
public function findOne(){
        if($this ->input -> post('findOne')){
            $id = $this -> input ->post('id');
            $field = $this -> input ->post('field');
            $datos ["get"]= $this -> Appointments_model
                ->getOne($id,'appointmets',$field);
            
            $this ->load -> view("Appointments_view",$datos);
        }else{
            redirect('/Appointments_view');
        }
        
    }
public function add($goto){
    $this->Appointments_model->set_asign_date(
        $this->input->post('a_app'), 1);
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
            $data ["title"]= "Editar Cita";
            $this->load->view('/addForm/head_form',$data);
            $datos ["update"]= 
                $this -> Appointments_model
                    ->getOne($id,
                            "appointmets",
                            "id_appointmet");
            $datos ["status"] = true;
            $this->load->view('/addForm/body_appointments_form',$datos);
            //le enviamos los datos al formulario update
            $this->load->view('/addForm/footer_form');
            //$this ->load ->view("FormAppointments_view",$datos);
        }else{
            $data ["title"]= "Agregar Cita";
            $this->load->view('/addForm/head_form',$data);    
           $datos ["status"] = false;
           $datos ["update"] = '';
            $datos["checkApp"]=$this->Appointments_model->getOne(
                0,'asing_date','state_appo'
            );
        
           //$this ->load ->view("FormAppointments_view",$datos);
           $this->load->view('/addForm/body_appointments_form',$datos);
            //le enviamos los datos al formulario update
            $this->load->view('/addForm/footer_form');
        }
    }

public function delete($id,$goto){
        if(is_numeric($id)){
            $data=$this->Appointments_model
                ->getOne($id,'appointmets','id_appointmet','asing_appo');
            $this->Appointments_model
                ->set_asign_date($data[0]->asing_appo,0);
            
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
