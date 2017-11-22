<?php slot('submenu') ?>
<?php include_partial('submenu'); ?>
<?php end_slot() ?>

<?php use_helper('Javascript') ?>

<?php
$assignFunctions = '';

foreach ($presetList as $k => $v)
{
  $assignFunctions .= '
function assign_color_'.$k.'()
{';

  foreach ($v as $name => $config)
  {
    if ($name == 'caption' || $name === 'core_color_0')
    {
      continue;
    }

    $assignFunctions .= 'var obj = document.getElementById("color_'.$name.'"); obj.value = "'.$config.'"; reflect_color(obj);';
  }
  $assignFunctions .= '}';
}

echo javascript_tag('
function reflect_color(n) {
    document.getElementById("preview_"+n.name).style.backgroundColor = n.value;
}
'.$assignFunctions); ?>

<h2>手机版配色设定</h2>

<div class="sampleColors">
<h3 class="item" id="subttl01">预设定颜色</h3>
<p class="caution" id="c01">※将预设定颜色调出后，请务必按下「确定颜色变更」，以确定配色的设定。</p>

<?php foreach ($presetList as $k => $v): ?>
<dl class="presetBox">
    <dt><?php echo __($v['caption']) ?></dt>
    <dd style="background:<?php echo $v['core_color_0'] ?>"><input class="input_submit" type="button" value="この设定を呼び出す" onclick="assign_color_<?php echo $k ?>()" /></dd>
</dl>
<?php endforeach; ?>

<br class="clear" />

</div>


<form action="<?php echo url_for('design/mobileColorConfig') ?>" method="post" name="color">
<input type="hidden" name="m" value="({$module_name})" />
<input type="hidden" name="a" value="do_({$hash_tbl->hash('update_c_sns_config_ktai','do')})" />
<input type="hidden" name="sessid" value="({$PHPSESSID})" />

<div class="bg" style="margin: 10px;">
<h3 class="item" id="subttl02">颜色代码的设定</h3>

<p class="caution" id="c02">※颜色的指定请用16进制来表记。</p>
<p class="caution" id="c03">※即使颜色的预览改变了也并不能反映到颜色的设定中。故请一定要按下确定按钮。</p>

<?php echo $form->renderGlobalErrors() ?>
<?php echo $form->renderHiddenFields() ?>
<?php foreach ($form as $field): ?>
<?php if ($field->isHidden()) continue; ?>
<dl class="colorBox">
<dt><?php echo $field->renderLabel() ?></dt>
<?php echo $field->renderError() ?>
<?php echo $field->render(array('onchange' => 'reflect_color(this)')) ?>
</dl>
<?php endforeach; ?>
<br class="clear" />
</div>

<p class="textBtn" id="c04"><input type="submit" value="确定颜色变更" /></p>

</form>

