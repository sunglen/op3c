<?php slot('submenu'); ?>
<?php include_partial('submenu') ?>
<?php end_slot(); ?>

<h2><?php echo __('删除黑名单') ?></h2>

<?php echo __('真的要删除下面的内容吗？') ?>

<form action="<?php echo url_for('member/blacklistDelete?id='.$blacklist->getId()) ?>" method="post">
<table>
<?php echo $form ?>
<tr><th><?php echo __('ID') ?></th><td><?php echo $blacklist->getId() ?></td></tr>
<tr><th><?php echo __('手机个体识别号码（已加密）') ?></th><td><?php echo $blacklist->getUid() ?></td></tr>
<tr><th><?php echo __('注解') ?></th><td><?php echo $blacklist->getMemo() ?></td></tr>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('删除') ?>" /></td>
</tr>
</table>
</form>
