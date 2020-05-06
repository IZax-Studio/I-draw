<?php

require_once("BaseModel.php");
class ReportModel extends BaseModel
{


    function __construct()
    {
        if (!static::$db) {
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
        mysqli_set_charset(static::$db, "utf8");
    }
    function getReportGroupByID($id=""){
        if ($id!="") {

            $str = "WHERE `id` = '$id'
                    OR `group_name` = '$id'";
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
}