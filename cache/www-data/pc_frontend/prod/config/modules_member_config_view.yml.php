<?php
// auto-generated by sfViewConfigHandler
// date: 2011/06/13 23:25:28
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'homeSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'profileSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'configSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'loginSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'homeSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == 'layoutA' ? false : 'layoutA'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('/opSkinBasicPlugin/css/main.css', '', array ());
  $response->addJavascript('/sfProtoculousPlugin/js/prototype', '', array ());
  $response->addJavascript('util', '', array ());
}
else if ($templateName.$this->viewName == 'profileSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == 'layoutA' ? false : 'layoutA'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('/opSkinBasicPlugin/css/main.css', '', array ());
}
else if ($templateName.$this->viewName == 'configSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == 'layoutB' ? false : 'layoutB'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('/opSkinBasicPlugin/css/main.css', '', array ());
}
else if ($templateName.$this->viewName == 'loginSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == 'layoutA' ? false : 'layoutA'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('/opSkinBasicPlugin/css/main.css', '', array ());
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layoutC' ? false : 'layoutC'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('/opSkinBasicPlugin/css/main.css', '', array ());
}

// auto-generated by sfOpenPNEViewConfigHandler
// date: 2011/06/13 23:25:28
if ($templateName.$this->viewName == 'homeSuccess')
{
  $this->setCustomize('cautionAboutFriendPre', 'friend', 'cautionAboutFriendPre', array(), array('information',), array('bodyBottom',), false);
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set customize "%s" (%s/%s)', 'cautionAboutFriendPre', 'friend', 'cautionAboutFriendPre'))));
  $this->setCustomize('cautionAboutCommunityMemberPre', 'community', 'cautionAboutCommunityMemberPre', array(), array('information',), array('bodyBottom',), true);
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set customize "%s" (%s/%s)', 'cautionAboutCommunityMemberPre', 'community', 'cautionAboutCommunityMemberPre'))));
  $this->setCustomize('cautionAboutChangeAdminRequest', 'community', 'cautionAboutChangeAdminRequest', array(), array('information',), array('bodyBottom',), true);
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set customize "%s" (%s/%s)', 'cautionAboutChangeAdminRequest', 'community', 'cautionAboutChangeAdminRequest'))));
  $this->setCustomize('cautionAboutSubAdminRequest', 'community', 'cautionAboutSubAdminRequest', array(), array('information',), array('bodyBottom',), true);
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set customize "%s" (%s/%s)', 'cautionAboutSubAdminRequest', 'community', 'cautionAboutSubAdminRequest'))));
  $this->setCustomize('noticeUnreadDiaryComment', 'diary', 'noticeUnreadDiaryComment', array(), array('information',), array('bodyBottom',), true);
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set customize "%s" (%s/%s)', 'noticeUnreadDiaryComment', 'diary', 'noticeUnreadDiaryComment'))));
  $this->setCustomize('unreadMessage', 'message', 'unreadMessage', array(), array('information',), array('bodyBottom',), true);
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set customize "%s" (%s/%s)', 'unreadMessage', 'message', 'unreadMessage'))));
}
else if ($templateName.$this->viewName == 'profileSuccess')
{
}
else if ($templateName.$this->viewName == 'configSuccess')
{
}
else if ($templateName.$this->viewName == 'loginSuccess')
{
}
else
{
}

