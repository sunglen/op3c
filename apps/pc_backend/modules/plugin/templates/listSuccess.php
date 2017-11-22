<?php slot('submenu') ?>
<?php include_partial('submenu') ?>
<?php end_slot(); ?>

<?php if ('auth' === $type): ?>
<h2><?php echo __('认证插件设定') ?></h2>

<p><?php echo __('认证插件必须至少设定其中一个为「有效」。') ?></p>

<?php elseif ('skin' === $type): ?>
<h2><?php echo __('皮肤插件设定') ?></h2>

<p><?php echo __('皮肤插件必须只设定其中一个为「有效」。') ?></p>

<?php else: ?>
<h2><?php echo __('应用程序插件设定') ?></h2>
<?php endif; ?>

<?php if ($plugins) : ?>
<?php echo $form->renderFormTag(url_for('plugin/list?type='.$type)); ?>
<table>
<tr>
<th><?php echo __('有效/无效') ?></th>
<th><?php echo __('插件名') ?></th>
<th><?php echo __('版本') ?></th>
<th><?php echo __('插件说明') ?></th>
<th><?php echo __('操作') ?></th>
</tr>
<?php foreach ($plugins as $plugin) : ?>
<tr>
<td><?php echo $form[$plugin->getName()]->render() ?></td>
<td><?php echo $form[$plugin->getName()]->renderLabel() ?></td>
<td><?php echo $plugin->getVersion() ?></td>
<td><?php echo $plugin->getSummary() ?></td>
<td><?php if ($plugin->hasBackend()) : ?><?php echo link_to(__('设定'), $plugin->getName().'/index') ?><?php endif; ?></td>
</tr>
<?php endforeach; ?>
<tr>
<td colspan="5">
<?php echo $form->renderHiddenFields() ?>
<input type="submit" value="<?php echo __('变更设定') ?>" />
</td>
</tr>
</table>
</form>
<?php endif; ?>

<h2><?php echo __('添加插件') ?></h2>

<p><?php echo __('插件可以从插件发布页面下载。') ?></p>
<p><?php echo __('将下载的文件解压缩，上载到服务器上的 plugins 目录上，即可安装。') ?></p>
<p><?php echo __('或者，也可执行 opPlugin:install 命令进行安装。') ?></p>
