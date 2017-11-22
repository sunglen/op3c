<?php slot('submenu') ?>
<?php include_partial('submenu'); ?>
<?php end_slot() ?>

<h2><?php echo __('应用程序编辑') ?></h2>

<?php echo $form->renderFormTag(url_for('connection_update', $consumer)) ?>
<table>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('Edit') ?>" /></td>
</tr>
</table>
</form>
