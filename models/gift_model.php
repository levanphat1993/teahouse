<?php

class Gift_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }

    public function fetchAll()
    {
        $ex = $this->db->prepare("SELECT name, quantily, create_at, update_at FROM gifts where 1");
        $ex->execute();
        return $ex->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert()
    {
        $data = array(
            $_POST['name'],
            $_POST['quantily'],
            date('Y-m-d H:i:s', time()),
            date('Y-m-d H:i:s', time()),
            1
        );

        $ex = $this->db->prepare("insert into gifts (name , quantily, create_at, update_at, action) 
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