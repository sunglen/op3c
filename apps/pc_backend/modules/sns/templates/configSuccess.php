<?php slot('submenu') ?>
<?php include_partial('submenu'); ?>
<?php end_slot() ?>

<?php
$categoryAttributes = sfConfig::get('openpne_sns_category_attribute'); 
$caption = !empty($categoryAttributes[$category]['Caption']) ? $categoryAttributes[$category]['Caption'] : $category;
?>

<h2><?php echo __('SNS设定') ?> (<?php echo __($caption) ?>)</h2>

<p><?php echo __('※当按下「设定变更」按钮时设定生效。') ?></p>

<?php if ($category === 'authentication') : ?>
<p><?php echo __('※与认证相关的分别的设定，请从「插件设定」开始进行。') ?></p>
<?php endif; ?>

<form action="<?php echo url_for('sns/config?category='.$category) ?>" method="post">
<table>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('设定变更') ?>" /></td>
</tr>
</table>
</form>
