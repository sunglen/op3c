<table class="basicType2">
<thead>
<tr>
<th>ID</th>
<th>文件名</th>
<th>原文件名</th>
<th>创建日期</th>
<?php if ($deleteBtn): ?>
<th>&nbsp;</th>
<?php endif; ?>
</tr>
</thead>
<tbody>
<?php foreach($files as $file): ?>
<tr>
<td class="type1"><?php echo $file->getId() ?></td>
<td><a href="<?php echo url_for('monitoring/fileDownload?id='.$file->getId()).'?'.strtotime('now') ?>"><?php echo $file->getName() ?></a></td>
<td><?php echo $file->getOriginalFilename() ?></td>
<td><?php echo $file->getCreatedAt() ?></td>
<?php if ($deleteBtn): ?>
<td><a href="<?php echo url_for('monitoring/deleteFile?id='.$file->getId()) ?>"><?php echo __('删除') ?></a></td>
<?php endif; ?>
</tr>
<?php endforeach; ?>
</tbody>
</table>
