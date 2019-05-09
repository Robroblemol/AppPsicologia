<?php
class Attendants_model extends CI_Model{
  public function __construct() {
          //llamamos al constructor de la clase padre
          parent::__construct();
          //cargamos la base de datos
          $this->load->database();
      }
      public function get($limit = 50){
       //hacemos la consulta
       $query = $this -> db ->get('relatives',$limit,0);
       return  $query -> result(); //devolvemos el resultado
   }
   public function add($data){
     $query = $this -> db -> insert('relatives',$data);
     //envio lo devuelto por el servidor true o false
     return $query;
   }
   public function update($data){
               $id_relative =$data['id_relative'];
               $id_student=$data['id_student'];
               $type=$data['type'];
               $name=$data['name'];
               $date_bith=$data['date_birth'];
               $grade=$data['grade'];
               $profession=$data['profession'];
               $adress=$data['adress'];
               $phone=$data['phone'];
               $email=$data['email'];
               $query = $this ->db ->query('
                   UPDATE relatives SET
                   id_student ='.$id_student.'
                   , type ="'.$type.'", name = "'.$name.'", date_birth ="'.$date_bith.'"
                   , grade = "'.$grade.'", profession ="'.$profession.'"
                   , adress ="'.$adress.'", phone ="'.$phone.'"
                   , email ="'.$email.'"
                    WHERE id_relative = '.$id_relative.';'
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