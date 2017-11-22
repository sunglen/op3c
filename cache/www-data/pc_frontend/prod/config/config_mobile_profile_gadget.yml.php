<?php
sfConfig::add(array('op_mobile_profile_gadget_list' => array (
  'diaryMemberList' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '最新日记',
    ),
    'description' => 
    array (
      'zh_CN' => '将成员所写的日记以新到顺序显示。',
    ),
    'component' => 
    array (
      0 => 'diary',
      1 => 'memberDiaryList',
    ),
    'config' => 
    array (
      'max' => 
      array (
        'Name' => 'max',
        'Caption' => '最大显示篇数',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 5,
        'Choices' => 
        array (
          1 => 1,
          3 => 3,
          5 => 5,
          7 => 7,
          10 => 10,
        ),
      ),
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
  'friendListBox' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '朋友列表',
    ),
    'description' => 
    array (
      'zh_CN' => '显示成员的朋友列表',
    ),
    'component' => 
    array (
      0 => 'friend',
      1 => 'friendListBox',
    ),
    'config' => 
    array (
      'row' => 
      array (
        'Name' => 'row',
        'Caption' => '显示行数',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 3,
        'Choices' => 
        array (
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
        ),
      ),
    ),
  ),
  'communityJoinListBox' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '加入的社区列表',
    ),
    'description' => 
    array (
      'zh_CN' => '显示成员加入的社区列表',
    ),
    'component' => 
    array (
      0 => 'community',
      1 => 'joinListBox',
    ),
    'config' => 
    array (
      'row' => 
      array (
        'Name' => 'row',
        'Caption' => '显示行数',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 3,
        'Choices' => 
        array (
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
        ),
      ),
    ),
  ),
  'activityBox' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '动态',
    ),
    'description' => 
    array (
      'zh_CN' => '显示SNS上的活动记录',
    ),
    'component' => 
    array (
      0 => 'member',
      1 => 'activityBox',
    ),
    'config' => 
    array (
      'row' => 
      array (
        'Name' => 'row',
        'Caption' => '显示行数',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 3,
        'Choices' => 
        array (
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
        ),
      ),
    ),
  ),
)));