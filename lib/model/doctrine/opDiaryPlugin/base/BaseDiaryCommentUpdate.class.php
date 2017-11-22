<?php

/**
 * BaseDiaryCommentUpdate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $diary_id
 * @property integer $member_id
 * @property timestamp $last_comment_time
 * @property timestamp $my_last_comment_time
 * @property Diary $Diary
 * @property Member $Member
 * 
 * @method integer            getDiaryId()              Returns the current record's "diary_id" value
 * @method integer            getMemberId()             Returns the current record's "member_id" value
 * @method timestamp          getLastCommentTime()      Returns the current record's "last_comment_time" value
 * @method timestamp          getMyLastCommentTime()    Returns the current record's "my_last_comment_time" value
 * @method Diary              getDiary()                Returns the current record's "Diary" value
 * @method Member             getMember()               Returns the current record's "Member" value
 * @method DiaryCommentUpdate setDiaryId()              Sets the current record's "diary_id" value
 * @method DiaryCommentUpdate setMemberId()             Sets the current record's "member_id" value
 * @method DiaryCommentUpdate setLastCommentTime()      Sets the current record's "last_comment_time" value
 * @method DiaryCommentUpdate setMyLastCommentTime()    Sets the current record's "my_last_comment_time" value
 * @method DiaryCommentUpdate setDiary()                Sets the current record's "Diary" value
 * @method DiaryCommentUpdate setMember()               Sets the current record's "Member" value
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDiaryCommentUpdate extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('diary_comment_update');
        $this->hasColumn('diary_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('member_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('last_comment_time', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('my_last_comment_time', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));


        $this->index('member_id_last_comment_time', array(
             'fields' => 
             array(
              0 => 'member_id',
              1 => 'last_comment_time',
             ),
             ));
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Diary', array(
             'local' => 'diary_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $this->hasOne('Member', array(
             'local' => 'member_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));
    }
}