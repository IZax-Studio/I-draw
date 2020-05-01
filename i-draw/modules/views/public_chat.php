<?php
	require_once('../../models/UserModel.php'); 

	@session_start();

	$user_model = new UserModel;

	$p_chat = $user_model->getPublicChatBy();
?>
<div style="width:80%;margin:auto;border-style: double;border-radius: 12px;padding-top: 10px;padding-right: 40px;cursor:context-menu;">
	<ul>
		<?php for($i=0; $i < count($p_chat); $i++){?>
			<li style="list-style-type: none;background-color:#c3c3c3;"><span>
					<p style="font-size: small;color:wheat;"><?php echo $p_chat[$i]['chat_datetime']; ?> - 
					<b style="font-size: small;color:white;"><?php echo $p_chat[$i]['account_name']; ?></b> </p>
					<p style="font-size: small;color:black;"> 
						messages : <?php echo $p_chat[$i]['chat_msg']; ?>
					</p>
			</span></li>
		<?php }?>
	</ul>
</div>