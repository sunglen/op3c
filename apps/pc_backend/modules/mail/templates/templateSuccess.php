<?php slot('submenu') ?>
<?php include_partial('submenu'); ?>
<?php end_slot() ?>

<h2><?php echo __('Edit Templates of E-mail Notification') ?></h2>

<style type="text/css">
#mail_template_edit { border: none; width: 100%; padding-right: 2em }
#mail_template_edit tr { border: none; }
#mail_template_edit td { border: none; vertical-align: top; }

#mail_template_edit dt
{
  border-left: 0.5em #999999 solid;
  padding-left: 0.5em;
  margin-top: 1em;
  font-weight: bold;
}

#mail_template_edit dd
{
  margin: 0.5em;
}

#mail_template_edit td.edit
{
  width: 70%;
}

#mail_template_edit textarea
{
  width: 100%;
}

</style>

<table id="mail_template_edit">
<tr>
<td>
<dl>
<?php foreach ($config as $target => $mails): ?>
<dt>
<?php if ('pc' === $target): ?>
<?php echo __('For PC E-mail Address') ?>
<?php elseif ('mobile' === $target): ?>
<?php echo __('For Mobile E-mail Address') ?>
<?php elseif ('admin' === $target): ?>
<?php echo __('For Administration E-mail Address') ?>
<?php endif; ?>
</dt>
<dd><ul>
<?php foreach ($mails as $key => $mail): ?>
<li><?php echo link_to(__($mail->getRaw('caption')), '@mail_template_specified?name='.$target.'_'.$key) ?></li>
<?php if ($target.'_'.$key === $name) { $_currentTarget = $target; $_currentKey = $key; } ?>
<?php endforeach; ?>
</ul></dd>
<?php endforeach; ?>
</dl>
</td>
<td class="edit">
<?php if (!$name): ?>
<p>请选择编辑对象的模板。</p>
<?php else: ?>
<?php $rawConfig = $sf_data->getRaw('config'); ?>
<h3><?php echo __($rawConfig[$_currentTarget][$_currentKey]['caption']) ?></h3>

<?php echo $form->renderFormTag(url_for('@mail_template_specified?name='.$name), array('method' => 'post')); ?>
<?php echo $form->renderHiddenFields(); ?>
<?php echo $form['template']->render(array('rows' => 30, 'cols' => 72)) ?>

<input type="submit" value="<?php echo __('Save') ?>">

<p>关于模板的书写格式，请参考<?php echo link_to('这里', '@default_template_help', array('popup' => true)) ?>。</p>

<?php if (!empty($config[$_currentTarget][$_currentKey]['variables'])): ?>
<h4 style="margin-top: 10px">在该模板中可以使用的变量</h4>
<table>
<tr>
  <th>变量名</th>
  <th>说明</th>
</tr>
<?php foreach ($config[$_currentTarget][$_currentKey]['variables'] as $variable => $description): ?>
<tr>
  <td><?php echo $variable ?></td>
  <td><?php echo $description ?></td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

<?php endif; ?>
</td>
</tr>
</table>