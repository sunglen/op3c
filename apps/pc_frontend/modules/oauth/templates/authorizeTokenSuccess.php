<?php slot('_body'); ?>
<p><?php echo __('请跟随应用程序的指示，输入以下代码。'); ?></p>
<input type="text" readonly="readonly" value="<?php echo $information->verifier; ?>" />
<?php end_slot(); ?>

<?php
op_include_box('showVerifierToken', get_slot('_body'), array(
  'title'    => __('应用程序权限设定'),
))
?>
