<?php slot('submenu'); ?>
<?php include_partial('submenu'); ?>
<?php end_slot(); ?>

<h2><?php echo $subtitle ?>小部件设定</h2>

<p><?php echo __('特定の页や領域に対して、あらかじめ用意された部品（小部件）を自由に配置、设定することができます。') ?></p>

<ul>
<?php foreach (sfConfig::get('op_gadget_config', array()) as $key => $config): ?>
<li><?php echo link_to($config['name'].'小部件设定', 'design/gadget?type='.$key) ?></li>
<?php endforeach; ?>
</ul>


<?php use_helper('opJavascript') ?>

<div>
<form id="gadgetForm" action="<?php echo url_for('design/gadget?type='.$type) ?>" method="post">
<?php foreach ($gadgets as $gadgetType => $item): ?>
<?php if ($item): ?>
<?php foreach ($item as $key => $gadget): ?>
<input class="<?php echo $gadgetType ?>Gadget" type="hidden" name="gadget[<?php echo $gadgetType ?>][<?php echo $key ?>]" value="<?php echo $gadget->getId() ?>" />
<?php endforeach; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php echo $sortForm->renderHiddenFields(); ?>
<?php echo $addForm->renderHiddenFields(); ?>
<input type="submit" value="<?php echo __('变更设定') ?>" />
</form>
</div>

<?php echo javascript_tag("
function adjustByIframeContens(obj)
{
  var size = Element.getHeight(obj.contentWindow.document.body);
  obj.style.height = size+'px';
}
");
?>

<iframe src="<?php echo url_for($plotAction[0].'/'.$plotAction[1]) ?>" width="600" height="410" onload="adjustByIframeContens(this)" scrolling="no" frameborder="0">
</iframe>

<?php echo make_modal_box('modal', '<iframe width="400" height="400"></iframe>', 400, 400) ?>

