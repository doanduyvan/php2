<?php

namespace Controllers;

use Core\Controller;
use Core\Session;

class ShopController extends Controller{
    private $data = [];
    private $productsModel = null;
    private $categoryModel = null;

    public function __construct()
    {
        $this->categoryModel = new \Models\CategoryModel();
        $this->productsModel = new \Models\ProductsModel();
        parent::Users();
    }

    public function index(){
        $this->data['products'] = $this->productsModel->getallproduct();
        $this->Render("Users/shop/ShopView",$this->data);
    }

    public function showproduct($id = null){

        if($id && !is_numeric($id)){
            header("Location:".WEB_ROOT."shop");
        }
        $this->data['product'] = $this->productsModel->getbyidproduct($id);
        if(empty($this->data['product'])){
            header("Location:".WEB_ROOT."shop");
        }
        $this->data['imgdetails'] = $this->productsModel->getimgdetails($id);
        $this->data['category'] = $this->categoryModel->getbyidcategory($this->data['product']['productcategory_id']);
        $this->Render("Users/shop/ProductDetailView",$this->data);
    }

    public function cart(){
        $this->Render("Users/shop/CartView");
    }

    // post

    public function addtocartpost(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $user = Session::checkUsers();
            if(!$user){
                $datarespon = [
                    "status" => 0,
                    "message" => "Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng"
                ];
                echo json_encode($datarespon);
                return;
            }else{
                $datarespon = [
                    "status" => 1,
                    "message" => "Thêm sản phẩm vào giỏ hàng thành công"
                ];
                echo json_encode($datarespon);
                return;
            }

            $dataresquest = json_decode(file_get_contents("php://input"),true);
            $test = ['ok' => 'da ket noi thanh cong'];

            echo json_encode($test);
        }
    }
        
}