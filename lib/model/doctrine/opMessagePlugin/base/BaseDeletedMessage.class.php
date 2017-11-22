<?php

/**
 * BaseDeletedMessage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $member_id
 * @property integer $message_id
 * @property integer $message_send_list_id
 * @property boolean $is_deleted
 * @property Member $Member
 * 
 * @method integer        getId()                   Returns the current record's "id" value
 * @method integer        getMemberId()             Returns the current record's "member_id" value
 * @method integer        getMessageId()            Returns the current record's "message_id" value
 * @method integer        getMessageSendListId()    Returns the current record's "message_send_list_id" value
 * @method boolean        getIsDeleted()            Returns the current record's "is_deleted" value
 * @method Member         getMember()               Returns the current record's "Member" value
 * @method DeletedMessage setId()                   Sets the current record's "id" value
 * @method DeletedMessage setMemberId()             Sets the current record's "member_id" value
 * @method DeletedMessage setMessageId()            Sets the current record's "message_id" value
 * @method DeletedMessage setMessageSendListId()    Sets the current record's "message_send_list_id" value
 * @method DeletedMessage setIsDeleted()            Sets the current record's "is_deleted" value
 * @method DeletedMessage setMember()               Sets the current record's "Member" value
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDeletedMessage extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('deleted_message');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('member_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('message_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('message_send_list_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('is_deleted', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));

        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Member', array(
             'local' => 'member_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}