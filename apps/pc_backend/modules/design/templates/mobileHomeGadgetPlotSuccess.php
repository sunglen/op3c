<?php include_partial('plotHeader') ?>

<div id="plotBody">
<div id="container">

<?php include_partial('plotGadget', array('type' => 'mobileTop', 'gadgets' => $gadgets['mobileTop'], 'gadgetConfig' => $gadgetConfig)); ?>

<div class="fixedGadget">
<?php echo __('菜单（不可更改）') ?>
</div>

<?php include_partial('plotGadget', array('type' => 'mobileContents', 'gadgets' => $gadgets['mobileContents'], 'gadgetConfig' => $gadgetConfig)); ?>

<div class="fixedGadget">
<?php echo __('变更设定（不可更改）') ?>
</div>

<?php include_partial('plotGadget', array('type' => 'mobileBottom', 'gadgets' => $gadgets['mobileBottom'], 'gadgetConfig' => $gadgetConfig)); ?>

<br style="clear:both;" />
</div>
</div>
