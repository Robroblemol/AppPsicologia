<?php
class School_histories_model extends CI_Model{
    
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
        //cargamos la base de datos
        $this->load->database();
    }
    
    public function get($limit = 10){
        //hacemos la consulta
        $query = $this -> db ->get('school_histories',$limit,0);
        return  $query -> result(); //devolvemos el resultado
    }
    public function add($data){
 
        $query = $this -> db -> insert('school_histories',$data);  
        //envio lo devuelto por el servidor true o false
        return $query;
        
    }
    public function update($data){
    
        $id =$data['id_sch'];
        $id_stu=$data['id_stu'];
        $h_sch=$data['h_sch'];
        $s_dif=$data['s_dif'];
        $query = $this ->db ->query('
            UPDATE school_histories SET  
            id_student ='.$id_stu.'
            , histori_school = "'.$h_sch.'"
            , skills_dificulties ="'.$s_dif.'"
             WHERE id_school_histories = '.$id.';'
        );
        return $query;
        
    }
    public function delete($id,$nameTable){
        $query = $this->db
                      ->delete($nameTable,
                            array('id_school_histories' => $id)); 
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
    
}