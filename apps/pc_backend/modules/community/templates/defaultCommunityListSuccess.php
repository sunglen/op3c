<?php slot('submenu') ?>
<?php include_partial('submenu') ?>
<?php end_slot() ?>

<?php slot('title', __('初始社区的设定')); ?>

<p><?php echo __('新成员在注册帐号时可以自动加入下面设定的社区。') ?></p>
<p><?php echo __('请输入想让新成员参加的社区ID，并按下「添加」按钮。') ?></p>

<form action="<?php url_for('community/defaultCommunityList') ?>" method="post">
<table>
<?php echo $form ?>
<tr><td colspan="2"><input type="submit" value="添加"></td></tr>
</table>
</form>

<?php if ($communities): ?>
<table>
<tr>
<th>ID</th>
<th>社区名</th>
<th>管理者名</th>
<th>操作</th>
</tr>
<?php
$form = new BaseForm();
$csrfToken = '&'.$form->getCSRFFieldName().'='.$form->getCSRFToken();
?>
<?php foreach ($communities as $community): ?>
<tr>
<td><?php echo $community->getId() ?></td>
<td><?php echo $community->getName() ?></td>
<td><?php echo $community->getAdminMember()->getName() ?></td>
<td><?php echo link_to('删除', 'community/removeDefaultCommunity?id='.$community->getId().$csrfToken) ?></td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
