<?php
if ($group['tag_background_color'] == '') {
    $background_color = 'black';
}else {
    $background_color = $group['tag_background_color'];
}

if ($group['tag_color'] == '') {
    $tag_color = 'color:white;';
}else {
    $tag_color = $group['tag_color'];
}
?>

<div>
    <table style="width:100%">
    <tr style="background-position: center;background-repeat: no-repeat;background-size: cover;height: 250px;background-image: url(<?php echo"../upload/community/group/profile/banner/",$group['group_banner'];?>);">
        <td style="border-top-left-radius: 12px;vertical-align: bottom;text-align: left;" colspan="2">
            <p>  
                <img class="img-profile" id="myImg" alt="<?php echo "This is a ",$group['group_name'],"'s profile.";?>" style="height: 150px;width: 150px;margin-left: 2vh;" src="<?php echo "../upload/community/group/profile/logo/",$group['group_logo']; ?>">
            </p>
        </td>
        <td style="width:15%;vertical-align: bottom;text-align:right;padding:1vh;border-top-right-radius: 12px;">
            <?php if ($group['group_name'] != $user['account_group']) {?>
            <p>
                <?php if ($group['status'] == 'open' && $user['account_group'] == 'No group') {?>
                <input type="button" class="btn-green" style="width:50%" value="Join Group">
                <?php }?>
            <!-- </p>
            <p> -->
                <input type="button" class="btn-blue" style="width:40%" value="Follow">
            </p>
            <?php }?>
        </td>
    </tr>
    </table>
    <table style="<?php echo $tag_color;?>;width:100%;background-color: <?php echo $background_color;?>;background-position: center;background-repeat: no-repeat;background-size: cover;height: 250px;background-image: url(<?php echo"../upload/community/group/tag/",$group['tag_background_image'];?>);" >
    <tr>
        <td colspan="3" style="width:50%;padding:5px;text-align: center;"><p style="padding-top:20px;font-size: xx-large;"><?php echo $group['group_name'];?></p></td>
    </tr>
    <tr>
        <td style="width:50%;padding:5px;text-align: center;"><p>Last update : <?php echo $group['lastupdate'];?></p></td>
        <td colspan="2" style="width:50%;padding:5px;text-align: center;"><p>Member since : <?php echo $group['since'];?> [<?php echo $group['level'];?>]</p></td>
    </tr>
    </table>
    <table style="width:100%;">
    <tr>
        <td colspan="3">
            <input readonly type="text" style="border-bottom-left-radius: 12px;border-bottom-right-radius: 12px;border-style: dotted;text-align: center;height: -webkit-fill-available;width: -webkit-fill-available;min-height: 100px;" value="<?php echo $group['group_promote'];?>">
            <div style="margin:2vh;border-style:solid;border-radius:1vh;border-width:.1vh;background-color: #efefef;border-color: gray;width: fit-content;">
                <table style="margin:2vh;">
                    <tr>
                        <td>
                        <p style="font-size:x-large;">Member : &nbsp;</p>
                        </td>
                        <td>
                            <?php for ($i=0; $i < count($users); $i++) {?>
                                <a style="text-decoration:none" href="?app=admin&action=profile&profile_id=<?php echo $users[$i]['id_account']?>"> 
                                <img title="<?php echo $users[$i]['account_name'],' [',$users[$i]['grouplevel'],']';?>" class="img-profile" src="<?php echo "../upload/user/",$users[$i]['img_profile']; ?>">
                                </a>
                            <?php }?>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    </table>
    <br>
    <br>
<!-- ============================================================Show Event -->

<!-- ============================================================Show Image -->
    <div id="myModal" class="modal">
        <span style="font-size: 500%;color: #f1f1f1;" class="close">&times;</span>
            <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

</div>
<?php
// echo '<pre>',$tag_color,'</pre>';
?>