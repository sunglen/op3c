<?php include_partial('plotHeader') ?>

<div id="plotBody">
<div id="container">

<?php include_partial('plotGadget', array('type' => 'mobileProfileTop', 'gadgets' => $gadgets['mobileProfileTop'], 'gadgetConfig' => $gadgetConfig)); ?>

<div class="fixedGadget">
<?php echo __('菜单（不可更改）') ?>
</div>

<?php include_partial('plotGadget', array('type' => 'mobileProfileContents', 'gadgets' => $gadgets['mobileProfileContents'], 'gadgetConfig' => $gadgetConfig)); ?>

<?php include_partial('plotGadget', array('type' => 'mobileProfileBottom', 'gadgets' => $gadgets['mobileProfileBottom'], 'gadgetConfig' => $gadgetConfig)); ?>

<br style="clear:both;" />
</div>
</div>
