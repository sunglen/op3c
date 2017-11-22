<?php slot('submenu') ?>
<?php include_partial('submenu'); ?>
<?php end_slot() ?>

<h2><?php echo __('确认删除管理令牌') ?></h2>

<p>删除 <?php echo $consumer->name ?> 的管理令牌吗？</p>
<p>一旦删除管理令牌，如果不进行再度批准，则 <?php echo $consumer->name ?> 将不能进行资源的访问。</p>

<?php echo $form->renderFormTag(url_for('connection/removeToken?id='.$consumer->id)) ?>
<?php echo $form ?>
<input type="submit" value="<?php echo __('Delete'); ?>" />
</form>
