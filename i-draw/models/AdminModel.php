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

    function getAllUser($name='',$username='',$id=''){
        
        if ($name != "") {
            $find_name = "OR `account_name` LIKE ('%$name%')";
        }
        if ($username != "") {
            $find_username = "OR `account_name` LIKE ('%$username%')";
        }
        if ($id != "") {
            $find_id = "OR `account_name` LIKE ('%$id%')";
        }

        $sql = " SELECT * 
        FROM `imghub_account`
        WHERE `level` = 'member'
        -- AND `level` = 'vip'
        $find_name
        $find_username
        $find_id
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