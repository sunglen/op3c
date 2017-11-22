<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

/*
see lib/vendor/symfony/lib/config/sfProjectConfiguration.class.php
and then
apps/mobile_frontend/config/mobile_frontendConfiguration.class.php
then
lib/vendor/PEAR/Net/UserAgent/Mobile.php
and then
lib/filter/sfMobileIOFilter.class.php
for the mobile setting details.
 */
$configuration = ProjectConfiguration::getApplicationConfiguration('mobile_frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
