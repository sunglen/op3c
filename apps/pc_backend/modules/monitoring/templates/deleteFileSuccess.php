<?php slot('submenu') ?>
<?php include_component('monitoring', 'submenu') ?>
<?php end_slot() ?>

<?php slot('title', __('文件删除的确认')) ?>

<div class="fileListTable">
<p id="c01" class="caution"><?php echo __('真的确定要删除吗？') ?></p>
<?php include_partial('monitoring/fileInfo', array('files' => array($file), 'deleteBtn' => false)) ?>
<br class="clear"/>
<?php echo $form->renderFormTag(url_for('monitoring/deleteFile?id='.$file->getId())) ?>
<?php echo $form ?>
<input type="submit" value="<?php echo __('删除') ?>"/>
</form>
</div>
