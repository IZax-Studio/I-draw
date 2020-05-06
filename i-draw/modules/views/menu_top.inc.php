     <div class="menu">
        <table style="width:100%;height:100%;">
        <tr style="height:30px;">
            <td><a href="?dashboard"><img class="btn-home" src="../template/image/logo/logo.png"></img></a></td>
            <td colspan="2" style="text-align:center;padding-left:14px;">
                <a style="text-decoration: none;" href="?app=<?php echo $user['level'];?>&action=profile&profile_id=<?php echo $user['id'];?>">
                    <p class="name-tag" style="cursor: pointer;color:<?php echo $level_color?>;font-size: larger;">Hi! &nbsp;<?php echo $user['account_name'];?>&nbsp;
                    <b>[ group : <?php echo $user['account_group'];?> ]</b>
                    <img class="img-profile" id="img_profile" style="margin: 5px;border-color: <?php echo $level_color?>;" src="<?php echo "../upload/user/",$user['img_profile']; ?>">
                    </p>
                </a>
            </td>
        </tr>
        <tr style="height:30px;">
            <td style="width:75%">
                <table style="width:20vh;">
                    <tr>
                        <td style="width:50%">
                            <div style="border-style: solid;border-radius: 12vh;border-width: .1vh;">
                                <div class="select-menu" style="text-align:center;cursor:pointer;">
                                    <a style="text-decoration:none" onclick="btn_back()">
                                        <span style="font-size: small;color:#000000;" >
                                            <i class="fas fa-arrow-circle-left"></i>
                                            &nbsp; Back
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td style="width:50%">
                            <div style="border-style: solid;border-radius: 12vh;border-width: .1vh;">
                                <div class="select-menu" style="text-align:center;cursor:pointer;">
                                    <a style="text-decoration:none" onclick="btn_refresh()">
                                        <span style="font-size: small;color:#000000;" >
                                            <i class="fas fa-redo"></i>
                                            &nbsp; Refresh
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="border-top-left-radius: 12px;border-bottom-left-radius: 12px;background-color:rgb(18, 0, 68);border-width:0px;">
                <div align="center" style="width:200px;margin: auto;">
                    <a href="?app=<?php echo $user['level'];?>&action=profile&profile_id=<?php echo $user['id'];?>"><input class="btn-green" readonly value="Edit profile"></a>
                </div>
            </td>
            <td style="border-top-right-radius: 12px;border-bottom-right-radius: 12px;background-color:rgb(18, 0, 68);border-width:0px;">
                <div align="center" style="width:200px;margin: auto;">
                    <a href="../../logout.php"><input class="btn-green" readonly value="Logout"></a>
                </div>
            </td>
        </tr>
        </table>
    </div>
