<div style="width:80%;margin:auto;border-style: double;border-radius: 12px;padding-top: 10px;padding-right: 40px;cursor:context-menu;">
	<ul>
        <?php for($i=0; $i < count($users); $i++){?>
                <li style="list-style-type: none;background-color:#c3c3c3;border-radius: 12px;padding:2vh;margin:2vh;font-size: xx-small;">
                    <span>
                            <p style="color:wheat;">
                                <img class="img-profile" id="img_profile" src="<?php echo "../upload/user/",$users[$i]['img_profile']; ?>">
                                <a class="btn-green" style="border-radius:5px;padding:1vh;text-decoration:none;margin:1vh;" href="?app=user&action=profile&profile_id=<?php echo $users[$i]['id'];?>">Detail</a>
                                <p style="background-color: rgb(210, 207, 207);"> ID : <?php echo $users[$i]['id']; ?></p>
                                <p> Account name : <?php echo $users[$i]['account_name']; ?></p>
                                <p style="background-color: rgb(210, 207, 207);"> Username : <?php echo $users[$i]['username']; ?></p>
                                <p> Email : <?php echo $users[$i]['email']; ?></p>
                                <p style="background-color: rgb(210, 207, 207);"> Group : <?php echo $users[$i]['account_group']; ?></p>
                                <p> Latest update : <?php echo $users[$i]['lastupdate']; ?></p>
                                <p style="background-color: rgb(210, 207, 207);"> Member since : <?php echo $users[$i]['since']; ?></p>
                            </p>
                    </span>
                </li>
        <?php }?>
    </ul>
</div>
