<?php

/**
 * BaseSnsConfig
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $value
 * 
 * @method integer   getId()    Returns the current record's "id" value
 * @method string    getName()  Returns the current record's "name" value
 * @method string    getValue() Returns the current record's "value" value
 * @method SnsConfig setId()    Sets the current record's "id" value
 * @method SnsConfig setName()  Sets the current record's "name" value
 * @method SnsConfig setValue() Sets the current record's "value" value
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSnsConfig extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sns_config');
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
             'comment' => 'Configuration name',
             'length' => '64',
             ));
        $this->hasColumn('value', 'string', null, array(
             'type' => 'string',
             'comment' => 'Configuration value',
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
        $this->option('comment', 'Saves configurations of this SNS');
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}