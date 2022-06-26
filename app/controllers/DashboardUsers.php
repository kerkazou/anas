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

    public function delet() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING); 
            $data = [
                'id' => $_GET['id']
            ];
            if($this->userModel->delet($data)){
                redirect('dashboardUsers/index');
            }else if($user == false){
                redirect('dashboardUsers/index');
            }
        }
        else{
            redirect('dashboardUsers/index');
        }
    }

    
}