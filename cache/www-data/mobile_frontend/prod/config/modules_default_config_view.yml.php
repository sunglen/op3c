<?php
// auto-generated by sfViewConfigHandler
// date: 2011/06/14 00:50:31
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'nonMobileErrorSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'nonMobileErrorSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html; charset=utf-8', false);
  $response->addMeta('robots', 'index, follow', false, false);


}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html; charset=utf-8', false);
  $response->addMeta('robots', 'index, follow', false, false);


}

// auto-generated by sfOpenPNEViewConfigHandler
// date: 2011/06/14 00:50:31
if ($templateName.$this->viewName == 'nonMobileErrorSuccess')
{
}
else
{
}

