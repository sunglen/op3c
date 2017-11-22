<?php slot('submenu') ?>
<?php include_partial('submenu'); ?>
<?php end_slot() ?>

<h2><?php echo $subtitle.'版式设定' ?></h2>

<p><?php echo __('可以设定特定页的版式模式。按照这里设定的版式，可以配置小部件。') ?></p>

<ul>
<?php foreach ($configs as $key => $config): ?>
<li><?php echo link_to($config['name'].'版式设定', 'design/layout?type='.$key) ?></li>
<?php endforeach; ?>
</ul>

<?php echo $form->renderFormTag(url_for('design/layout?type='.$sf_request->getParameter('type', 'gadget'))) ?>
<p><input type="submit" value="<?php echo __('变更设定') ?>" /></p>
<?php echo $form['layout']->render() ?>
<?php echo $form->renderHiddenFields() ?>
<?php if ($sf_request->getParameter('login')) : ?>
<input type="hidden" name="login" value="1" />
<?php endif; ?>
</form>
