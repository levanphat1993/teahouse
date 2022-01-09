<?php

class Assignment_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }

    public function fetchAll()
    {
        $sql = " select employees.name as 'employee_name', stores.name as 'store_name', assignment.create_at, assignment.update_at, assignment.action as 'action'  from `assignment`
left join employees ON employees.id = assignment.employee_id
left join stores ON stores.id = assignment.store_id
where 1";

        $ex = $this->db->prepare($sql);
        $ex->execute();
        return $ex->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function employee()
    {
        $ex = $this->db->prepare("SELECT id, name FROM employees where 1");
        $ex->execute();
        return $ex->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function store()
    {
        $ex = $this->db->prepare("SELECT id, name FROM stores where 1");
        $ex->execute();
        return $ex->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert()
    {
        $data = array(
            (int) $_POST['employee_id'],
            (int) $_POST['store_id'],
            date('Y-m-d H:i:s', time()),
            date('Y-m-d H:i:s', time()),
            1
        );
        $ex = $this->db->prepare("insert into assignment (employee_id , store_id, create_at, update_at, action) 
                                    values (?, ?, ?, ?, ?)");

        try{
            $this->db->beginTransaction();
            print_r($data);
            $ex->execute($data);
            $this->db->commit();
        }catch (Exception $e){
            $this->db->rollback();
            echo $e; die;
        }
        return true;
    }


}