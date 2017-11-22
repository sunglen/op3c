<?php
sfConfig::add(array('op_mobile_gadget_list' => array (
  'recentCommunityTopicComment' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '社区最新话题列表',
    ),
    'description' => 
    array (
      'zh_CN' => '将成员加入的社区话题以最新发表列表显示',
    ),
    'component' => 
    array (
      0 => 'communityTopic',
      1 => 'topicCommentListBox',
    ),
    'config' => 
    array (
      'col' => 
      array (
        'Name' => 'col',
        'Caption' => '显示的话题数',
        'FormType' => 'select',
        'ValueType' => 'integer',
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
  'recentCommunityEventComment' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '社区最新活动列表',
    ),
    'description' => 
    array (
      'zh_CN' => '将成员加入的社区活动以最新发表列表显示',
    ),
    'component' => 
    array (
      0 => 'communityEvent',
      1 => 'eventCommentListBox',
    ),
    'config' => 
    array (
      'col' => 
      array (
        'Name' => 'col',
        'Caption' => '显示的活动数',
        'FormType' => 'select',
        'ValueType' => 'integer',
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
  'diaryFriendList' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '我的朋友的最新日记',
    ),
    'description' => 
    array (
      'zh_CN' => '将我的朋友所写的日记以新到顺序显示。',
    ),
    'component' => 
    array (
      0 => 'diary',
      1 => 'friendDiaryList',
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
  'diaryMyList' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '自己的最新日记',
    ),
    'description' => 
    array (
      'zh_CN' => '将自己写的日记以新到顺序显示。',
    ),
    'component' => 
    array (
      0 => 'diary',
      1 => 'myDiaryList',
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
  'diaryList' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '全体的最新日记',
    ),
    'description' => 
    array (
      'zh_CN' => '全体的最新日记以新到顺序显示',
    ),
    'component' => 
    array (
      0 => 'diary',
      1 => 'diaryList',
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
  'diaryCommentHistory' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '日记评论发表履历',
    ),
    'description' => 
    array (
      'zh_CN' => '将日记评论的更新信息以新到顺序显示',
    ),
    'component' => 
    array (
      0 => 'diaryComment',
      1 => 'history',
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
  'informationBox' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '消息盒',
    ),
    'description' => 
    array (
      'zh_CN' => '可以在主页设置通知等能够传达的消息盒。',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'informationBox',
    ),
    'config' => 
    array (
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
  'activityBox' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '动态',
    ),
    'description' => 
    array (
      'zh_CN' => '使用者本人及其朋友的显示于SNS上的活动记录',
    ),
    'component' => 
    array (
      0 => 'friend',
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
        'Default' => 2,
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