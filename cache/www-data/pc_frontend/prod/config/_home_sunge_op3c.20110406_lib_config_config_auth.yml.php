<?php
// auto-generated by sfSimpleYamlConfigHandler
// date: 2011/06/13 23:25:03
return array (
  'invite_mode' => 
  array (
    'Name' => 'invite_mode',
    'Caption' => '邀请模式',
    'FormType' => 'radio',
    'ValueType' => 'text',
    'IsConfig' => true,
    'IsRequired' => true,
    'Default' => 1,
    'Choices' => 
    array (
      2 => '允许不经过邀请的注册',
      1 => '允许SNS的加入者发出邀请',
      0 => '不允许邀请',
    ),
  ),
  'enable_pc' => 
  array (
    'Name' => 'enable_pc',
    'Caption' => '设定PC版有效',
    'FormType' => 'radio',
    'ValueType' => 'text',
    'IsConfig' => true,
    'IsRequired' => true,
    'Default' => 1,
    'Choices' => 
    array (
      0 => '无效',
      1 => '有效',
    ),
  ),
  'enable_mobile' => 
  array (
    'Name' => 'enable_mobile',
    'Caption' => '设定手机版有效',
    'FormType' => 'radio',
    'ValueType' => 'text',
    'IsConfig' => true,
    'IsRequired' => true,
    'Default' => 1,
    'Choices' => 
    array (
      0 => '无效',
      1 => '有效',
    ),
  ),
  'self_invite_action' => 
  array (
    'IsConfig' => false,
    'Default' => '@homepage',
  ),
  'admin_invite' => 
  array (
    'IsConfig' => false,
    'Default' => true,
  ),
);