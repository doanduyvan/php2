<?php

namespace Controllers;

use Core\Session;

class CartController
{
    public function addcartpost(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $user = Session::get('account');
            if(!$user){
                $datarespon = [
                    "status" => 0,
                    "message" => "Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng"
                ];
                echo json_encode($datarespon);
                return;
            }else{
                $datasquest = json_decode(file_get_contents("php://input"),true);
                $idproduct = $datasquest['idproduct'];
                $iduser = $user['id'];
                $quantity = $datasquest['quantity'];
                Session::setcart($iduser,$idproduct,$quantity);
                $quantityproduct = count(Session::get('cart')['products']);
                $testcart = Session::get('cart');
                $datarespon = [
                    "status" => 1,
                    "message" => "Thêm sản phẩm vào giỏ hàng thành công",
                    "quantityproduct" => $quantityproduct,
                    "cartsession" => $testcart
                ];
                echo json_encode($datarespon);
                return;
            }

            $dataresquest = json_decode(file_get_contents("php://input"),true);
            $test = ['ok' => 'da ket noi thanh cong'];

            echo json_encode($test);
        }
    }

    function showcartpost(){
        $data = ['ok' => "ok ket noi thanh cong posst ma khong can khai router"];
        echo json_encode($data);
    }

}