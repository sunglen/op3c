<?php slot('submenu') ?>
<?php include_partial('submenu'); ?>
<?php end_slot() ?>

<h2><?php echo __('注册应用程序') ?></h2>

<p>登记したい应用程序の信息を入力してください。</p>

<?php echo $form->renderFormTag(url_for('connection/register')) ?>
<table>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('登记') ?>" /></td>
</tr>
</table>
</form>
