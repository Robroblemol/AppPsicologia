<?php
class Social_economic_model extends CI_Model{
    
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
        //cargamos la base de datos
        $this->load->database();
    }
    
    public function get($limit = 10){
        //hacemos la consulta
        $query = $this -> db ->get('social_economic_histories',$limit,0);
        return  $query -> result(); //devolvemos el resultado
    }
    public function add($data){
 
        $query = $this -> db -> insert('social_economic_histories',$data);  
        //envio lo devuelto por el servidor true o false
        return $query;
        
    }
    public function update($data){
    
        $id =$data['id_soc'];
        $id_stu=$data['id_stu'];
        $f_tim=$data['f_tim'];
        $i_per=$data['i_per'];
        $b_enc=$data['b_enc'];
        $l_pro=$data['l_pro'];
        $a_heal=$data['a_hea'];
        $a_psi=$data['a_psi'];
        $query = $this ->db ->query('
            UPDATE social_economic_histories SET  
            id_student ='.$id_stu.'
            , free_time = "'.$f_tim.'"
            , inter_persons = "'.$i_per.'"
            , behavior_encouragement ="'.$b_enc.'"
            , life_proyect ="'.$l_pro.'"
            , ant_health ="'.$a_heal.'"
            , ant_psicology ="'.$a_psi.'"
             WHERE id_social_economic = '.$id.';'
        );
        return $query;
        
    }
    public function delete($id,$nameTable){
        $query = $this->db
                      ->delete($nameTable,
                            array('id_social_economic' => $id)); 
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