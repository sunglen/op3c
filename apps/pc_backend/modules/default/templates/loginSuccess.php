请输入管理用帐户名及密码。
<form action="<?php echo url_for('default/login') ?>" method="post">
<table>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="登录" /></td>
</tr>
</table>
</form>
