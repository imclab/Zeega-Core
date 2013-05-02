<?php

namespace Zeega\DataBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 * @MongoDB\Document(repositoryClass="Zeega\DataBundle\Repository\ProjectRepository")
 */
class Project
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $title;

    /**
     * @MongoDB\Boolean
     */
    protected $published;

    /**
     * @MongoDB\Boolean
     */
    protected $mobile;

    /**
     * @MongoDB\Date
     * @MongoDB\Field(name="date_created")
     */
    protected $dateCreated;

    /**
     * @MongoDB\Boolean
     */
    protected $enabled = true;

    /**
     * @MongoDB\Hash
     */
    protected $tags;

    /**
     * @MongoDB\String
     */
    protected $authors;

    /**
     * @MongoDB\String
     * @MongoDB\Field(name="cover_image")
     */
    protected $coverImage;

    /**
     * @MongoDB\String
     * @MongoDB\Field(name="estimated_time")
     */
    protected $estimatedTime;

    /**
     * @MongoDB\Date
     * @MongoDB\Field(name="date_updated")
     */
    protected $dateUpdated;

    /**
     * @MongoDB\String
     * @MongoDB\Field(name="item_id")
     */
    protected $itemId;

    /**
     * @MongoDB\String
     */
    protected $description;

    /**
     * @MongoDB\String
     */
    protected $location;

    /**
     * @MongoDB\Date
     * @MongoDB\Field(name="date_published")
     */
    protected $datePublished;

    /**
     * @MongoDB\Float
     */
    protected $version;
    
    /**
     * @MongoDB\Int
     */
    protected $views;

    /**
     * @MongoDB\ReferenceOne(targetDocument="User")
     */    
    protected $user;   

    /**
     * @MongoDB\EmbedMany(targetDocument="Sequence")
     */
    protected $sequences;

    /**
     * @MongoDB\EmbedMany(targetDocument="Frame")
     */
    protected $frames;

    /**
     * @MongoDB\EmbedMany(targetDocument="Layer")
     */
    protected $layers;
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sequences = new \Doctrine\Common\Collections\ArrayCollection();
        $this->frames = new \Doctrine\Common\Collections\ArrayCollection();
        $this->layers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return id $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return \Project
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return \Project
     */
    public function setPublished($published)
    {
        $this->published = $published;
        return $this;
    }

    /**
     * Get published
     *
     * @return boolean $published
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set mobile
     *
     * @param boolean $mobile
     * @return \Project
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Get mobile
     *
     * @return boolean $mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set dateCreated
     *
     * @param date $dateCreated
     * @return \Project
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return date $dateCreated
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return \Project
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set tags
     *
     * @param hash $tags
     * @return \Project
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * Get tags
     *
     * @return hash $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set authors
     *
     * @param string $authors
     * @return \Project
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;
        return $this;
    }

    /**
     * Get authors
     *
     * @return string $authors
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set coverImage
     *
     * @param string $coverImage
     * @return \Project
     */
    public function setCoverImage($coverImage)
    {
        $this->coverImage = $coverImage;
        return $this;
    }

    /**
     * Get coverImage
     *
     * @return string $coverImage
     */
    public function getCoverImage()
    {
        return $this->coverImage;
    }

    /**
     * Set estimatedTime
     *
     * @param string $estimatedTime
     * @return \Project
     */
    public function setEstimatedTime($estimatedTime)
    {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * Get estimatedTime
     *
     * @return string $estimatedTime
     */
    public function getEstimatedTime()
    {
        return $this->estimatedTime;
    }

    /**
     * Set dateUpdated
     *
     * @param date $dateUpdated
     * @return \Project
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return date $dateUpdated
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set itemId
     *
     * @param string $itemId
     * @return \Project
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Get itemId
     *
     * @return string $itemId
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return \Project
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return \Project
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set datePublished
     *
     * @param date $datePublished
     * @return \Project
     */
    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
        return $this;
    }

    /**
     * Get datePublished
     *
     * @return date $datePublished
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * Add sequences
     *
     * @param Zeega\DataBundle\Document\Sequence $sequences
     */
    public function addSequence(\Zeega\DataBundle\Document\Sequence $sequences)
    {
        $this->sequences[] = $sequences;
    }

    /**
    * Remove sequences
    *
    * @param <variableType$sequences
    */
    public function removeSequence(\Zeega\DataBundle\Document\Sequence $sequences)
    {
        $this->sequences->removeElement($sequences);
    }

    /**
     * Get sequences
     *
     * @return Doctrine\Common\Collections\Collection $sequences
     */
    public function getSequences()
    {
        return $this->sequences;
    }

    /**
     * Add frames
     *
     * @param Zeega\DataBundle\Document\Frame $frames
     */
    public function addFrame(\Zeega\DataBundle\Document\Frame $frames)
    {
        $this->frames[] = $frames;
    }

    /**
    * Remove frames
    *
    * @param <variableType$frames
    */
    public function removeFrame(\Zeega\DataBundle\Document\Frame $frames)
    {
        $this->frames->removeElement($frames);
    }

    /**
     * Get frames
     *
     * @return Doctrine\Common\Collections\Collection $frames
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * Add layers
     *
     * @param Zeega\DataBundle\Document\Layer $layers
     */
    public function addLayer(\Zeega\DataBundle\Document\Layer $layers)
    {
        $this->layers[] = $layers;
    }

    /**
    * Remove layers
    *
    * @param <variableType$layers
    */
    public function removeLayer(\Zeega\DataBundle\Document\Layer $layers)
    {
        $this->layers->removeElement($layers);
    }

    /**
     * Get layers
     *
     * @return Doctrine\Common\Collections\Collection $layers
     */
    public function getLayers()
    {
        return $this->layers;
    }

    /**
     * Set users
     *
     * @param Zeega\DataBundle\Document\User $users
     * @return \Project
     */
    public function setUser(\Zeega\DataBundle\Document\User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get users
     *
     * @return Zeega\DataBundle\Document\User $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set version
     *
     * @param float $version
     * @return \Project
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Get version
     *
     * @return float $version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set views
     *
     * @param int $views
     * @return \Project
     */
    public function setViews($views)
    {
        $this->views = $views;
        return $this;
    }

    /**
     * Get views
     *
     * @return int $views
     */
    public function getViews()
    {
        return $this->views;
    }
}