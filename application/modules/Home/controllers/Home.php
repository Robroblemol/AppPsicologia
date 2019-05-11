<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends MX_Controller {
 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url
        $this->load->library('session');
        //$this->load->model('Students_model');
        $this->title="Seguimiento psicologico";
        $this->app="Seguimiento psicologico";
        //verificamos si el usuario esta registrado
        modules::run("Auth/logged_in");
        
    }
 
public function index()
    {
        $group = 'students';
        if(modules::run("Auth/in_group/$group")){
            modules::run("Appointments");    
        }else{
            
         $datos["citas"]=count(
            modules::run("Appointments/get")['get']
            );
         $datos ["title"]= "Inicio";
         $this->load->view('/home/head',$datos);
         $datos ["app"] = "Seguimiento psicologico";
         $this->load->view('/home/nav',$datos);
         $this->load->view('/home/header',$datos);
         $this->load->view('/home/content');
         $this->load->view('/home/footer');
         //$this ->load->view("home_view",$data);
        }
     
    }
public function setTitle($title){
    $this->title=$title;
}
public function setApp($app){
    $this->app=$app;
}
public function get_head(){
   // $data ["title"]= $this->title;
    $this->load->view('/home/head');
}
public function get_nav(){
    $datos['citas']=count(
        modules::run("Appointments/get")['get']
        );
    $this->load->view('/home/nav',$datos);
    
    }
public function get_header(){
    $datos['citas']=count(
        modules::run("Appointments/get")['get']
        );
    $this->load->view('/home/header',$datos);
}
public function get_footer(){
    $this->load->view('/home/footer');
    }
}