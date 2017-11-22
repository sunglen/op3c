<?php slot('submenu') ?>
<?php include_partial('submenu') ?>
<?php end_slot(); ?>

<h2><?php echo __('添加账户') ?></h2>

<form action="<?php url_for('admin/addUser') ?>" method="post">
<table>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('添加') ?>" /></td>
</tr>
</table>
</form>
