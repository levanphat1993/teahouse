<?php

class Store_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }

    public function fetchAll()
    {
        $ex = $this->db->prepare("SELECT name, address, create_at, update_at FROM stores where 1");
        $ex->execute();
        return $ex->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert()
    {
        $data = array(
            $_POST['name'],
            $_POST['address'],
            date('Y-m-d H:i:s', time()),
            date('Y-m-d H:i:s', time()),
            1
        );

        $ex = $this->db->prepare("insert into stores (name , address, create_at, update_at, action) 
                                    values (?, ?, ?, ?, ?)");
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