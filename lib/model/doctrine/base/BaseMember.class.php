<?php

/**
 * BaseMember
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $invite_member_id
 * @property boolean $is_login_rejected
 * @property Member $Member
 * @property Doctrine_Collection $Albums
 * @property Doctrine_Collection $AlbumImages
 * @property Doctrine_Collection $Ashiato
 * @property Doctrine_Collection $CommunityTopic
 * @property Doctrine_Collection $CommunityTopicComment
 * @property Doctrine_Collection $CommunityEvent
 * @property Doctrine_Collection $CommunityEventComment
 * @property Doctrine_Collection $CommunityEventMember
 * @property Doctrine_Collection $Diaries
 * @property Doctrine_Collection $DiaryComments
 * @property Doctrine_Collection $DiaryCommentUnread
 * @property Doctrine_Collection $DiaryCommentUpdate
 * @property Doctrine_Collection $SendMessageData
 * @property Doctrine_Collection $MessageSendList
 * @property Doctrine_Collection $DeletedMessage
 * @property Doctrine_Collection $AddedApplications
 * @property Doctrine_Collection $Applications
 * @property Doctrine_Collection $MemberApplications
 * @property Doctrine_Collection $PersistentDatas
 * @property Doctrine_Collection $MemberRelationship
 * @property Doctrine_Collection $MemberImage
 * @property Doctrine_Collection $MemberProfile
 * @property Doctrine_Collection $CommunityMember
 * @property Doctrine_Collection $CommunityMemberPosition
 * @property Doctrine_Collection $MemberConfig
 * @property Doctrine_Collection $OAuthConsumerInformation
 * @property Doctrine_Collection $OAuthMemberToken
 * @property Doctrine_Collection $OpenIDTrustLog
 * @property Doctrine_Collection $Activities
 * 
 * @method integer             getId()                       Returns the current record's "id" value
 * @method string              getName()                     Returns the current record's "name" value
 * @method integer             getInviteMemberId()           Returns the current record's "invite_member_id" value
 * @method boolean             getIsLoginRejected()          Returns the current record's "is_login_rejected" value
 * @method Member              getMember()                   Returns the current record's "Member" value
 * @method Doctrine_Collection getAlbums()                   Returns the current record's "Albums" collection
 * @method Doctrine_Collection getAlbumImages()              Returns the current record's "AlbumImages" collection
 * @method Doctrine_Collection getAshiato()                  Returns the current record's "Ashiato" collection
 * @method Doctrine_Collection getCommunityTopic()           Returns the current record's "CommunityTopic" collection
 * @method Doctrine_Collection getCommunityTopicComment()    Returns the current record's "CommunityTopicComment" collection
 * @method Doctrine_Collection getCommunityEvent()           Returns the current record's "CommunityEvent" collection
 * @method Doctrine_Collection getCommunityEventComment()    Returns the current record's "CommunityEventComment" collection
 * @method Doctrine_Collection getCommunityEventMember()     Returns the current record's "CommunityEventMember" collection
 * @method Doctrine_Collection getDiaries()                  Returns the current record's "Diaries" collection
 * @method Doctrine_Collection getDiaryComments()            Returns the current record's "DiaryComments" collection
 * @method Doctrine_Collection getDiaryCommentUnread()       Returns the current record's "DiaryCommentUnread" collection
 * @method Doctrine_Collection getDiaryCommentUpdate()       Returns the current record's "DiaryCommentUpdate" collection
 * @method Doctrine_Collection getSendMessageData()          Returns the current record's "SendMessageData" collection
 * @method Doctrine_Collection getMessageSendList()          Returns the current record's "MessageSendList" collection
 * @method Doctrine_Collection getDeletedMessage()           Returns the current record's "DeletedMessage" collection
 * @method Doctrine_Collection getAddedApplications()        Returns the current record's "AddedApplications" collection
 * @method Doctrine_Collection getApplications()             Returns the current record's "Applications" collection
 * @method Doctrine_Collection getMemberApplications()       Returns the current record's "MemberApplications" collection
 * @method Doctrine_Collection getPersistentDatas()          Returns the current record's "PersistentDatas" collection
 * @method Doctrine_Collection getMemberRelationship()       Returns the current record's "MemberRelationship" collection
 * @method Doctrine_Collection getMemberImage()              Returns the current record's "MemberImage" collection
 * @method Doctrine_Collection getMemberProfile()            Returns the current record's "MemberProfile" collection
 * @method Doctrine_Collection getCommunityMember()          Returns the current record's "CommunityMember" collection
 * @method Doctrine_Collection getCommunityMemberPosition()  Returns the current record's "CommunityMemberPosition" collection
 * @method Doctrine_Collection getMemberConfig()             Returns the current record's "MemberConfig" collection
 * @method Doctrine_Collection getOAuthConsumerInformation() Returns the current record's "OAuthConsumerInformation" collection
 * @method Doctrine_Collection getOAuthMemberToken()         Returns the current record's "OAuthMemberToken" collection
 * @method Doctrine_Collection getOpenIDTrustLog()           Returns the current record's "OpenIDTrustLog" collection
 * @method Doctrine_Collection getActivities()               Returns the current record's "Activities" collection
 * @method Member              setId()                       Sets the current record's "id" value
 * @method Member              setName()                     Sets the current record's "name" value
 * @method Member              setInviteMemberId()           Sets the current record's "invite_member_id" value
 * @method Member              setIsLoginRejected()          Sets the current record's "is_login_rejected" value
 * @method Member              setMember()                   Sets the current record's "Member" value
 * @method Member              setAlbums()                   Sets the current record's "Albums" collection
 * @method Member              setAlbumImages()              Sets the current record's "AlbumImages" collection
 * @method Member              setAshiato()                  Sets the current record's "Ashiato" collection
 * @method Member              setCommunityTopic()           Sets the current record's "CommunityTopic" collection
 * @method Member              setCommunityTopicComment()    Sets the current record's "CommunityTopicComment" collection
 * @method Member              setCommunityEvent()           Sets the current record's "CommunityEvent" collection
 * @method Member              setCommunityEventComment()    Sets the current record's "CommunityEventComment" collection
 * @method Member              setCommunityEventMember()     Sets the current record's "CommunityEventMember" collection
 * @method Member              setDiaries()                  Sets the current record's "Diaries" collection
 * @method Member              setDiaryComments()            Sets the current record's "DiaryComments" collection
 * @method Member              setDiaryCommentUnread()       Sets the current record's "DiaryCommentUnread" collection
 * @method Member              setDiaryCommentUpdate()       Sets the current record's "DiaryCommentUpdate" collection
 * @method Member              setSendMessageData()          Sets the current record's "SendMessageData" collection
 * @method Member              setMessageSendList()          Sets the current record's "MessageSendList" collection
 * @method Member              setDeletedMessage()           Sets the current record's "DeletedMessage" collection
 * @method Member              setAddedApplications()        Sets the current record's "AddedApplications" collection
 * @method Member              setApplications()             Sets the current record's "Applications" collection
 * @method Member              setMemberApplications()       Sets the current record's "MemberApplications" collection
 * @method Member              setPersistentDatas()          Sets the current record's "PersistentDatas" collection
 * @method Member              setMemberRelationship()       Sets the current record's "MemberRelationship" collection
 * @method Member              setMemberImage()              Sets the current record's "MemberImage" collection
 * @method Member              setMemberProfile()            Sets the current record's "MemberProfile" collection
 * @method Member              setCommunityMember()          Sets the current record's "CommunityMember" collection
 * @method Member              setCommunityMemberPosition()  Sets the current record's "CommunityMemberPosition" collection
 * @method Member              setMemberConfig()             Sets the current record's "MemberConfig" collection
 * @method Member              setOAuthConsumerInformation() Sets the current record's "OAuthConsumerInformation" collection
 * @method Member              setOAuthMemberToken()         Sets the current record's "OAuthMemberToken" collection
 * @method Member              setOpenIDTrustLog()           Sets the current record's "OpenIDTrustLog" collection
 * @method Member              setActivities()               Sets the current record's "Activities" collection
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseMember extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('member');
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
             'comment' => 'Nickname',
             'length' => '64',
             ));
        $this->hasColumn('invite_member_id', 'integer', 4, array(
             'type' => 'integer',
             'comment' => 'Member id of the person who invited this member',
             'length' => '4',
             ));
        $this->hasColumn('is_login_rejected', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => false,
             'comment' => 'Rejected member',
             ));

        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('comment', 'Saves informations of members');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Member', array(
             'local' => 'invite_member_id',
             'foreign' => 'id',
             'onDelete' => 'set null'));

        $this->hasMany('Album as Albums', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('AlbumImage as AlbumImages', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('Ashiato', array(
             'local' => 'id',
             'foreign' => 'member_id_to'));

        $this->hasMany('CommunityTopic', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('CommunityTopicComment', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('CommunityEvent', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('CommunityEventComment', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('CommunityEventMember', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('Diary as Diaries', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('DiaryComment as DiaryComments', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('DiaryCommentUnread', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('DiaryCommentUpdate', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('SendMessageData', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('MessageSendList', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('DeletedMessage', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('Application as AddedApplications', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('Application as Applications', array(
             'refClass' => 'MemberApplication',
             'local' => 'member_id',
             'foreign' => 'application_id'));

        $this->hasMany('MemberApplication as MemberApplications', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('ApplicationPersistentData as PersistentDatas', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('MemberRelationship', array(
             'local' => 'id',
             'foreign' => 'member_id_to'));

        $this->hasMany('MemberImage', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('MemberProfile', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('CommunityMember', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('CommunityMemberPosition', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('MemberConfig', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('OAuthConsumerInformation', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('OAuthMemberToken', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('OpenIDTrustLog', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $this->hasMany('ActivityData as Activities', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $opactivatebehavior0 = new opActivateBehavior();
        $this->actAs($timestampable0);
        $this->actAs($opactivatebehavior0);
    }
}