<?php slot('submenu'); ?>
<?php include_partial('submenu') ?>
<?php end_slot(); ?>

<h2><?php echo __('强制退会') ?></h2>

<p><?php echo __('真的要将该成员强制退会吗？') ?></p>
<p><?php echo __('一旦强制其退会，该成员的相关信息将被删除且无法复原。') ?></p>

<form action="<?php echo url_for('member/delete?id='.$member->getId()) ?>" method="post">
<table>
<tr>
<th><?php echo __('ID') ?></th><td><?php echo $member->getId() ?></td>
</tr>
<tr>
<th><?php echo __('昵称') ?></th><td><?php echo $member->getName() ?></td>
</tr>
<?php foreach ($member->getProfiles() as $profile): ?>
<tr>
<th><?php echo $profile->getCaption() ?></th>
<td><?php echo $member->getProfile($profile->getName()) ?></td>
</tr>
<?php endforeach ?>
<tr>
<th><?php echo __('PC邮箱') ?></th>
<td><?php echo $member->getConfig('pc_address') ?></td>
</tr>
<tr>
<th><?php echo __('手机邮箱') ?></th>
<td><?php echo $member->getConfig('mobile_address') ?></td>
</tr>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('强制退会') ?>" /></td>
</tr>
</table>
</form>

<?php use_helper('Javascript') ?>
<?php echo link_to_function(__('返回前页'), 'history.back()') ?>
