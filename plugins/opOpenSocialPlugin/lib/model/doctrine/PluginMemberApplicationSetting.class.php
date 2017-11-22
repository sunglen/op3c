<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * PluginMemberApplicationSetting
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    opOpenSocialPlugin
 * @subpackage model
 * @author     Shogo Kawahara <kawahara@tejimaya.net>
 */
abstract class PluginMemberApplicationSetting extends BaseMemberApplicationSetting
{
  public function preSave($event)
  {
    if (!$this->type)
    {
      $this->type = 'application';
    }
    $this->hash = md5($this->member_application_id.$this->type.$this->name);
  }
}