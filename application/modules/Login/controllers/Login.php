<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends MX_Controller {

 
public function __construct(){
    
        parent::__construct();
         
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url
        $this->load->model('login_model');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
public function is_logged_in() {
        // Get current CodeIgniter instance
        $CI =& get_instance();
        // We need to use $CI->session instead of $this->session
        $user = $CI->session->userdata('user_data');
        if (!isset($user)) { return false; } else { return true; }
    }
public function index(){
        if($this->input->post('login')){
            
            
            if($this->login_model->login(
                $_POST['username'],
                md5($_POST['password']))){
                    
                redirect('Home'); 
            }
             else{
                 redirect('/Login#bad-password');
             }
            
        }
        else{
            $datos['title'] = 'Login';
            $this->load->view('addForm/head_form', $datos);
            $datos['status'] =false;
            $this->load->view('login_form',$datos);
            $this->load->view('addForm/footer_form');
            //redirect('/Home');
        }
    }
public function verify(){
    if($this->login_model->login(
        $this->input->post('name'),
        $this->input->post('password'))){
           redirect('Home'); 
        }else{
            $this->form_validation
                ->set_message(
                    'verify',
                    'Contraseña incorrecta');
            redirect('Login');
        }
 }
}
//faltan las rutas 
//$route['login'] = 'login/index';