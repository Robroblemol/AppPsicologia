<?php
class Family_relationship_model extends CI_Model{
    
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
        //cargamos la base de datos
        $this->load->database();
    }
    
    public function get($limit = 10){
        //hacemos la consulta
        $query = $this -> db ->get('family_relationship',$limit,0);
        return  $query -> result(); //devolvemos el resultado
    }
    public function add($data){
 
        $query = $this -> db -> insert('family_relationship',$data);  
        //envio lo devuelto por el servidor true o false
        return $query;
        
    }
    public function update($data){
    
        $id =$data['id_relationship'];
        $id_stu=$data['id_student'];
        $w_fat=$data['with_father'];
        $w_mot=$data['with_mother'];
        $w_bro=$data['with_brothers'];
        $w_step_par=$data['with_step_parents'];
        $obv=$data['observations'];
        $dat=$data['date'];
        $query = $this ->db ->query('
            UPDATE family_relationship SET  
            id_student ='.$id_stu.'
            , with_father = "'.$w_fat.'", with_mother ="'.$w_mot.'"
            , with_brothers ="'.$w_bro.'"
            , with_step_parents ="'.$w_step_par.'"
            , observations ="'.$obv.'"
             WHERE id_relationship = '.$id.';'
        );
        return $query;
        
    }
    public function delete($id,$nameTable){
        $query = $this->db
                      ->delete($nameTable,
                            array('id_relationship' => $id)); 
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