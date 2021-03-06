<?php

/**
 * BaseCommunityConfig
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $community_id
 * @property string $name
 * @property string $value
 * @property Community $Community
 * 
 * @method integer         getId()           Returns the current record's "id" value
 * @method integer         getCommunityId()  Returns the current record's "community_id" value
 * @method string          getName()         Returns the current record's "name" value
 * @method string          getValue()        Returns the current record's "value" value
 * @method Community       getCommunity()    Returns the current record's "Community" value
 * @method CommunityConfig setId()           Sets the current record's "id" value
 * @method CommunityConfig setCommunityId()  Sets the current record's "community_id" value
 * @method CommunityConfig setName()         Sets the current record's "name" value
 * @method CommunityConfig setValue()        Sets the current record's "value" value
 * @method CommunityConfig setCommunity()    Sets the current record's "Community" value
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCommunityConfig extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('community_config');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'comment' => 'Serial number',
             'length' => '4',
             ));
        $this->hasColumn('community_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'comment' => 'Community id',
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 64, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Configuration name',
             'length' => '64',
             ));
        $this->hasColumn('value', 'string', null, array(
             'type' => 'string',
             'comment' => 'Configuration value',
             ));

        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('comment', 'Saves configurations of communities');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Community', array(
             'local' => 'community_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}