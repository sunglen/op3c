<?php slot('submenu'); ?>
<?php include_partial('submenu') ?>
<?php end_slot(); ?>

<h2><?php echo __('强制退会') ?></h2>

<p><?php echo __('ID为1的成员不能删除其帐号。') ?></p>

<?php use_helper('Javascript') ?>
<p><?php echo link_to_function(__('返回前页'), 'history.back()') ?></p>
