<?php

class Database extends PDO {

    public function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=sql_teahouse_com', 'sql_teahouse_com', 'cARZyZF7jaXTNdWR');
    }
}