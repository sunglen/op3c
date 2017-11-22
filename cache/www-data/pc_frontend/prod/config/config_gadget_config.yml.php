<?php
sfConfig::add(array('op_gadget_config' => array (
  'gadget' => 
  array (
    'name' => '主画面',
    'layout' => 
    array (
      'default' => 'layoutA',
      'choices' => 
      array (
        0 => 'layoutA',
        1 => 'layoutB',
        2 => 'layoutC',
      ),
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'homeGadgetPlot',
    ),
  ),
  'profile' => 
  array (
    'name' => '个人档案画面',
    'layout' => 
    array (
      'default' => 'layoutA',
      'choices' => 
      array (
        0 => 'layoutA',
        1 => 'layoutB',
        2 => 'layoutC',
      ),
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'profileGadgetPlot',
    ),
  ),
  'login' => 
  array (
    'name' => '登录画面',
    'layout' => 
    array (
      'default' => 'layoutA',
      'choices' => 
      array (
        0 => 'layoutA',
        1 => 'layoutB',
        2 => 'layoutC',
      ),
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'loginGadgetPlot',
    ),
  ),
  'sideBanner' => 
  array (
    'name' => 'Side Banner画面',
    'layout' => 
    array (
      'default' => 'layoutD',
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'sideBannerGadgetPlot',
    ),
  ),
  'mobile' => 
  array (
    'name' => '手机版主画面',
    'layout' => 
    array (
      'default' => 'layoutE',
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'mobileHomeGadgetPlot',
    ),
  ),
  'mobileProfile' => 
  array (
    'name' => '手机版个人档案画面',
    'layout' => 
    array (
      'default' => 'layoutE',
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'mobileProfileGadgetPlot',
    ),
  ),
  'mobileLogin' => 
  array (
    'name' => '手机版登录画面',
    'layout' => 
    array (
      'default' => 'layoutD',
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'mobileLoginGadgetPlot',
    ),
  ),
  'mobileHeader' => 
  array (
    'name' => '手机版页眉',
    'layout' => 
    array (
      'default' => 'layoutD',
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'mobileHeaderGadgetPlot',
    ),
  ),
  'mobileFooter' => 
  array (
    'name' => '手机版页脚',
    'layout' => 
    array (
      'default' => 'layoutD',
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'mobileFooterGadgetPlot',
    ),
  ),
  'dailyNews' => 
  array (
    'name' => '每日新闻（面向PC邮箱）',
    'layout' => 
    array (
      'default' => 'layoutD',
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'dailyNewsGadgetPlot',
    ),
  ),
  'mobileDailyNews' => 
  array (
    'name' => '每日新闻（面向手机邮箱）',
    'layout' => 
    array (
      'default' => 'layoutD',
    ),
    'plot_action' => 
    array (
      0 => 'design',
      1 => 'mobileDailyNewsGadgetPlot',
    ),
  ),
)));