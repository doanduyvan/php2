<?php


namespace Controllers;
use Core\Controller;
use Models\UsersModel;
use Core\Session;

class AuthController extends Controller
{
    private $UsersModel;

    public function __construct()
    {
        $this->UsersModel = new UsersModel();
        // parent::Users();
    }

    public function signin()
    {
        $this->Render("Users/login/SigninView");
    }

    public function signup()
    {
        $this->Render("Users/login/SignupView");
    }

    public function signout()
    {
        Session::destroy();
        header("Location: ". WEB_ROOT);
    }

    // post

    public function signinpost(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $data = $this->UsersModel->checklogin($email,$password,0);
            if($data){
                $datarspon['status'] = 1;
                $datarspon['message'] = "Đăng nhập thành công";
                Session::setAccount($data['id'],$data['fullname'],$data['email'],0);
            }else{
                $datarspon['status'] = 0;
                $datarspon['message'] = "Tài khoản hoặc mật khẩu không đúng";
            }
            echo json_encode($datarspon);
        }
    }

    public function adduserpost(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $role = 0;

            $data['roles'] = $role;
            $data['fullname'] = $_POST['fullname'];
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
            $data['created_at'] = NOW;

            try{
                $check = $this->UsersModel->addusermodel($data);
            if($check){
                $lastid = $this->UsersModel->lastInsertId();
                Session::setAccount($lastid,$data['fullname'],$data['email'],$role);
                $datarspon['status'] = 1;
                $datarspon['message'] = "Đăng ký thành công";
            }else{
                $datarspon['status'] = 0;
                $datarspon['message'] = "Đăng ký thất bại";
            }
            }catch(\Exception $e){
                $check = false;
                $datarspon['status'] = 0;
                $datarspon['message'] = "Email đã tồn tại!";
            }
            echo json_encode($datarspon);
        }
    }


}