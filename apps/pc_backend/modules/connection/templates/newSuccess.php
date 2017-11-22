<?php slot('submenu') ?>
<?php include_partial('submenu'); ?>
<?php end_slot() ?>

<h2><?php echo __('注册应用程序') ?></h2>

<p>请输入想要注册的应用程序的信息。</p>

<?php echo $form->renderFormTag(url_for('connection_create')) ?>
<table>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('注册') ?>" /></td>
</tr>
</table>
</form>
