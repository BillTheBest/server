<?php
/** @var array $_ */
use OCA\Federation\TrustedServers;

/** @var \OCP\IL10N $l */
script('sharebymail', 'settings-admin');
?>
<div id="ncShareByMailSettings" class="section">
	<h2><?php p($l->t('Share by mail')); ?></h2>
	<em><?php p($l->t('Send a personalized link to a file or folder by mail.')); ?></em>

	<p>
		<input id="sendPasswordMail" type="checkbox" class="checkbox" <?php if($_['sendPasswordMail']) p('checked'); ?> />
		<label for="sendPasswordMail"><?php p($l->t('Send password by mail')); ?></label>
	</p>

</div>

