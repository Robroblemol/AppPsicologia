
<?php 
    echo modules::run("Home/get_head");
    echo modules::run("Home/get_nav");
    echo modules::run("Home/get_header");
    echo modules::run("Student/get_table");
    echo modules::run("Home/get_footer");

?>