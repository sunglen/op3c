<?php
op_include_form('registerConnectionForm', $form, array(
  'isMultipart' => true,
  'title' => __('注册应用程序'),
  'body' => '请输入想要注册的应用程序的信息。',
  'url' => url_for('connection_create'),
));
?>
