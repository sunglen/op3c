<?php slot('submenu') ?>
<?php include_component('monitoring', 'submenu') ?>
<?php end_slot() ?>

<?php slot('title', __('上载文件列表')) ?>

<?php if (!$pager->getNbResults()): ?>
<?php echo __('上载文件不存在。') ?></p>
<?php else: ?>
<?php
$params = array();
$params['uri'] = url_for('monitoring/fileList');
$params['method'] = 'get';
$params['title'] = __('显示件数');
$params['params'] = array(20, 50, 100, 500);
$params['unit'] = '件';
$params['name'] = 'size';
$params['default'] = $size;
include_partial('global/changePageSize', array('params' => $params));
?>

<p><?php op_include_pager_navigation($pager, 'monitoring/fileList?page=%d&size='.$size) ?></p>
<div class="fileListTable">
<?php include_partial('fileInfo', array('files' => $pager->getResults(), 'deleteBtn' => true)) ?>
</div>
<br class="clear"/>
<p><?php op_include_pager_navigation($pager, 'monitoring/fileList?page=%d&size='.$size) ?></p>
<?php endif; ?>
