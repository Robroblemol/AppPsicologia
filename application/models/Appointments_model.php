<?php
class Appointments_model extends CI_Model{
    
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
        //cargamos la base de datos
        $this->load->database();
    }
    
    public function get($limit = 10){
        //hacemos la consulta
        $query = $this -> db ->get('appointmets',$limit,0);
        return  $query -> result(); //devolvemos el resultado
    }
    public function add($data){
 
        $query = $this -> db -> insert('appointmets',$data);  
        //envio lo devuelto por el servidor true o false
        return $query;
        
    }
    public function update($data){
    
        $id =$data['id_app'];
        $id_stu=$data['id_stu'];
        $des=$data['des'];
        $a_app=$data['a_app'];
        $s_app=$data['s_app'];
        $query = $this ->db ->query('
            UPDATE appointmets SET  
            id_student ='.$id_stu.'
            , description = "'.$des.'"
            , asing_appo = "'.$a_app.'"
            , state_appo = "'.$s_app.'"
             WHERE id_appointmet = '.$id.';'
        );
        return $query;
        
    }
    public function delete($id,$nameTable){
        $query = $this->db
                      ->delete($nameTable,
                            array('id_appointmet' => $id)); 
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