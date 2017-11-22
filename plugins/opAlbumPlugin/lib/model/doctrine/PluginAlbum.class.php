<?php

/**
 * PluginAlbum
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5925 2009-06-22 21:27:17Z jwage $
 */
abstract class PluginAlbum extends BaseAlbum
{
  protected $previous, $next;

  public function getPublicFlagLabel()
  {
    $publicFlags = $this->getTable()->getPublicFlags();

    return $publicFlags[$this->getPublicFlag()];
  }

  public function getPrevious($myMemberId = null)
  {
    if (is_null($this->previous))
    {
      $this->previous = $this->getTable()->getPreviousAlbum($this, $myMemberId);
    }

    return $this->previous;
  }

  public function getNext($myMemberId = null)
  {
    if (is_null($this->next))
    {
      $this->next = $this->getTable()->getNextAlbum($this, $myMemberId);
    }

    return $this->next;
  }

  public function getCoverImage()
  {
    $file = $this->getFile();

    if ($file->id)
    {
      return $file;
    }
    return null;
  }

  public function getAlbumImages()
  {
    $images = Doctrine::getTable('AlbumImage')->findByAlbumId($this->getId());
    
    $result = array();
    foreach ($images as $image)
    {
      $result[$image->getFile_id()] = $image;
    }

    return $result;
  }

  public function updateFileId()
  {
    $this->clearRelated();
    $FileId = (bool)$this->getfile_id();

    if ($FileId != $this->getFile_id())
    {
      $this->setFile_id($FileId);
      $this->save();
    }
  }

  public function isAuthor($memberId)
  {
    return ($this->getMemberId() === $memberId);
  }

  public function isViewable($memberId)
  {
    $flags = $this->getTable()->getViewablePublicFlags($this->getTable()->getPublicFlagByMemberId($this->getMemberId(), $memberId));
    
    return in_array($this->getPublicFlag(), $flags);
  }

  public function getAlbumImagesJoinFile()
  {
    $q = Doctrine::getTable('AlbumImage')->createQuery()
      ->leftJoin('AlbumImage.File')
      ->where('album_id = ?', $this->getId());

    return $q->execute();
  }
}