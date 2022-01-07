<?php

class Help extends Controller {
    function __construct()
    {
        parent::__construct();
    }

    public function index($arg = false)
    {
        $this->view->blah = $this->model->blah();
        $this->view->render('help/index');
    }
}
