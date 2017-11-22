<?php
sfConfig::add(array('openpne_sns_config' => array(
'sns_name' => array (
  'Name' => 'sns_name',
  'Caption' => 'SNS名',
  'FormType' => 'input',
  'ValueType' => 'text',
  'Default' => 'MySNS',
  'IsRequired' => true,
),
'sns_title' => array (
  'Name' => 'sns_title',
  'Caption' => '页面标题',
  'Help' => '将成为 HTML 的 title 标签的内容',
  'FormType' => 'input',
  'ValueType' => 'text',
  'Default' => '',
  'IsRequired' => false,
),
'admin_mail_address' => array (
  'Name' => 'admin_mail_address',
  'Caption' => '管理者邮箱',
  'FormType' => 'input',
  'ValueType' => 'email',
  'Default' => 'sns@example.com',
  'IsRequired' => true,
),
'enable_pc' => array (
  'Name' => 'enable_pc',
  'Caption' => '设定使用PC版',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '不使用',
    1 => '使用',
  ),
),
'enable_mobile' => array (
  'Name' => 'enable_mobile',
  'Caption' => '设定使用手机版',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '不使用',
    1 => '使用',
  ),
),
'enable_friend_link' => array (
  'Name' => 'enable_friend_link',
  'Caption' => '设定使用朋友链接',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '不使用',
    1 => '使用',
  ),
),
'image_max_filesize' => array (
  'Name' => 'image_max_filesize',
  'Caption' => '上载图片的文件大小限制(bytes)',
  'FormType' => 'input',
  'ValueType' => 'regexp',
  'ValueRegexp' => '/^[1-9]\\d*[K|M]?$/',
  'IsRequired' => true,
  'Default' => '300K',
),
'daily_news_day' => array (
  'Name' => 'daily_news_day',
  'Caption' => '设定每日新闻的收取频率',
  'Help' => '在已设定「每天」、「不收取」以外选项的情况下，在此设定收取频率',
  'FormType' => 'checkbox',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 
  array (
    0 => 0,
    1 => 3,
  ),
  'Choices' => 
  array (
    0 => 'Mon',
    1 => 'Tue',
    2 => 'Wed',
    3 => 'Thu',
    4 => 'Fri',
    5 => 'Sat',
    6 => 'Sun',
  ),
),
'is_use_captcha' => array (
  'Name' => 'is_use_captcha',
  'Caption' => '设定使用 CAPTCHA',
  'Help' => '设定是否使用 CAPTCHA (即一种输入图片中的文字来进行人类认证的方式)',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '不使用',
    1 => '使用',
  ),
),
'is_allow_post_activity' => array (
  'Name' => 'is_allow_post_activity',
  'Caption' => '设定动态投稿',
  'Help' => '设定是否允许成员进行动态投稿',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '不允许',
    1 => '允许',
  ),
),
'external_pc_login_url' => array (
  'Name' => 'external_pc_login_url',
  'Caption' => 'PC版外部登录URL',
  'Help' => '在退出PC版的情况下，或者PC版登录失败的情况下，转向这里指定的URL<br />※此处指定的页面中通常有必要放置一个登录表单。<br />※如果要使用普通的登录页面，在此处置空',
  'FormType' => 'input',
  'ValueType' => 'text',
  'Default' => '',
  'IsRequired' => false,
),
'external_mobile_login_url' => array (
  'Name' => 'external_mobile_login_url',
  'Caption' => '手机版外部登录URL',
  'Help' => '在退出手机版的情况下，或者手机版登录失败的情况下，转向此处指定的URL<br />※此处指定的页面中通常有必要放置一个登录表单<br />※如果要使用普通的登录页面，在此处置空',
  'FormType' => 'input',
  'ValueType' => 'text',
  'Default' => '',
  'IsRequired' => false,
),
'enable_registration' => array (
  'Name' => 'enable_registration',
  'Caption' => '可否注册',
  'FormType' => 'radio',
  'ValueType' => 'integer',
  'IsRequired' => true,
  'Default' => 3,
  'Choices' => 
  array (
    3 => '从PC或手机上都可以注册',
    2 => '只能从PC上注册',
    1 => '只能从手机上注册',
    0 => '暂时停止注册',
  ),
),
'retrieve_uid' => array (
  'Name' => 'retrieve_uid',
  'Caption' => '设定成员注册时取得手机的个体识别号码',
  'FormType' => 'radio',
  'ValueType' => 'integer',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    3 => 'PC或手机注册时必须注册手机的个体识别号码',
    2 => '手机注册时必须注册手机的个体识别号码',
    1 => '手机注册时取得手机的个体识别号码（任意）',
    0 => '手机注册时不取得手机的个体识别号码',
  ),
),
'font_size' => array (
  'Name' => 'font_size',
  'Caption' => '设定指定手机版的字体大小',
  'FormType' => 'radio',
  'ValueType' => 'integer',
  'IsRequired' => true,
  'Default' => 0,
  'Choices' => 
  array (
    1 => '指定字体大小',
    0 => '不指定字体大小',
  ),
),
'is_check_mobile_ip' => array (
  'Name' => 'is_check_mobile_ip',
  'Caption' => '手机的IP带域设定',
  'FormType' => 'radio',
  'ValueType' => 'integer',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    1 => '检查手机的IP带域',
    0 => '不检查手机的IP带域',
  ),
),
'user_agreement' => array (
  'Name' => 'user_agreement',
  'Caption' => '服务条款',
  'FormType' => 'textarea',
  'ValueType' => 'string',
  'IsRequired' => true,
  'Default' => '服务条款正在准备中。
利用規約はただいま準備中です。
The User Agreement is under construction.',
),
'privacy_policy' => array (
  'Name' => 'privacy_policy',
  'Caption' => '隐私策略',
  'FormType' => 'textarea',
  'ValueType' => 'string',
  'IsRequired' => true,
  'Default' => '隐私策略正在准备中。
プライバシーポリシーはただいま準備中です。
The Privacy Policy is under construction.',
),
'footer_before' => array (
  'Name' => 'footer_before',
  'Caption' => '登录前页脚',
  'FormType' => 'textarea',
  'ValueType' => 'string',
  'IsRequired' => false,
  'Default' => 'Powered by <a href="http://www.openpne.jp/" target="_blank">OpenPNE</a>',
),
'footer_after' => array (
  'Name' => 'footer_after',
  'Caption' => '登录后页脚',
  'FormType' => 'textarea',
  'ValueType' => 'string',
  'IsRequired' => false,
  'Default' => 'Powered by <a href="http://www.openpne.jp/" target="_blank">OpenPNE</a>',
),
'google_maps_api_key' => array (
  'Name' => 'google maps api key',
  'Caption' => 'google maps api key',
  'FormType' => 'text',
  'ValueType' => 'string',
  'IsRequired' => false,
  'Default' => '',
),
'google_AJAX_search_api_key' => array (
  'Name' => 'google AJAX search api key',
  'Caption' => 'google AJAX search api key',
  'FormType' => 'text',
  'ValueType' => 'string',
  'IsRequired' => false,
  'Default' => '',
),
),
));
sfConfig::add(array('openpne_sns_category' => array(
'general' => array(
'sns_name',
'sns_title',
'admin_mail_address',
'enable_pc',
'enable_mobile',
'enable_friend_link',
'image_max_filesize',
'daily_news_day',
'is_use_captcha',
'is_allow_post_activity',
),
'external_login_page' => array(
'external_pc_login_url',
'external_mobile_login_url',
),
'authentication' => array(
'enable_registration',
),
'mobile' => array(
'retrieve_uid',
'font_size',
'is_check_mobile_ip',
),
'policy' => array(
'user_agreement',
'privacy_policy',
),
'footer' => array(
'footer_before',
'footer_after',
),
'api_keys' => array(
'google_maps_api_key',
'google_AJAX_search_api_key',
),
),
));
sfConfig::add(array('openpne_sns_category_attribute' => array(
'general' => array (
  'Caption' => 'General Configuration',
),
'external_login_page' => array (
  'Caption' => 'External Login Page Configuration',
),
'authentication' => array (
  'Caption' => 'Authentication Configuration',
),
'mobile' => array (
  'Caption' => 'Mobile Configuration',
),
'policy' => array (
  'Caption' => 'Site Policy Configuration',
),
'footer' => array (
  'Hidden' => true,
),
'api_keys' => array (
  'Caption' => 'API key的设定',
),
),
));