<?php
class CustomersModel {
    private $ant_data = array();
    public function setArray($dato  = null){
        $this -> $ant_data = $dato;
    }
    public function getArray(){
        return $this ->ant_data;
    }
}