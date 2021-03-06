<?php

require_once("BaseModel.php");
class AdminModel extends BaseModel
{


    function __construct()
    {
        if (!static::$db) {
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
        mysqli_set_charset(static::$db, "utf8");
    }

    function getAllUser($keyword=""){

        $sql = "SELECT * 
        FROM `imghub_account`
        WHERE `level` = 'member'
        AND 'level' NOT LIKE 'admin'
        AND `id` LIKE ('%$keyword%')
        OR `account_name` LIKE ('%$keyword%')
        OR `username` LIKE ('%$keyword%')
        OR `email` LIKE ('%$keyword%')
        OR `account_group` LIKE ('%$keyword%')
        ";
        // echo "<pre>",$sql,"</pre>";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

}