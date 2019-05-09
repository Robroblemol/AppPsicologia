<?php 
    //echo modules::run("Home/setTitle/$title");
    //echo modules::run("Home/setApp/$app");
    echo modules::run("Home/get_head");
    echo modules::run("Home/get_nav");
    echo modules::run("Home/get_header");
    echo modules::run("Social_economic/get_table");
    echo modules::run("Home/get_footer");

?>