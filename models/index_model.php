<?php

class Index_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }

    public function store()
    {
        $ex = $this->db->prepare("SELECT id, name FROM stores where 1");
        $ex->execute();
        return $ex->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function search()
    {
        $ex = $this->db->prepare("SELECT coupons.code FROM coupons WHERE   coupons.store_id  = :store_id");
        $ex->execute(array(
                ':store_id' => $_POST['store_id'],
            ));
        return $ex->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getGifts()
    {
        $ex = $this->db->prepare("SELECT name FROM gifts where 1");
        $ex->execute();
        return $ex->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function isStorePrioritize(){
        $ex = $this->db->prepare("SELECT store_id FROM coupons where  code = :code");
        $ex->execute(array(
            ':code' => $_POST['code']
        ));
        return  ($ex->fetch(PDO::FETCH_COLUMN)  == 1) ? true : false;
    }

    public function xhrRun()
    {
        $data = $this->getGifts();
        if(!$this->isStorePrioritize()){
            return $data[array_rand($data)]['name'];
        }
        $str = '';
        for ($i = 0 ; $i < (100/10); $i++){
            $str = $data[array_rand($data)]['name'];
            if($str == 'iphone'){
                break;
            }
        }
        return $str;
    }



}