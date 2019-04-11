<?php
function setBoleanDataAdd(){
    return'<div class = "pretty.radio-buttons">
                    <div class = "radio">
                        <label>
                            <input id = "field-repet_course-true"
                                type = "radio" name = "repet_course"
                                value="0" checked="checked">
                                 No
                        </label>
                    </div>
                    <div class = "radio">
                        <label>
                            <input id = "field-repet_course-flase"
                                type = "radio" name = "repet_course"
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