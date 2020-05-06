<?php
// $user_id = $user['id'];
// if ($users['id'] != $user_id) {
//     $readonly = "readonly";
// }else {
//     $readonly = "";
// }
?>

<div>
    <table style="width:100%">
    <tr style="background-position: center;background-repeat: no-repeat;background-size: cover;height: 250px;background-image: url(<?php echo"../upload/user/banner/",$users['img_banner'];?>);">
        <td style="border-top-left-radius: 12px;vertical-align: bottom;text-align: left;" colspan="2">
            <p>  
                <img class="img-profile" id="myImg" alt="<?php echo "This is a ",$users['account_name'],"'s profile.";?>" style="height: 150px;width: 150px;margin-left: 2vh;border-color: <?php echo $level_color?>;" src="<?php echo "../upload/user/",$users['img_profile']; ?>">
            </p>
        </td>
        <td style="width:15%;vertical-align: bottom;border-top-right-radius: 12px;">
            <?php if ($users['account_name'] != $user['account_name']) {?>
            <p>
                <input type="button" class="btn-green" style="width:50%" value="Add friend">
            <!-- </p>
            <p> -->
                <input type="button" class="btn-blue" style="width:40%" value="Follow">
            </p>
            <?php }?>
        </td>
    </tr>
    <tr style="background-color: blanchedalmond;">
        <td style="width:50%;padding:5px;"><p style="padding-top:20px;">Name : <?php echo $users['account_name'];?></p></td>
        <td colspan="2" style="width:50%;padding:5px;"><p style="padding-top:20px;"><p>
        <?php if ($users['account_group'] != "No group") {?>
            Group : <?php echo $users['account_group'];?> [<?php echo $users['grouplevel'];?>]
        <?php }?>
        </p></td>
    </tr>
    <tr style="background-color: blanchedalmond;">
        <td style="width:50%;padding:5px;"><p>Last update : <?php echo $users['lastupdate'];?></p></td>
        <td colspan="2" style="width:50%;padding:5px;"><p>Member since : <?php echo $users['since'];?> [<?php echo $users['level'];?>]</p></td>
    </tr>
    <tr>
        <td colspan="3"><input readonly type="text" style="border-bottom-left-radius: 12px;border-bottom-right-radius: 12px;border-style: dotted;text-align: center;height: -webkit-fill-available;width: -webkit-fill-available;min-height: 100px;" value="<?php echo $users['intro'];?>"></td>
    </tr>
    </table>
    <br>
    <br>
<!-- ============================================================Show Latest Image -->
    <?php if ($post['img_name_post'] != "") {?>
        <table style="width:100%">
            <tr>
                <td style="text-align:center;">
                    <p>This is a my latest draw picture!</p>
                    <b><?php echo $post['img_name_show'];?></b>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    <img style="height:700px;border-radius:12px;border-color: black;border-width: 1px;border-style: double;" src="<?php echo "../upload/post/",$post['img_name_post']; ?>">
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    <p>Description</p>
                    <p>| <?php echo $post['img_description'];?> |</p>
                </td>
            </tr>
        </table>
    <?php }?>
<!-- ============================================================Show Image -->
    <div id="myModal" class="modal">
        <span style="font-size: 500%;color: #f1f1f1;" class="close">&times;</span>
            <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

</div>