<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends MX_Controller {
 
function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url
        //$this->load->model('Students_model');
 
    }
 
public function index()
    {
     $data ["title"]= "Página de inicio";
     $this->load->view('/home/head',$data);
     $data ["app"] = "Seguimiento psicologico";
     $this->load->view('/home/nav',$data);
     $this->load->view('/home/header');
     $this->load->view('/home/content');
     $this->load->view('/home/footer');
     //$this ->load->view("home_view",$data);
     
    }
public function getHead($title){
    $data ["title"]= $title;
    $this->load->view('/home/head',$data);
}
public function getNav($app){
    $data ["app"]= $app;
    $this->load->view('/home/nav',$data);
    
    }
public function getHeader(){
    $this->load->view('/home/header');
}
public function getFooter(){
    $this->load->view('/home/footer');
    }
}