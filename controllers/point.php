<?php

class Point extends Controller {

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
            'point/js/point.js'
        );
    }

    public function index()
    {
        $this->view->employees  = $this->model->employee();
        $this->view->data  = $this->model->fetchAll();
        $this->view->render('point/index');
    }


    public function insert()
    {
        if($this->model->insert()){
            header('location: ../point');
        }
    }


}