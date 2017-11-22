<?php
sfConfig::add(array('op_mobile_login_gadget_list' => array (
  'loginForm' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '登录表单',
    ),
    'description' => 
    array (
      'zh_CN' => '可设置登录用表单。含有可用的所有认证模式下的登录表单。',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'loginFormBox',
    ),
  ),
  'freeArea' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '自由区域',
    ),
    'description' => 
    array (
      'zh_CN' => '可设置自由区域',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'freeAreaBox',
    ),
    'config' => 
    array (
      'title' => 
      array (
        'Name' => 'title',
        'Caption' => '标题',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'value' => 
      array (
        'Name' => 'value',
        'Caption' => '内容',
        'FormType' => 'rich_textarea',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
    ),
  ),
)));