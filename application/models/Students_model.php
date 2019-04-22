<?php
class Students_model extends CI_Model{
    
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //cargamos la base de datos
        $this->load->database();
    }
    
    public function get($limit = 10){
        //hacemos la consulta
        $sql = $this -> db ->get('students',$limit,1);
        return  $sql -> result(); //devolvemos el resultado
    }
    public function add($data = array()){
        $this -> db -> select('n_identification')
                    -> from ('students')
                    -> where ('n_identification',$data['n_identification']);
        $query = $this -> db -> get();  
        //berificamos que no exista un estudiente con ese n_identicacion
        if($query -> num_row() == 0){
            $this -> db -> insert('students',$data);  
            $query = $this -> db -> get(); 
            if($query == true)
                return true;
            else
                return false;
            
        }else{
            return false;
        }
            
        
    }
    public function update($edit= "null", $data = array()){
        if($edit == "null"){
            $this -> db -> select('id_student')
                    -> from ('students')
                    -> where ('id_student',$data['id_student']);
            $query = $this -> db -> get();
            return $query -> result;
        }else{
            $this -> db -> where('id_student',$data['id_student']);
            $this -> db -> update('students',$data);
            $query = $this -> db -> get();
            return $query->result;
        }
        
    }
    public function _delete($id){
        $query = $this -> db -> query(
            'DELETE FROM students WHERE id_student ='.$id
            );
        return $query;
    }
    
}
    
