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
    }
 
public function index()
    {
     $data ["title"]= "Inicio";
     $this->load->view('/home/head',$data);
     $data ["app"] = "Seguimiento psicologico";
     $this->load->view('/home/nav',$data);
     $this->load->view('/home/header');
     $this->load->view('/home/content');
     $this->load->view('/home/footer');
     //$this ->load->view("home_view",$data);
     
    }
public function setTitle($title){
    $this->title=$title;
}
public function setApp($app){
    $this->app=$app;
}
public function getHead(){
   // $data ["title"]= $this->title;
    $this->load->view('/home/head');
}
public function getNav(){
    //$data ["app"]= $this->app;
    $this->load->view('/home/nav');
    
    }
public function getHeader(){
    $this->load->view('/home/header');
}
public function getFooter(){
    $this->load->view('/home/footer');
    }
}