<?php

class Dashboard extends Controller {

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
            'dashboard/js/dashboard.js'
        );
    }

    public function index()
    {
        $this->view->render('dashboard/index');
    }

    public function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }

}