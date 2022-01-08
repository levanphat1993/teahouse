<?php

class Gift extends Controller {

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false){
            Session::destroy();
            header('location: ../login');
            exit;
        }

        $this->view->js = array(
            'employee/js/employee.js'
        );
    }
    public function index()
    {
        $this->view->data = $this->model->fetchAll();
        $this->view->render('gift/index');
    }

    public function insert()
    {
        if($this->model->insert()){
            header('location: ../gift');
        }
    }

}