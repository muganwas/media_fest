<?php
class gen_func{

    public function show_footer(){

        require('includes/footer.php');

    }
    public function show_header(){

        require("includes/header.php");


    }
    public function copy_right(){

        $date = new DateTime();
        $date = $date->format("Y");
        echo "&copy;", $date, " Media Fest, All rights reserved.";


    }
}
?>