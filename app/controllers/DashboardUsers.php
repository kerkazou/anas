<?php

class DashboardUsers extends Controller {

    public function __construct() {
        $this->userModel = $this->model('user');
    }

    public function index(){
        if(isset($_SESSION['user_id'])){
            $users = $this->userModel->getUsers();
            $data = [
                'users' => $users
            ];
            $this->view('dashboardUsers/index' , $data);
        }else{
            redirect('');
        }
    }
}