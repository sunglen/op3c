<?php
op_include_form('revokeTokenConfirm', $form, array(
  'url' => url_for('connection_revoke_token', $information),
  'title' => __('应用程序权限设定'),
  'body' => __('Do you revoke the access authority from this application?'),
  'button' => __('Revoke'),
));
?>
