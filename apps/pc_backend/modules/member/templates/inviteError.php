<?php slot('submenu'); ?>
<?php include_partial('submenu'); ?>
<?php end_slot(); ?>

<h2><?php echo __('发送邀请函') ?></h2>

<p><?php echo __('没有具备邀请功能的认证插件。') ?></p>
<p><?php echo __('请从「插件设定」开始更改认证插件的设定，进行修正。') ?></p>

<?php use_helper('Javascript') ?>
<p><?php echo link_to_function(__('返回前页'), 'history.back()') ?></p>
