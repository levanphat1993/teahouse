<?php

class Index extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->view->js = array(
            'index/js/index.js'
        );
    }

    public function index()
    {
        $this->view->stores  =  $this->model->store();
        $this->view->render('index/index');
    }

    public function search()
    {
        $this->view->stores  = $this->model->store();
        $this->view->data = $this->model->search();
        $this->view->render('index/index');
    }

    public function xhrRun()
    {
        $srt = $this->model->xhrRun();
        echo "congrats you won : $srt";
    }
}
