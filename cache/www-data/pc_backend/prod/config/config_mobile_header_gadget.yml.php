<?php
sfConfig::add(array('op_mobile_header_gadget_list' => array (
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