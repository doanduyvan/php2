<?php

namespace Controllers;

use Core\Controller;

class BlogController extends Controller{

    public function __construct()
    {
        parent::Users();
    }

    public function index(){
        $this->Render("Users/blog/BlogView");
    }
}