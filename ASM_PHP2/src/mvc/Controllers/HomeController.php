<?php

namespace Controllers;

use Core\Controller;

class HomeController extends Controller{

    private $HomeModel = null;
    private $data = [];
    function __construct()
    {
       
       parent::Users();
    }



    function index(){
        

        $this->Render("Users/home/HomeView",$this->data);

    }

    function testhome($param1,$param2 = null){
        echo "test home";

        echo "<br>" . $param1;

        echo "<br>" . $param2;
    }

}