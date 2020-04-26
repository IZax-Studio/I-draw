<?php

require_once("BaseModel.php");
class UserModel extends BaseModel
{


    function __construct()
    {
        if (!static::$db) {
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
        mysqli_set_charset(static::$db, "utf8");
    }


    function getLogin($username, $password)
    {

        $sql = "SELECT *
        FROM `imghub_account`
        WHERE `imghub_account`.`username` = '$username' AND `imghub_account`.`password` = '$password'";
        echo $sql;
        if ($result = mysqli_query(static::$db, $sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getUserByCode($id){
        $sql = " SELECT * 
        FROM account_name 
        WHERE id = '30072544' 
        ";
        echo $sql;
        if ($result = mysqli_query(static::$db, $sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }
}