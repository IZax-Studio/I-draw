<?php
$keyword = $_GET['keyword'];
 ?>






<div style="margin:5vh;padding-left: 10vh;padding-right: 10vh;padding-top: 2vh;background-color: rgba(0, 0, 0, 0.05);border-radius:12px;border-style: dotted;">
<p style="text-align:center;">User Management <b style="color:red;">[Member]</b></p>
<br>
<div>
    <form action="" method="post" target="_self">
        <table style="text-align:right;">
            <tr>
                <td>
                    <input type="text" style="margin-right:auto;width:50vh;border-style: dashed;" class="form-control"  placeholder="Search account" name="keyword">
                </td>
                <td>
                    <a><input type="submit" name="submit" class="btn-light-green" value="Search"></a>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php if ($keyword !='') {?>
<br>
<table>
    <tr>
        <td>
            <p style="font-size:small;"> Latest keyword :&nbsp; </p>
        </td>
        <td>
            <?php echo '<pre style="width:fit-content;">',$keyword,'</pre>';?>
        </td>
        <td>
            <a href="index.php?app=<?php echo $user['level'];?>&action=user_management"><button style="height: 4.5vh;margin-bottom: 1.5vh;color:white;" class="btn-light-blue">Clear keyword</button></a>
        </td>
    </tr>
</table>
<?php }?>
<br>
    <div style="width:100%;margin:auto;border-top-style: double;padding-top: 10px;padding-right: 40px;cursor:context-menu;">
        <ul>
            <?php for($i=0; $i < count($users); $i++){?>
                    <li style="list-style-type: none;background-color:#c3c3c3;border-radius: 12px;padding:2vh;margin:5rem;font-size: xx-small;background-position: center;background-repeat: no-repeat;background-size: cover;height: 250px;background-image: url(<?php echo"../upload/user/banner/",$users[$i]['img_banner'];?>);">
                        <span>
                                <p style="color:wheat;">
                                    <img class="img-profile" id="img_profile" src="<?php echo "../upload/user/",$users[$i]['img_profile']; ?>">
                                    <a title="Inspect <?php echo $users[$i]['account_name']; ?> " class="btn-green" style="border-radius:5px;padding:1vh;text-decoration:none;margin:1vh;" href="?app=user&action=profile&profile_id=<?php echo $users[$i]['id'];?>">Detail</a>
                                    <p><font title="ID : <?php echo $users[$i]['id']; ?>" class="tag-detail1" style="border-radius:5px;margin:2px;padding:.5vh;font-size: medium;width:50%;"> ID : <?php echo $users[$i]['id']; ?></font>
                                    <font title="Account name : <?php echo $users[$i]['account_name']; ?>" class="tag-detail1" style="border-radius:5px;margin:2px;padding:.5vh;font-size: medium;width:50%;"> Account name : <?php echo $users[$i]['account_name']; ?></font></p>
                                    <p><font title="Username : <?php echo $users[$i]['username']; ?>" class="tag-detail1"style="border-radius:5px;margin:2px;padding:.5vh;font-size: medium;width:50%;"> Username : <?php echo $users[$i]['username']; ?></font>
                                    <font title="Email : <?php echo $users[$i]['email']; ?>" class="tag-detail1" style="border-radius:5px;margin:2px;padding:.5vh;font-size: medium;width:50%;"> Email : <?php echo $users[$i]['email']; ?></font></p>
                                    <p><font title="Group : <?php echo $users[$i]['account_group']; ?>" class="tag-detail1"style="border-radius:5px;margin:2px;padding:.5vh;font-size: medium;width:50%;"> Group : <?php echo $users[$i]['account_group']; ?></font>
                                    <font title="Last update : <?php echo $users[$i]['lastupdate']; ?>" class="tag-detail1" style="border-radius:5px;margin:2px;padding:.5vh;font-size: medium;width:50%;"> Latest update : <?php echo $users[$i]['lastupdate']; ?></font></p>
                                    <p <font title="Member since : <?php echo $users[$i]['since']; ?>" class="tag-detail1" style="border-radius:5px;margin:2px;padding:.5vh;font-size: medium;width:30%;"> Member since : <?php echo $users[$i]['since']; ?></p>
                                </p>
                        </span>
                    </li>
            <?php }?>
        </ul>
    </div>
</div>


<?php 
// echo '<pre>',$keyword,'</pre>';
?>
