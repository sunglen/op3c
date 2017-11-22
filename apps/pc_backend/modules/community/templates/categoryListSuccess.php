<?php slot('submenu') ?>
<?php include_partial('submenu') ?>
<?php end_slot() ?>

<?php slot('title', __('社区类别设定')); ?>

<p><?php echo __('如果不勾选「允许成员创建社区」，那么除了ID为1的成员以外，在该类别上均不能创建社区。') ?></p>

<h3>大类别</h3>
<?php include_partial('categoryListForm', array(
  'form'                    => $rootForm,
  'forceAllowUserCommunity' => true,
  'categories'              => $categories,
  'deleteForm'              => $deleteForm,
)) ?>

<h3>小类别</h3>
<?php foreach ($categories as $category): ?>
<h4><?php echo $category ?></h4>
<?php include_partial('categoryListForm', array(
  'form'       => $categoryForms[$category->getId()],
  'categories' => $category->getNode()->getChildren(),
  'deleteForm' => $deleteForm,
)) ?>
<?php endforeach; ?>
