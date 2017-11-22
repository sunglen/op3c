<?php slot('_body'); ?>
<p><?php echo __('已拒绝应用程序的访问。'); ?></p>
<?php end_slot(); ?>

<?php
op_include_box('rejectVerifierToken', get_slot('_body'), array(
  'title'    => __('应用程序权限设定'),
))
?>
