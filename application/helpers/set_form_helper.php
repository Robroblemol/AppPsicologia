<?php
function setBoleanDataAdd(){
    return'<div class = "pretty.radio-buttons">
                    <div class = "radio">
                        <label>
                            <input id = "field-repet_course-true"
                                type = "radio" 
                                name = "repet_course"
                                value="0" checked="checked">
                                 No
                        </label>
                    </div>
                    <div class = "radio">
                        <label>
                            <input id = "field-repet_course-flase"
                                type = "radio" 
                                name = "repet_course"
                                value="1" >
                                    Si
                        </label>
                    </div>
                </div>';
}

function fromRepeatView($value){
    if($value == 1){
            return' Si';
        }else{
            return ' No';
        }
}
function fromSelectAcudiente($query,$id){
    $combo = '<select name = "id_alum" 
                class = "chosen-select" 
                data-placeholder="Seleccionar acudiente" 
                style="width: 300px; display: none;">';
    $endcombo = '</select>';
    
    foreach($query -> result() as $row){
        if($row->id_alum == $id){
            $combo .='<option value="'.$row->id_relative.
                    '" selected="selected">'.$row->name.
                    '</option>';
        }
        else{
             $combo .= '<option value="'.$row->id_relative.
                        '">'.$row->name.
                        '</option>';
        }
    }
    return $combo.$endcombo;
}