<?php

class Employee_Model extends Model {

    public $TABLE = 'employee';
    public $ID = 'id';
    public $NAME = 'name';
    public $PHONE = 'phone';
    public $EMAIl = 'email';
    public $CREATE_AT = 'create_at';
    public $UPDATE_AT = 'update_at';
    public $ACTION = 'action';

    function __construct()
    {
        parent::__construct();
    }

    public function fetchAll()
    {
        $ex = $this->db->prepare("SELECT name, phone, email, create_at, update_at FROM employees where 1");
        $ex->execute();
        return $ex->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert()
    {
        $data = array(
            $_POST['name'],
            $_POST['phone'],
            $_POST['email'],
            date('Y-m-d H:i:s', time()),
            date('Y-m-d H:i:s', time()),
            1
        );
        $ex = $this->db->prepare("insert into employees (name , phone, email, create_at, update_at, action) 
                                    values (?, ?, ?, ?, ?, ?)");
        try{
          $this->db->beginTransaction();
          $ex->execute($data);
          $this->db->commit();
        }catch (Exception $e){
          $this->db->rollback();
          echo $e; die;
        }
        return true;
    }



}