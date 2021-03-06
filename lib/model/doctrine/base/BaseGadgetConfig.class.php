<?php

/**
 * BaseGadgetConfig
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $gadget_id
 * @property string $value
 * @property Gadget $Gadget
 * 
 * @method integer      getId()        Returns the current record's "id" value
 * @method string       getName()      Returns the current record's "name" value
 * @method integer      getGadgetId()  Returns the current record's "gadget_id" value
 * @method string       getValue()     Returns the current record's "value" value
 * @method Gadget       getGadget()    Returns the current record's "Gadget" value
 * @method GadgetConfig setId()        Sets the current record's "id" value
 * @method GadgetConfig setName()      Sets the current record's "name" value
 * @method GadgetConfig setGadgetId()  Sets the current record's "gadget_id" value
 * @method GadgetConfig setValue()     Sets the current record's "value" value
 * @method GadgetConfig setGadget()    Sets the current record's "Gadget" value
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseGadgetConfig extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gadget_config');
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
        $this->hasColumn('gadget_id', 'integer', 4, array(
             'type' => 'integer',
             'comment' => 'Gadget id',
             'length' => '4',
             ));
        $this->hasColumn('value', 'string', null, array(
             'type' => 'string',
             'comment' => 'Configuration value',
             ));

        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('comment', 'Saves configurations of gadget');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Gadget', array(
             'local' => 'gadget_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}