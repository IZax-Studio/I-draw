<?php

require_once("BaseModel.php");
class PostModel extends BaseModel
{


    function __construct()
    {
        if (!static::$db) {
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
        mysqli_set_charset(static::$db, "utf8");
    }


    function getPostByID($id)
    {

        $sql = "SELECT * FROM `imghub_account` 
        LEFT JOIN tbl_post ON imghub_account.id = tbl_post.id
        WHERE imghub_account.id = '$id'";
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