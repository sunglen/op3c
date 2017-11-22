<?php
// auto-generated by sfRootConfigHandler
// date: 2011/06/13 23:39:43
require_once('/home/sunge/op3c.20110406/lib/config/opRoutingConfigHandler.class.php');
require_once('/home/sunge/op3c.20110406/lib/config/sfOpenPNEViewConfigHandler.class.php');
require_once('/home/sunge/op3c.20110406/lib/config/sfOpenPNEPluginConfigHandler.class.php');
require_once('/home/sunge/op3c.20110406/lib/config/opGadgetConfigConfigHandler.class.php');
require_once('/home/sunge/op3c.20110406/lib/config/opGadgetConfigConfigHandler.class.php');
$this->handlers['config/autoload.yml'] = new sfAutoloadConfigHandler();
$this->handlers['config/databases.yml'] = new sfDatabaseConfigHandler();
$this->handlers['config/settings.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'sf_',
));
$this->handlers['config/app.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'app_',
));
$this->handlers['config/factories.yml'] = new sfFactoryConfigHandler();
$this->handlers['config/core_compile.yml'] = new sfCompileConfigHandler();
$this->handlers['config/filters.yml'] = new sfFilterConfigHandler();
$this->handlers['config/routing.yml'] = new opRoutingConfigHandler();
$this->handlers['modules/*/config/generator.yml'] = new sfGeneratorConfigHandler();
$this->handlers['modules/*/config/view.yml'] = new sfOpenPNEViewConfigHandler();
$this->handlers['modules/*/config/security.yml'] = new opSecurityConfigHandler();
$this->handlers['modules/*/config/cache.yml'] = new sfCacheConfigHandler();
$this->handlers['modules/*/config/module.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'mod_',
  'module' => true,
));
$this->handlers['data/config/plugin.yml'] = new sfOpenPNEPluginConfigHandler();
$this->handlers['config/gadget_config.yml'] = new opGadgetConfigConfigHandler();
$this->handlers['config/gadget_layout_config.yml'] = new opGadgetConfigConfigHandler(array (
  'prefix' => 'layout_',
));
$this->handlers['config/mobile_mail_domain.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/mobile_ip_address.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/sns_term.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/mail_template.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/confirmation.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/monitoring.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/mobile_preset_color.yml'] = new sfSimpleYamlConfigHandler();