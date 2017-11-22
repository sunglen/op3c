<?php slot('submenu') ?>
<?php include_partial('submenu') ?>
<?php end_slot(); ?>

<h2><?php echo __('删除帐户') ?></h2>

<p><?php echo __('真的要删除该帐户吗？') ?></p>

<form action="<?php url_for('admin/deleteUser') ?>" method="post">
<table>
<tr>
<th><?php echo __('ID') ?></th><td><?php echo $user->getId() ?></td>
</tr>
<tr>
<th><?php echo __('用户名') ?></th><td><?php echo $user->getUsername() ?></td>
</tr>
<tr>
<td colspan="2">
<?php echo $form ?>
<input type="submit" value="<?php echo __('删除') ?>" />
</td>
</tr>
</table>
</form>
