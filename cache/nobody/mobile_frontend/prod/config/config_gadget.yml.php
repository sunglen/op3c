<?php
sfConfig::add(array('op_gadget_list' => array (
  'albumFriendList' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '我的朋友的最新相册',
    ),
    'description' => 
    array (
      'zh_CN' => '将我的朋友提交的相册以新到顺序显示',
    ),
    'component' => 
    array (
      0 => 'album',
      1 => 'friendAlbumList',
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
  'albumMyList' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '自己的最新相册',
    ),
    'description' => 
    array (
      'zh_CN' => '将自己提交的相册以新到顺序显示',
    ),
    'component' => 
    array (
      0 => 'album',
      1 => 'myAlbumList',
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
  'albumList' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '全体的最新相册',
    ),
    'description' => 
    array (
      'zh_CN' => '全体的最新相册以新到顺序显示',
    ),
    'component' => 
    array (
      0 => 'album',
      1 => 'albumList',
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
  'blogFriend' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '朋友的最新博客',
    ),
    'description' => 
    array (
      'zh_CN' => '显示朋友的最新博客一览。',
    ),
    'component' => 
    array (
      0 => 'blog',
      1 => 'blogFriend',
    ),
  ),
  'blogUser' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '自己的最新博客',
    ),
    'description' => 
    array (
      'zh_CN' => '显示自己的最新博客一览。',
    ),
    'component' => 
    array (
      0 => 'blog',
      1 => 'blogUser',
    ),
  ),
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
  'applicationBoxes' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '应用程序盒',
    ),
    'description' => 
    array (
      'zh_CN' => '在主页上设置成员拥有的OpenSocial应用程序',
    ),
    'component' => 
    array (
      0 => 'application',
      1 => 'renderHomeApplications',
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
      'zh_CN' => '加入社区列表',
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
  'searchBox' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '搜索盒',
    ),
    'description' => 
    array (
      'zh_CN' => '显示搜索用表单',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'searchBox',
    ),
  ),
  'rssBox' => 
  array (
    'caption' => 
    array (
      'zh_CN' => 'RSS Reader',
    ),
    'description' => 
    array (
      'zh_CN' => '显示指定 URL 的 RSS Feed',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'rssBox',
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
      'url' => 
      array (
        'Name' => 'url',
        'Caption' => 'URL',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
    ),
  ),
  'linkListBox' => 
  array (
    'caption' => 
    array (
      'zh_CN' => '链接集',
    ),
    'description' => 
    array (
      'zh_CN' => '显示指定链接的列表',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'linkListBox',
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
      'url1' => 
      array (
        'Name' => 'url1',
        'Caption' => 'URL1',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text1' => 
      array (
        'Name' => 'text1',
        'Caption' => '链接文本1',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url2' => 
      array (
        'Name' => 'url2',
        'Caption' => 'URL2',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text2' => 
      array (
        'Name' => 'text2',
        'Caption' => '链接文本2',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url3' => 
      array (
        'Name' => 'url3',
        'Caption' => 'URL3',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text3' => 
      array (
        'Name' => 'text3',
        'Caption' => '链接文本3',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url4' => 
      array (
        'Name' => 'url4',
        'Caption' => 'URL4',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text4' => 
      array (
        'Name' => 'text4',
        'Caption' => '链接文本4',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url5' => 
      array (
        'Name' => 'url5',
        'Caption' => 'URL5',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text5' => 
      array (
        'Name' => 'text5',
        'Caption' => '链接文本5',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url6' => 
      array (
        'Name' => 'url6',
        'Caption' => 'URL6',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text6' => 
      array (
        'Name' => 'text6',
        'Caption' => '链接文本6',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url7' => 
      array (
        'Name' => 'url7',
        'Caption' => 'URL7',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text7' => 
      array (
        'Name' => 'text7',
        'Caption' => '链接文本7',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url8' => 
      array (
        'Name' => 'url8',
        'Caption' => 'URL8',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text8' => 
      array (
        'Name' => 'text8',
        'Caption' => '链接文本8',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url9' => 
      array (
        'Name' => 'url9',
        'Caption' => 'URL9',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text9' => 
      array (
        'Name' => 'text9',
        'Caption' => '链接文本9',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url10' => 
      array (
        'Name' => 'url10',
        'Caption' => 'URL10',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text10' => 
      array (
        'Name' => 'text10',
        'Caption' => '链接文本10',
        'FormType' => 'input',
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
      'zh_CN' => '显示使用者本人及其朋友在SNS上的活动的记录',
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