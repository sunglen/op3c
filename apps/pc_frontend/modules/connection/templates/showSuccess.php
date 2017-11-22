<?php
op_include_parts('memberImageBox', 'consumerImageBox', array(
  'object' => $consumer,
  'name_method' => 'getName',
));
?>

<?php slot('_api_list'); ?>
<ul>
<?php foreach ($consumer->getAPICaptions() as $api) : ?>
  <li><?php echo $api ?></li>
<?php endforeach; ?>
</ul>
<?php end_slot(); ?>

<?php
$list = array();
if (op_have_privilege('edit'))
{
  $list = array(
    __('Consumer key') => $consumer->getKeyString(),
    __('Consumer secret') => $consumer->getSecret(),
    __('Request token URL') => url_for('oauth_request_token', array(), true),
    __('Access token URL') => url_for('oauth_access_token', array(), true),
    __('Authorize URL') => url_for('oauth_authorize_token', array(), true),
    __('对应的签名方式') => 'HMAC-SHA1',
  );
}

op_include_parts('listBox', 'consumerInformation', array(
  'list' => array_merge(array(
    __('说明')         => nl2br($consumer->getDescription()),
    __('注册人')       => $consumer->getMember(),
    __('使用的API') => get_slot('_api_list'),
  ), $list)));
?>

<ul>
<?php if (op_have_privilege('edit')): ?>
  <li><?php echo link_to('编辑该应用程序', 'connection_edit', $consumer) ?></li>
<?php endif; ?>
  <li><?php echo link_to('已合作的应用程序一览', 'connection_list') ?></li>
</ul>
