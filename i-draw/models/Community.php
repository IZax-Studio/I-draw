<?php

require_once("BaseModel.php");
class Community extends BaseModel
{


    function __construct()
    {
        if (!static::$db) {
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
        mysqli_set_charset(static::$db, "utf8");
    }

    function getAllGroup($keyword=""){
        if ($keyword!="") {

            $str = "WHERE `id` LIKE ('%$keyword%')
            OR `group_name` LIKE ('%$keyword%')";
        }


        $sql = "SELECT * 
        FROM `tbl_community`
        $str
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
    function getGroupByID($id=""){
        if ($id!="") {

            $str = "WHERE `id` LIKE ('%$id%')
                    OR `group_name` LIKE ('%$id%')";
        }


        $sql = "SELECT * 
        FROM `tbl_community`
        $str
        ";
        // echo "<pre>",$sql,"</pre>";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }
    function getMemberGroupByID($id=""){
        if ($id!="") {

            $str = "WHERE tbl_community.id LIKE ('%$id%')
                    OR tbl_community.group_name LIKE ('%$id%')
                    OR imghub_account.account_group LIKE ('%$id%')";
        }


        $sql = "SELECT * ,
                imghub_account.id as id_account
                FROM `imghub_account`
                LEFT JOIN tbl_community on imghub_account.account_group = tbl_community.group_name
        $str
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