<?php slot('_body'); ?>
<p><?php echo __('外部应用程序「%1%」要求访问您的数据（信息）。', array('%1%' => link_to($information->getConsumer()->getName(), 'connection_show', $information->getConsumer()))); ?></p>
<p><?php echo __('该应用程序借用您的权限，可以进行以下所示的操作。') ?></p>

<textarea rows="5" cols="60" readonly="readonly">
<?php foreach ($information->getConsumer()->getAPICaptions() as $api): ?>
<?php echo $api."\n" ?>
<?php endforeach; ?>
</textarea>

<p><?php echo __('如果不信赖该应用程序，请不要赋予许可权限。') ?></p>
<p><?php echo __('如果想中止提供数据，请在设定变更页面将该应用程序设为无效。') ?></p>
<p><?php echo __('允许「%1%」的访问吗？', array('%1%' => $information->getConsumer()->getName())) ?></p>
<?php end_slot(); ?>

<?php slot('_yes_form'); ?>
<input type="hidden" name="oauth_token" value="<?php echo $token ?>" />
<input type="hidden" name="allow" value="1" />
<?php end_slot(); ?>
<?php slot('_no_form'); ?>
<input type="hidden" name="oauth_token" value="<?php echo $token ?>" />
<?php end_slot(); ?>

<?php
op_include_parts('consentForm', 'oauthAuthorizeTokenForm', array(
  'title'                => __('应用程序权限设定'),
  'body'                 => get_slot('_body'),
  'yes_form'             => get_slot('_yes_form'),
  'no_form'              => get_slot('_no_form'),
  'consent_from'         => $op_config['sns_name'],
  'consent_to'           => $information->getConsumer()->getName(),
  'allow_image_filename' => 'consent_allow2.gif',
))
?>
