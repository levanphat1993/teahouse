<?php

class Login_Model extends Model {
    function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $ex = $this->db->prepare("select id from users where 
                           username = :username and password = MD5(:password)");
        $ex->execute(array(
            ':username' => $_POST['username'],
            ':password' => $_POST['password']
        ));

        $data = $ex->fetchAll();
        $count = $ex->rowCount();
        echo '<pre>' . var_export($count, true) . '</pre>'; die;
    }
}