<?php slot('submenu'); ?>
<?php include_partial('submenu'); ?>
<?php end_slot(); ?>

<h2><?php echo __('发送邀请邮件') ?></h2>

<p><?php echo __('发送参加「%1%」的邀请函至输入的邮箱。', array('%1%' => $op_config['sns_name'])) ?></p>
<p><?php echo __('如果要发送至多个邮箱，请用换行来分隔。') ?></p>

<form action="<?php echo url_for('member/invite') ?>" method="post">
<table>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('发送') ?>" /></td>
</tr>
</table>
</form>
