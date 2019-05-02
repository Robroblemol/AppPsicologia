<?php
class Students_model extends CI_Model{
    
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //cargamos la base de datos
        $this->load->database();
    }
    
    public function get($limit = 50){
        //hacemos la consulta
        $query = $this -> db ->get('students',$limit,0);
        return  $query -> result(); //devolvemos el resultado
    }
    public function add($data){
        $this -> db -> select('n_identification')
                    -> from ('students')
                    -> where ('n_identification',$data['n_identification']);
        $query = $this -> db -> get();  
        //verificamos que no exista un estudiente con ese n_identicacion
        if($query -> num_rows() == 0){

            $query = $this -> db -> insert('students',$data);  
            //envio lo devuelto por el servidor true o false
            return $query;
            
        }else{
           return false;
        }
            
        
    }
    public function update($data){
            if($this ->input ->post('repet_course')== null)
                $r_corse = 0;
            else
                $r_corse = $this ->input ->post('repet_course');
            $id =$data['id_student'];
            $n_i=$data['n_identification'];
            $nam=$data['name'];
            $d_bith=$data['date_birth'];
            $c_c=$data['current_course'];
            $r_c=$r_corse;
            $ema=$data['email'];
            $query = $this ->db ->query('
                UPDATE students SET  
                n_identification ='.$n_i.'
                , name = "'.$nam.'", date_birth ="'.$d_bith.'"
                , current_course ="'.$c_c.'"
                , repet_course ='.$r_c.', email ="'.$ema.'" 
                 WHERE id_student = '.$id.';'
            );
            return $query;
            //}else{
            //    return false;
            //}
                
        /*
       else{
            //$data =array_slice($data,1,6);
            $this ->db -> update('students',$data);
            $this ->db ->set($data);
            //$this ->db ->from('students');
            $this ->db ->where('id_student',$data['id_student']);
            
            $query = $this -> db -> get();
            return $query->result;
        }*/
        
    }
    public function delete($id,$nameTable){
        $query = $this->db
                      ->delete($nameTable, array('id_student' => $id)); 
        return $query;
    }
        public function deleteByID($nameTable,$index){
         $query = $this->db
                      ->delete($nameTable,$index); 
        return $query;
    }
    
    //funcion generica para relizar un select de
    //un campo especifico, de una tabla especifica,
    // con un id especifico.
    
    //Donde id es el valor del indice que queremos traer,
    //nameTabla el nombre de la tabla 
    //where es el campo que queremos seleccionar
    
    public function getOne($id,$nameTable,$where, $select = '*'){
        $this -> db -> select($select)
                    ->from($nameTable)
                    -> where ($where,$id);
            $query = $this -> db -> get();
            return $query ->result();
    }
    public function getID($index){
         $this -> db -> select('id_student')
                    ->from('students')
                    -> where ('n_identification',$index);
            $query = $this -> db -> get();
            return $query ->result_array();
    }
    
}
    
