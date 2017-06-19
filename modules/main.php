<?php
session_start();
?>
<div class="row">
	<b class="whois"><?php echo($_SESSION['user']) ?></b> last online: never
</div>
<div class="row">
	<div class="four columns">		
		<img class="avatar" src="<?php echo($_SESSION['user_avatar']) ?>"/>
	</div>
	<div class="seven columns">
		<p><b>Статистика:</b></p>
		<p><b>Друзья: </b><?php echo($_SESSION['friends_count']) ?></p>
		<p><b>Музыка: </b><?php echo($_SESSION['music_count']) ?></p>
		<p><b>Группы: </b><?php echo($_SESSION['groups_count']) ?></p>
	</div>
</div>