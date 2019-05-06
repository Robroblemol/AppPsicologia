
<?php 
    echo modules::run("Home/setTitle/$title");
    echo modules::run("Home/setApp/$app");
    echo modules::run("Home/getHead");
    echo modules::run("Home/getNav");
    echo modules::run("Home/getHeader");
    echo modules::run("Student/getForm");
    echo modules::run("Home/getFooter");

?>