<?php slot('submenu') ?>
<?php include_component('monitoring', 'submenu') ?>
<?php end_slot() ?>

<?php slot('title', '图像上载') ?>

<ul>
<li><?php echo __('图像的文件名只能使用半角英文字母、数字、下划线(_)与连字符(-)') ?></li>
</ul>

<?php echo $form->renderFormTag(url_for('monitoring/editImage')) ?>
  <table>
    <?php echo $form ?>
    <tr>
      <td colspan="2">
        <input class="input_sbumit" type="submit" value="<?php echo __('提交图像') ?>" />
      </td>
    </tr>
  </table>
</form>
