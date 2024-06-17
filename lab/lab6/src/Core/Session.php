<?php

namespace Core;

class Session{

    public static function set($key,$value){
        $_SESSION[$key] = $value;
    }

    public static function get($key){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public static function remove($key){
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    public static function destroy(){
        session_destroy();
    }

    public static function setAccount($id,$name,$email,$role){
        $account = [
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'role' => $role
        ];
        $nameSession = $role == 0 ? 'account' : 'accountAdmin';
        self::set($nameSession,$account);
    }

    public static function checkAdmin(){
        return isset($_SESSION['accountAdmin']) ? true : false;
    }

    public static function checkUsers(){
        return isset($_SESSION['account']) ? true : false;
    }

    public static function setcart($iduser,$idproduct,$quantity){
        $cart = self::get('cart');
        if(!$cart){
            $cart = [
                'iduser' => $iduser,
                'products' => [
                    ['idproduct' => $idproduct,'quantity' => $quantity]
                ]
            ];
        }
        else{
            $check = false;
            foreach($cart['products'] as $key => $value){
                if($value['idproduct'] == $idproduct){
                    $cart['products'][$key]['quantity'] += $quantity;
                    $check = true;
                    break;
                }
            }
            if(!$check){
                $cart['products'][] = ['idproduct' => $idproduct,'quantity' => $quantity];
            }
        }
        $cart['quantity'] = count($cart['products']);
        self::set('cart',$cart);
    }

    function tsest(){
        $cart = [
            'iduser' => 1,
            'products' => [
                ['idproduct' => 1,'quantity' => 2],
                ['idproduct' => 2,'quantity' => 3]
            ],
            'quantity' => 5
        ];
    }

}