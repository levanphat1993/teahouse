<?php

class Coupons_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }


    public function coupon($l)
    {
        return "PR".substr(
            str_shuffle(
                str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',$l-2)),0,$l-2);
    }


    public function fetchAll()
    {
        $sql = "SELECT stores.name as 'store_name', coupons.code, coupons.create_at, coupons.update_at, coupons.action FROM `coupons` 
LEFT JOIN stores on stores.id = coupons.store_id
WHERE 1";
        $ex = $this->db->prepare($sql);
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
            (int) $_POST['store_id'],
            $this->coupon(7),
            date('Y-m-d H:i:s', time()),
            date('Y-m-d H:i:s', time()),
            1
        );

        $ex = $this->db->prepare("insert into coupons (store_id, code, create_at, update_at, action) 
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