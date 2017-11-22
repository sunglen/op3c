<?php
// auto-generated by sfFilterConfigHandler
// date: 2011/06/13 23:41:52


list($class, $parameters) = (array) sfConfig::get('sf_rendering_filter', array('sfRenderingFilter', array (
)));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);

list($class, $parameters) = (array) sfConfig::get('sf_cache_control_filter', array('opCacheControlFilter', null));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);

list($class, $parameters) = (array) sfConfig::get('sf_enable_app_filter', array('opCheckEnabledApplicationFilter', null));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);

list($class, $parameters) = (array) sfConfig::get('sf_xrds_header_filter', array('opAppendXRDSHeaderFilter', null));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);

// does this action require security?
if ($actionInstance->isSecure())
{
  
list($class, $parameters) = (array) sfConfig::get('sf_security_filter', array('sfBasicSecurityFilter', array (
)));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);
}

list($class, $parameters) = (array) sfConfig::get('sf_emoji_filter', array('opEmojiFilter', null));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);

list($class, $parameters) = (array) sfConfig::get('sf_cache_filter', array('sfCacheFilter', array (
)));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);

list($class, $parameters) = (array) sfConfig::get('sf_execution_filter', array('sfOpenPNEExecutionFilter', array (
)));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);

