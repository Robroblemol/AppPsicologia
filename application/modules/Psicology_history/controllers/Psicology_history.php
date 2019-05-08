<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Psicology_history extends MX_Controller {

 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url

        $this->load->model('Students_model');
        $this->load->model('Attendants_model');
        $this->load->model('School_histories_model');
        $this->load->model('Family_relationship_model');
        $this->load->model('Social_economic_model');
        $this->load->model('Appointments_model');
        $this->load->model('Psicology_asistan_model');
        
        
        $this->load->library('session');
 
    }

//funcion por defecto del controlador muestra los estudiantes
public function index(){
    //cargamos un array con el metodo a visualizar
     //$datos ["get"]=$this -> Students_model->get();
    $datos ["app"]="Seguimiento estudiantes";
     $datos['title'] ="Seguimiento psicologico";

     $this ->load -> view("Psicology_histories_view",$datos);
    }
public function get_table(){
    //$datos ["get"]=$this -> Students_model->get(); 
    $datos=modules::run("Student/get");
    $this ->load -> view("Form_Psicology_histories_view",$datos);
}
public function get_detail($id){
    $datos ["app"]="Detalle estudiantes";
     $datos['title'] ="Seguimiento psicologico";
    
    $datos ["get"]=$this -> Students_model->getOne(
        $id,'students','id_student'
        );
    $datos["getAttendant"]=$this->
        Attendants_model->
            getOne($id,'relatives','id_student');
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
    $r_cou;
    if($this ->input ->post('r_cou')== null)
       $r_cou = 0;
     else
        $r_cou = $this ->input ->post('r_cou');
    if($this->input->post("add")){
        $data = array(
            //'id_student' => $this->input->post('id_stu'),
            'n_identification' => $this->input->post('n_ide'),
            'name' => $this->input->post('nam'),
            'hometown' =>$this->input->post('hom'),
            'date_birth' =>$this->input->post('d_bir'),
            'current_course' =>$this->input->post('c_cou'),
            'repet_course' =>$r_cou,
            'email'=>$this->input->post('ema'),
            //'request_date' => $this->input->post('r_date'),
           // 'date' => $this->input->post('dat'),
            );
        $addStudent = $this -> Students_model->add($data);
        //obtenemos el id que recien creamos para
        //poder asignarlo a los de mas Query
        $id_stu = $this-> Students_model
                ->getID($data['n_identification']);
        if($addStudent&&$id_stu[0]!=null){
            $data = array(
                'id_student' => $id_stu[0]['id_student'],
                'with_father' => $this->input->post('w_fat'),
                'with_mother' => $this->input->post('w_mot'),
                'with_brothers' => $this->input->post('w_bro'),
                'with_step_parents' => $this->input->post('w_step_par'),
                'observations' => $this->input->post('obs'),
                );
            $addFamily = $this->
                Family_relationship_model->add($data);
            $data = array(
                'id_student' => $id_stu[0]['id_student'],
                'histori_school'=>$this->input->post('h_sch'),
                'skills_dificulties'=>$this->input->post('s_dif'),
                
                    );
            $addSchool = $this-> 
                School_histories_model->add($data);
            $data = array(
                'id_student' => $id_stu[0]['id_student'],
                'free_time' => $this->input->post('f_tim'),
                'inter_persons' => $this->input->post('i_per'),
                'behavior_encouragement' => $this->input->post('b_enc'),
                'life_proyect' => $this->input->post('l_pro'),
                'ant_health' => $this->input->post('a_hea'),
                'ant_psicology' => $this->input->post('a_psi'),

                    );
            $addSocial = $this->
                Social_economic_model->add($data);
                    
            if($addStudent && $addFamily && $addSchool && $addSocial){
                //Sesion de una sola ejecucion
                $this -> session -> set_flashdata('Ok','Registro creado correctamente');
            }else{
             $this -> session -> set_flashdata('Fallo','Registro no creado');   
            }
        }
            
    }
    if($goto) redirect('/Psicology_history');//me devuelvo a la vista principal
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
            $datos ["title"]= "Editar Seguimiento psicologico";
            $datos ["app"]="Agragar Seguimiento";
            //$this->load->view('/addForm/head_form',$data);
            $datos ["update"]= 
                $this -> Appointments_model
                    ->getOne($id,
                            "appointmets",
                            "id_appointmet");
            $datos ["status"] = true;
            //le enviamos los datos al formulario update
            $this ->load ->view("FormPsicology_view",$datos);
        }else{
            $datos ["title"]= "Editar Seguimiento psicologico";
            $datos ["app"]="Agragar Seguimiento";
           $datos ["status"] = false;
           $datos ["update"] = '';
           $this ->load ->view("FormPsicology_view",$datos);
        }
    }

public function delete($id,$goto){
        if(is_numeric($id)){
            $deleteAsistan=$this
                ->Psicology_asistan_model
                ->deleteByID('psicology_asistan_register',
                    array('id_student'=>$id));
            $deleteApp=$this
                ->Appointments_model
                ->deleteByID('appointmets',
                    array('id_student'=>$id));
            $deleteSocio=$this
                ->Social_economic_model
                ->deleteByID("social_economic_histories",
                    array('id_student'=>$id));
            $deleteSchool = $this
                ->School_histories_model
                ->deleteByID("school_histories",
                    array('id_student'=>$id));
            $deleteFamily=$this
                ->Family_relationship_model
                ->deleteByID("family_relationship",
                    array('id_student'=>$id));
             $deleteStudent = $this
                ->Students_model
                ->delete($id,"students");
            
                
            if($deleteSocio && 
                $deleteSchool &&
                    $deleteFamily &&
                        $deleteStudent &&
                            $deleteApp &&
                               $deleteAsistan ){
                $this -> 
                 session ->
                  set_flashdata('Ok','Registro borrado correctamente'); 
            }else{
                $this -> 
                 session ->
                  set_flashdata('Fallo','Registro borrado correctamente'); 
            }
            if($goto) redirect('/Psicology_history'); 
        }
        elseif($goto)
            redirect('/Psicology_history'); 

    }

} 
