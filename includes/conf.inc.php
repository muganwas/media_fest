<?php
ob_start();
if(isset($_POST['username'])){

    $user_id = htmlentities(trim($_POST['username']));

}else{

    $user_id ="visitor" . rand(0, 100000);
}
if(session_start() == null){

    session_start();

}
if(setcookie($user_id) == null){

    setcookie($user_id);
}
$temp_name = explode('/', $_SERVER['SCRIPT_NAME']);
$temp_name1 = array_pop($temp_name);
$current_page = $temp_name1;
$current_page_name = explode('.', $current_page);
$current_page_name = $current_page_name[0];
if($current_page_name == "index"){

    $current_page_name = "MEDIA FEST | HOME";
}else{

    $current_page_name = "MEDIA FEST | ".$current_page_name;
}

?>