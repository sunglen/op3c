<?php slot('submenu') ?>
<?php include_partial('submenu'); ?>
<?php end_slot() ?>

<h2><?php echo __('自定义 CSS 设定') ?></h2>

<p><?php echo __('标准设定されている样式表は、ここで上書きすることもできます。') ?></p>

<?php echo $form->renderFormTag(url_for('design/customCss')) ?>
<table>
<tr><td>
<?php echo $form['css']->render() ?>
</td></tr>
<tr><td>
<?php echo $form->renderHiddenFields() ?>
<input type="submit" name="<?php echo __('Save') ?>" />
</td></tr>
</table>
</form>
