<?php

class Coupons extends Controller {

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
            'coupons/js/coupons.js'
        );
    }

    public function index()
    {
        $this->view->stores  = $this->model->store();
        $this->view->data  = $this->model->fetchAll();
        $this->view->render('coupons/index');
    }

    public function insert()
    {
        if($this->model->insert()){
            header('location: ../coupons');
        }
    }


}