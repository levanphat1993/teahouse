<?php

class Point_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }

    public function fetchAll()
    {
        $sql = "select employees.name as 'employee_name', points.fulfillment as 'point', points.create_at, points.update_at, points.action    from `points`
left join employees ON employees.id = points.employee_id
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

    public function insert()
    {
        $data = array(
            $_POST['employee_id'],
            $_POST['fulfillment'],
            date('Y-m-d H:i:s', time()),
            date('Y-m-d H:i:s', time()),
            1
        );

        $ex = $this->db->prepare("insert into points (employee_id, fulfillment, create_at, update_at, action) 
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