<?php slot('submenu'); ?>
<?php include_partial('submenu') ?>
<?php end_slot(); ?>

<h2><?php echo __('暂停登录设定') ?></h2>

<p><?php echo format_number_choice(
    '[0]激活暂停登录设定。|[1]解除暂停登录设定。', array(), $member->getIsLoginRejected()
  )
?></p>

<form action="<?php echo url_for('member/reject?id='.$member->getId()) ?>" method="post">
<table>
<tr>
<th><?php echo __('ID') ?></th><td><?php echo $member->getId() ?></td>
</tr>
<tr>
<th><?php echo __('昵称') ?></th><td><?php echo $member->getName() ?></td>
</tr>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo format_number_choice(
    '[0]激活|[1]解除', array(), $member->getIsLoginRejected()
  )
?>" /></td>
</tr>
</table>
</form>

<?php use_helper('Javascript') ?>
<?php echo link_to_function(__('返回前页'), 'history.back()') ?>
