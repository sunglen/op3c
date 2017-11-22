<?php slot('submenu') ?>
<?php include_component('monitoring', 'submenu') ?>
<?php end_slot() ?>

<?php slot('title', '上载图像列表') ?>

<?php if (!$pager->getNbResults()): ?>
<?php echo __('上载图像不存在。') ?></p>
<?php else: ?>
<?php
$params = array();
$params['uri'] = url_for('monitoring/imageList');
$params['method'] = 'get';
$params['title'] = __('显示张数');
$params['params'] = array(20, 50, 100, 500);
$params['unit'] = '张';
$params['name'] = 'size';
$params['default'] = $size;
$params['caution'] = __('※如果显示张数多的话将加重处理负担，消耗服务器资源。');
include_partial('global/changePageSize', array('params' => $params));
?>

<p><?php op_include_pager_navigation($pager, 'monitoring/imageList?page=%d&size='.$size) ?></p>
<div class="imageListTable">
<?php foreach ($pager->getResults() as $image): ?>
<?php include_partial('imageInfo', array('image' => $image, 'deleteBtn' => true)) ?>
<?php endforeach; ?>
<br class="clear"/>
</div>
<p><?php op_include_pager_navigation($pager, 'monitoring/imageList?page=%d&size='.$size) ?></p>
<?php endif; ?>
