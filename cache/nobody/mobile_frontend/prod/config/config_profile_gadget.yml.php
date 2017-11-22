<?php
sfConfig::add(array('op_profile_gadget_list' => array (
  'albumMemberList' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '最新相册',
    ),
    'description' => 
    array (
      'zh_CN' => '将成员提交的相册以新到顺序显示',
    ),
    'component' => 
    array (
      0 => 'album',
      1 => 'memberAlbumList',
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
  'blogUser' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '最新博客',
    ),
    'description' => 
    array (
      'zh_CN' => '显示最新博客一览。',
    ),
    'component' => 
    array (
      0 => 'blog',
      1 => 'blogUser',
    ),
  ),
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
  'applicationBoxes' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '应用程序盒',
    ),
    'description' => 
    array (
      'zh_CN' => '在个人档案里设置成员拥有的OpenSocial应用程序',
    ),
    'component' => 
    array (
      0 => 'application',
      1 => 'renderProfileApplications',
    ),
    'config' => 
    array (
      'num' => 
      array (
        'Name' => 'num',
        'Caption' => '可显示的应用程序数',
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
  'freeArea' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '自由区域',
    ),
    'description' => 
    array (
      'zh_CN' => '可以设置自由区域',
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
  'memberImageBox' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '档案照片',
    ),
    'description' => 
    array (
      'zh_CN' => '在主页上显示成员的登记照片',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'memberImageBox',
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
        'Caption' => '显示行',
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
      'col' => 
      array (
        'Name' => 'col',
        'Caption' => '显示列',
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
      'type' => 
      array (
        'Name' => 'type',
        'Caption' => '显示类型',
        'FormType' => 'radio',
        'ValueType' => 'text',
        'IsRequired' => true,
        'Default' => 'full',
        'Choices' => 
        array (
          'full' => '显示图片与名字',
          'only_image' => '只显示图片',
          'only_name' => '只显示名字',
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
      'zh_CN' => '显示成员加入的社区的列表',
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
        'Caption' => '显示行',
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
      'col' => 
      array (
        'Name' => 'col',
        'Caption' => '显示列',
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
      'type' => 
      array (
        'Name' => 'type',
        'Caption' => '显示类型',
        'FormType' => 'radio',
        'ValueType' => 'text',
        'IsRequired' => true,
        'Default' => 'full',
        'Choices' => 
        array (
          'full' => '显示图片与名字',
          'only_image' => '只显示图片',
          'only_name' => '只显示名字',
        ),
      ),
    ),
  ),
  'profileListBox' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '档案',
    ),
    'description' => 
    array (
      'zh_CN' => '显示档案信息的列表',
    ),
    'component' => 
    array (
      0 => 'member',
      1 => 'profileListBox',
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
      'zh_CN' => '显示SNS上的活动的记录',
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
        'Caption' => '显示行',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 5,
        'Choices' => 
        array (
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
          7 => 7,
          8 => 8,
          9 => 9,
          10 => 10,
        ),
      ),
    ),
  ),
)));