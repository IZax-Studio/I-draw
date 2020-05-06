<?php
	require_once('../../models/UserModel.php'); 

	@session_start();

	$user_model = new UserModel;

	$p_chat = $user_model->getPublicChatBy();
?>
<div style="width:65%;height:auto;margin:auto;border-style: double;border-radius: 12px;padding-top: 10px;padding-right: 40px;cursor:context-menu;">
	<ul>
		<?php for($i=0; $i < count($p_chat); $i++){?>
			<li style="list-style-type: none;background-color:rgba(195, 195, 195, 0.25);border-radius: 12px;height:7vh;padding-top:1.5vh;margin:1vh;"><span>
					<p style="font-size: small;color:gray;"><?php echo $p_chat[$i]['chat_datetime']; ?> - 
					<b style="font-size: small;color:black;"><?php echo $p_chat[$i]['account_name']; ?></b> </p>
					<p style="font-size: small;color:black;"> 
						messages : <?php echo $p_chat[$i]['chat_msg']; ?>
					</p>
			</span></li>
		<?php }?>
	</ul>
</div>