<?php

class Assignment extends Controller {

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
            'assignment/js/assignment.js'
        );
    }

    public function index()
    {
        $this->view->employees  = $this->model->employee();
        $this->view->stores  = $this->model->store();
        $this->view->data = $this->model->fetchAll();
        $this->view->render('assignment/index');
    }

    public function insert()
    {
        if($this->model->insert()){
            header('location: ../assignment');
        }
    }


}