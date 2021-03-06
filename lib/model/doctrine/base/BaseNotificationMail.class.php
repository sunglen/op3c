<?php

/**
 * BaseNotificationMail
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $template
 * @property string $renderer
 * @property boolean $is_enabled
 * 
 * @method integer          getId()         Returns the current record's "id" value
 * @method string           getName()       Returns the current record's "name" value
 * @method string           getTitle()      Returns the current record's "title" value
 * @method string           getTemplate()   Returns the current record's "template" value
 * @method string           getRenderer()   Returns the current record's "renderer" value
 * @method boolean          getIsEnabled()  Returns the current record's "is_enabled" value
 * @method NotificationMail setId()         Sets the current record's "id" value
 * @method NotificationMail setName()       Sets the current record's "name" value
 * @method NotificationMail setTitle()      Sets the current record's "title" value
 * @method NotificationMail setTemplate()   Sets the current record's "template" value
 * @method NotificationMail setRenderer()   Sets the current record's "renderer" value
 * @method NotificationMail setIsEnabled()  Sets the current record's "is_enabled" value
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNotificationMail extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('notification_mail');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'comment' => 'Serial number',
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 64, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Notification Identifier Name',
             'length' => '64',
             ));
        $this->hasColumn('title', 'string', 64, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Notification Title',
             'length' => '64',
             ));
        $this->hasColumn('template', 'string', null, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Notification Template',
             ));
        $this->hasColumn('renderer', 'string', 64, array(
             'type' => 'string',
             'default' => 'twig',
             'notnull' => true,
             'comment' => 'Notification Template Renderer',
             'length' => '64',
             ));
        $this->hasColumn('is_enabled', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             'notnull' => true,
             'comment' => 'Notification Enabled',
             ));


        $this->index('is_enabled_INDEX', array(
             'fields' => 
             array(
              0 => 'is_enabled',
             ),
             ));
        $this->index('name_UNIQUE', array(
             'fields' => 
             array(
              0 => 'name',
             ),
             'type' => 'unique',
             ));
        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('comment', 'Saves configuration of notification mail');
    }

    public function setUp()
    {
        parent::setUp();
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'template',
             ),
             'length' => 5,
             ));
        $this->actAs($i18n0);
    }
}