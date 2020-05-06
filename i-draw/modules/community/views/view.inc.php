<div>
    <p style="font-size:xx-large;margin:auto;">Community</p>
    <div style="border-bottom-style:solid;width:100%;"></div>
    <br>
    <br>
    <a style="text-decoration:none" href="?app=admin&action=community&page=insert">
        <button class="btn-light-green" style="border-radius:1vh;">
            <p style="color:white;margin: 1vh;"><i class="fas fa-plus-square"></i> Create your group</p>
        </button>
    </a>
    <?php if ($user['account_group'] != 'No group') {?>
    <?php if ($user['grouplevel'] != 'Member') {?>    
    <a style="text-decoration:none" href="?app=admin&action=community&page=update&group_name=<?php echo $group['account_group'];?>">
        <button class="btn-light-blue" style="border-radius:1vh;">
            <p style="color:white;margin: 1vh;"><i class="fas fa-edit"></i> Update your group</p>
        </button>
    </a>
    <?php }?>
    <a style="text-decoration:none" href="?app=admin&action=community&page=detail&group_id=<?php echo $user['account_group'];?>">
        <button class="btn-light-gold" style="border-radius:1vh;">
            <p style="color:white;margin: 1vh;"><i class="fas fa-sign-in-alt"></i> Your group</p>
        </button>
    </a>
    <?php }?>
    <br>
    <br>
    <table style="width:100%;text-align:center;border-radius:1vh;" id="t_table">
            <tr>
                <th style="text-align:center;">
                    <b>No.</b>
                </th>
                <th style="text-align:center;">
                    <b>Logo</b>
                </th>
                <th style="text-align:center;">
                    <b>Status</b>
                </th>
                <th style="text-align:center;">
                    <b>Group name</b>
                </th>
                <th style="text-align:center;">
                    <b>Member</b>
                </th>
                <th style="text-align:center;">
                    <b>Description</b>
                </th>
                <th style="text-align:center;">
                    <b>Option</b>
                </th>
            </tr>
    <?php for ($i=0; $i < count($group); $i++) { ?>
            <tr style="background-position: center;background-repeat: no-repeat;background-size: cover;height: 5vh;background-image: url(<?php echo"../upload/community/group/tag/",$group[$i]['tag_background_image'];?>);<?php echo $group[$i]['tag_color'];?>">
                <td>
                    <?php echo $i+1?>
                </td>
                <td>
                    <img class="img-profile" id="img_profile" src="<?php echo "../upload/community/group/profile/logo/",$group[$i]['group_logo']; ?>">
                </td>
                <td>
                    <?php if ($group[$i]['status']=="close") {?>
                        <?php echo '<i style="color:red;" title="Closed (You can\'t join this group)" class="fas fa-door-closed"></i>';
                    }else{?>
                        <?php echo '<i style="color:lime;" title="Opened (You can join this group)" class="fas fa-door-open"></i>';
                    }?>
                </td>
                <td>
                    <?php echo $group[$i]['group_name'];?>
                </td>
                <td>
                    <?php echo $group[$i]['member_count'];?>
                </td>
                <td>
                    <?php echo $group[$i]['group_promote'];?>
                </td>
                <td>
                    <a style="text-decoration:none;font-size: x-large;color:gray;" href="?app=admin&action=community&page=detail&group_id=<?php echo $group[$i]['id'];?>">
                        <i title="detail" class="fas fa-file-alt"></i>
                    </a>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <a style="text-decoration:none;font-size: x-large;color:red;" href="?app=admin&action=report&report_type=group&group_id=<?php echo $group[$i]['id'];?>">
                        <i title="report" class="fas fa-flag"></i>
                    </a>
                </td>
            </tr>
    <?php }?>
    </table>
</div>