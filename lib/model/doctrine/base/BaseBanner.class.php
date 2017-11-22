<?php

/**
 * BaseBanner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $html
 * @property boolean $is_use_html
 * @property string $caption
 * @property Doctrine_Collection $BannerUseImage
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method string              getName()           Returns the current record's "name" value
 * @method string              getHtml()           Returns the current record's "html" value
 * @method boolean             getIsUseHtml()      Returns the current record's "is_use_html" value
 * @method string              getCaption()        Returns the current record's "caption" value
 * @method Doctrine_Collection getBannerUseImage() Returns the current record's "BannerUseImage" collection
 * @method Banner              setId()             Sets the current record's "id" value
 * @method Banner              setName()           Sets the current record's "name" value
 * @method Banner              setHtml()           Sets the current record's "html" value
 * @method Banner              setIsUseHtml()      Sets the current record's "is_use_html" value
 * @method Banner              setCaption()        Sets the current record's "caption" value
 * @method Banner              setBannerUseImage() Sets the current record's "BannerUseImage" collection
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseBanner extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('banner');
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
             'comment' => 'Banner name',
             'length' => '64',
             ));
        $this->hasColumn('html', 'string', null, array(
             'type' => 'string',
             'comment' => 'HTML of free input banner',
             ));
        $this->hasColumn('is_use_html', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'notnull' => true,
             'comment' => 'This is free HTML banner',
             ));
        $this->hasColumn('caption', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'Description',
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
        $this->option('comment', 'Saves informations about banner');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('BannerUseImage', array(
             'local' => 'id',
             'foreign' => 'banner_id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'caption',
             ),
             'length' => 5,
             ));
        $this->actAs($i18n0);
    }
}