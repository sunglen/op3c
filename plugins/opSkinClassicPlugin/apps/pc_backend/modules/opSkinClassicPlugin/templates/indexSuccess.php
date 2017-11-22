<h2>插件设定</h2>

<h3>登录画面设定</h3>
<p>设定使用标准的登录画面，还是使用旧式的登录画面（使用过登录画面用图像的东西）。</p>

<form action="<?php echo url_for('opSkinClassicPlugin/login') ?>" method="post">
<table>
<?php echo $loginForm ?>
<tr>
<td colspan="2">
<input type="submit" value="<?php echo __('Save') ?>" />
</td>
</tr>
</table>
</form>

<h3>变更预置设定</h3>
<p>设定预先准备好的皮肤图像和配色设定。</p>
<p>※如果在此处进行设定，则已设定好的皮肤图像和配色设定将重置。</p>

<form action="<?php echo url_for('opSkinClassicPlugin/preset') ?>" method="post">
<table>
<?php echo $presetForm ?>
<tr>
<td colspan="2">
<input type="submit" value="<?php echo __('Save') ?>" />
</td>
</tr>
</table>
</form>

<h3>变更配色设定</h3>

<form action="<?php echo url_for('opSkinClassicPlugin/color') ?>" method="post">
<table>
<?php echo $colorForm ?>
<tr>
<td colspan="2">
<input type="submit" value="<?php echo __('Save') ?>" />
</td>
</tr>
</table>
</form>

<h3>设定皮肤图像</h3>
<p><?php echo link_to('设定皮肤图像', 'opSkinClassicPlugin/skinList') ?></p>

