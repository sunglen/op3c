<?php

/**
 * BaseAdminUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $username
 * @property string $password
 * 
 * @method integer   getId()       Returns the current record's "id" value
 * @method string    getUsername() Returns the current record's "username" value
 * @method string    getPassword() Returns the current record's "password" value
 * @method AdminUser setId()       Sets the current record's "id" value
 * @method AdminUser setUsername() Sets the current record's "username" value
 * @method AdminUser setPassword() Sets the current record's "password" value
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseAdminUser extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('admin_user');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'comment' => 'Serial number',
             'length' => '4',
             ));
        $this->hasColumn('username', 'string', 64, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Administrator\'\'s username',
             'length' => '64',
             ));
        $this->hasColumn('password', 'string', 40, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Administrator\'\'s password',
             'length' => '40',
             ));


        $this->index('username_UNIQUE', array(
             'fields' => 
             array(
              0 => 'username',
             ),
             'type' => 'unique',
             ));
        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('comment', 'Saves informations to login administration page');
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}