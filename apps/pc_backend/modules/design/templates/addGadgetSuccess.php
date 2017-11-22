<?php use_helper('Javascript') ?>

<style type="text/css">
dt
{
  background-color: #eeeeee;
  border: 1px solid #aaaaaa;
  margin-top: 10px;
  margin-left: 10px;
  margin-right: 10px;
  padding: 5px;
}
dd
{
  border-left: 1px solid #aaaaaa;
  border-bottom: 1px solid #aaaaaa;
  border-right: 1px solid #aaaaaa;
  padding: 5px;
  margin-bottom: 5px;
  margin-left: 10px;
  margin-right: 10px;
}
</style>

<?php echo javascript_tag("
function insertGadget(type, id, caption)
{
  var parentIframe = parent.document.getElementsByTagName('iframe')[0];

  var typeId = 'plot' + type.charAt(0).toUpperCase() + type.substr(1, type.length - 1);
  var target = parentIframe.contentWindow.document.getElementById(typeId).getElementsByClassName('emptyGadget')[0];
  var contents = '<div class=\'gadget\'>'+caption+'(<a href=\'#\' onclick=\'dropNewGadget(\"'+type+'\", \"'+id+'\", this.parentNode); return false;\'>".__('删除')."</a>)</div>';
  new Insertion.Before(target, contents);

  var form = parent.document.getElementById('gadgetForm');
  var hidden = document.createElement('input');
  hidden.setAttribute('class', type + 'New');
  hidden.setAttribute('type', 'hidden');
  hidden.setAttribute('name', 'new[' + type + '][]');
  hidden.setAttribute('value', id);
  new Insertion.Bottom(form, hidden);

  parentIframe.contentWindow.parent.adjustByIframeContens(parentIframe);
}
");
?>


<dl>
<?php if ($config) : ?>
<?php foreach ($config as $key => $value) : ?>
<dt>
<?php echo $value['caption']['zh_CN'] ?><br />
<?php echo link_to_function(__('添加该小部件'), 'insertGadget(\''.$type.'\', \''.escape_javascript($key).'\', \'' . escape_javascript($value['caption']['zh_CN']) . '\')') ?>
</dt>
<dd><?php echo $value['description']['zh_CN'] ?></dd>
<?php endforeach; ?>
<?php else: ?>
<dt><?php echo __('没有小部件') ?></dt>
<dd><?php echo __('没有登记可以添加的小部件') ?></dd>
<?php endif; ?>
</dl>
