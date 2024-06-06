<?php

namespace Controllers;

use Core\Controller;

class ShopController extends Controller{

    public function __construct()
    {
        parent::Users();
    }

    public function index(){
        $this->Render("Users/shop/ShopView");
    }

    public function showproduct(){
        $this->Render("Users/shop/ProductDetailView");
    }
}