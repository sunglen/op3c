<h2><?php echo __('应用程序权限设定') ?></h2>

<p><?php echo __('应用程序「%1%」希望能访问资源。', array('%1%' => $information->getConsumer()->getName())); ?></p>
<p><?php echo __('该应用程序借用您的权限，有进行以下操作的可能性。') ?></p>

<textarea cols="60">
<?php foreach ($information->getConsumer()->getAPICaptions() as $api): ?>
<?php echo $api."\n" ?>
<?php endforeach; ?>
</textarea>

<p><?php echo __('允许吗？') ?></p>

<form method="post" action="<?php echo url_for('@oauth_authorize_token') ?>">
<input type="hidden" name="oauth_token" value="<?php echo $token ?>" />
<input type="submit" name="allow" value="Continue" />
<input type="submit" value="Cancel" />
</form>
