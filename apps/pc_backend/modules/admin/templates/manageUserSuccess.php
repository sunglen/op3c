<?php slot('submenu') ?>
<?php include_partial('submenu') ?>
<?php end_slot(); ?>

<h2><?php echo __('帐户管理') ?></h2>

<p><?php echo __('设定管理用帐户。') ?></p>
<p><?php echo link_to(__('添加帐户'), 'admin/addUser') ?></p>

<table>
<tr>
<th><?php echo __('ID') ?></th>
<th><?php echo __('用户名') ?></th>
<th><?php echo __('操作') ?></th>
</tr>
<?php foreach ($users as $user) : ?>
<tr>
<th><?php echo $user->getId() ?></th>
<td><?php echo $user->getUsername() ?></td>
<td><?php if ($user->getId() != 1 && $user->getId() != $sf_user->getId()) : ?>
<?php echo link_to(__('删除'), 'admin/deleteUser?id='.$user->getId()) ?>
<?php endif; ?></td>
</tr>
<?php endforeach; ?>
</table>
