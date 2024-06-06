<?php

    include_once "./mvc/model/homemodel.php";

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        if(!empty($email)){
            $user = get_user($email);
        }
    }
    include_once "./mvc/view/homeview.php";

?>
