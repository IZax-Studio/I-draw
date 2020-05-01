    <div style="text-align:center;">
		<div style="width:40%;margin: auto;">
			<div style="margin-bottom: 5px;">
				<b>
					  Discussion board
				</b>
			</div>
			<div style="margin-bottom:10px;">
				<form method="post" action="index.php?app=user&action=send" target="_self">
						<p hidden>Your name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="account_name" title="your name is '<?php echo $user['account_name'];?>'" style="text-align:center;width: fit-content;border-radius:12px;border-style: dotted;" readonly value="<?php echo $user['account_name'];?>"></p>
						<br>
						<br>
						Your messages : <input name="chat_msg" style="text-align:center;width: fit-content;border-radius:12px;border-style: dotted;" >
						<br>
						<br>
						<br>
						<button type="submit" name="submit" class="btn-green" style="width: 30%;height: 40px;font-weight: 900;">
						Go
						</button>
						<br>
						<br>
				</form>
			</div>
			<div id="public_chat">
			</div>
		</div>
	</div>