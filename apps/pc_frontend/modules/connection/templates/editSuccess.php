<?php
op_include_form('registerConnectionForm', $form, array(
  'isMultipart' => true,
  'url' => url_for('connection_update', $consumer),
  'title' => __('编辑应用程序'),
  'button' => __('Edit'),
));
?>
