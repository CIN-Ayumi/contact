<?php
require_once (ROOT_PATH.'Controllers/Controller.php');
require_once (ROOT_PATH.'Controllers/UserController.php'); //ログイン状態ときはログインボタン非表示
class HomeController extends Controller
{
    public function index(){
        $user = new UserController();
        $auth = $user->getAuth();
        $this->view('home/index', ['auth' => $auth]);
    }
}
