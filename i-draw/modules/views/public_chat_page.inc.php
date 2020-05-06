    <div style="text-align:center;">
		<div style="width:auto;margin: auto;border-style: dotted;padding: 3vh;border-radius: 5vh;">
			<div style="margin-bottom: 5px;">
				<b>
					  Discussion board
				</b>
			</div>
			<?php if ($user['rank'] != "") {?>
				<div style="margin-bottom:10px;">
					<form method="post" action="index.php?app=<?php echo $user['level'];?>&action=send" target="_self">
							<p hidden>Your name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="account_name" title="your name is '<?php echo $user['account_name'];?>'" style="text-align:center;width: fit-content;border-radius:12px;border-style: dotted;" readonly value="<?php echo $user['account_name'];?>"></p>
							<br>
							<br>
							: Your messages : 
								<p>
									<textarea id="count_key" class="form-control" placeholder="Let's send your messages!
									" maxlength="100" name="chat_msg" style="text-align:center;width: fit-content;border-radius:12px;border-style: dashed;font-size: small;width: 80vh;height: 25vh;margin:auto;" ></textarea>
									<div id="the-count_count_key" style="">
									<span id="current_count_key">0</span>
									<span id="maximum_count_key"> / 100</span>
								</p>
							<br>
							<br>
							<br>
							<button type="submit" name="submit" class="btn-green" style="width: 30%;height: 40px;font-weight: 900;">
							Send | ♥
							</button>
							<br>
							<br>
					</form>
				</div>
			<?php }?>
			<div id="public_chat">
			</div>
		</div>
	</div>