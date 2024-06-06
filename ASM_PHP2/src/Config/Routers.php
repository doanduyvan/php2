<?php


namespace Config;

class Routers{

    public static function getRouters(){
        return [
            "home"  => ["index"],
            "auth"  => ["signin","signout","signup","adduserpost","signinpost"],
            ];
        }

    public static function getAdminRouters(){
        return [
            "dashboard" => ["index"],
            "category" => ["index","add","edit","addpost","updatepost","delpost"],
            "brand" => ["index","add","edit","addpost","updatepost","delpost"],
            ];
        }
}

?>