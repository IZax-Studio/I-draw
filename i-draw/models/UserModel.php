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
        // echo $sql;
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
        FROM `imghub_account` 
        WHERE imghub_account.id = '$id' 
        ";
        // echo $sql;
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }
    function getUserBy(){
        $sql = " SELECT * 
        FROM `imghub_account`
        ";
        // echo $sql;
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }
    function getPublicChatBy(){
        $sql = " SELECT *
        FROM `tbl_public_chat`
        ORDER BY chat_id DESC
        LIMIT 10
        ";
        // echo $sql;
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }
    function insertPublicChat($user_name,$messages){

        // $name = mysql_real_escape_string($user_name);
        // $msg = mysql_real_escape_string($messages);

        $name =$user_name;
        $msg = $messages;

        if ($msg == "") {
            $msg = "♥";
        }
        
        $sql = " INSERT INTO `tbl_public_chat` (
                `account_name`,  `chat_msg`, `chat_datetime`
                ) VALUES (
                '$name', '$msg', NOW() 
                );
        ";
        // echo $sql;
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            // while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            //     $data[] = $row;
            // }
            // $result->close();
            return $data;
            exit;
        }
    }
    function getPostByCode($id){
        $sql = " SELECT * 
        FROM `imghub_account` 
        LEFT JOIN tbl_post ON imghub_account.id = tbl_post.id
        WHERE imghub_account.id = '$id'
        ORDER BY post_since DESC 
        ";
        // echo $sql;
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }
    function insertUser($data = [] ){
        $data['username']=mysqli_real_escape_string(static::$db,$data['username']);
        $data['password']=mysqli_real_escape_string(static::$db,$data['password']);
        $data['email']=mysqli_real_escape_string(static::$db,$data['email']);
        $data['account_name']=mysqli_real_escape_string(static::$db,$data['account_name']);


        $sql = " INSERT INTO `imghub_account` 
        (`username`,
        `password`,
        `email`,
        `account_name`,
        `intro`,
        `img_profile`,
        `img_banner`,
        `account_group`,
        `grouplevel`,
        `level`,
        `lastupdate`,
        `since`
        ) VALUES ('
        ".
        $data['username'].",'".
        $data['password'].",'".
        $data['email'].",'".
        $data['account_name'].",
         '','".
        $data['img_profile'].",
         '',
         'No group',
         '',
         'member',
         NOW(),
         NOW()
         )";
        // echo $sql;
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }
    function updateUser($id, $data = []){
        $data['email']=mysqli_real_escape_string(static::$db,$data['email']);
        $data['account_name']=mysqli_real_escape_string(static::$db,$data['account_name']);
        $data['intro']=mysqli_real_escape_string(static::$db,$data['intro']);
        $data['account_group']=mysqli_real_escape_string(static::$db,$data['account_group']);


        $sql = " UPDATE `imghub_account` SET 
        `email`         = '".$data['$email']."', 
        `account_name`  = '".$data['$account_name']."', 
        `intro`         = '".$data['$intro']."', 
        `img_profile`   = '".$data['$img_profile']."', 
        `img_banner`    = '".$data['$img_banner']."',
        `account_group` = '".$data['$account_group']."',
        `lastupdate`    = NOW()
        WHERE id = '$id'
        ";
        // echo $sql;
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