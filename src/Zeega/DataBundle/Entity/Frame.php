<?php

namespace Zeega\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zeega\DataBundle\Entity\Frame
 */
class Frame
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $sequence_id
     */
    private $sequence_id;

    /**
     * @var integer $project_id
     */
    private $project_id;

    /**
     * @var array $attr
     */
    private $attr;

    /**
     * @var string $thumbnail_url
     */
    private $thumbnail_url;

    /**
     * @var boolean $enabled
     */
    private $enabled;

    /**
     * @var Zeega\DataBundle\Entity\Sequence
     */
    private $sequence;

    /**
     * @var Zeega\DataBundle\Entity\Project
     */
    private $project;

    /**
     * @var Zeega\DataBundle\Entity\Layer
     */
    private $layers;

    public function __construct()
    {
        $this->layers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sequence_id
     *
     * @param integer $sequenceId
     */
    public function setSequenceId($sequenceId)
    {
        $this->sequence_id = $sequenceId;
    }

    /**
     * Get sequence_id
     *
     * @return integer 
     */
    public function getSequenceId()
    {
        return $this->sequence_id;
    }

    /**
     * Set project_id
     *
     * @param integer $projectId
     */
    public function setProjectId($projectId)
    {
        $this->project_id = $projectId;
    }

    /**
     * Get project_id
     *
     * @return integer 
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Set attr
     *
     * @param array $attr
     */
    public function setAttr($attr)
    {
        $this->attr = $attr;
    }

    /**
     * Get attr
     *
     * @return array 
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * Set thumbnail_url
     *
     * @param string $thumbnailUrl
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->thumbnail_url = $thumbnailUrl;
    }

    /**
     * Get thumbnail_url
     *
     * @return string 
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnail_url;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set sequence
     *
     * @param Zeega\DataBundle\Entity\Sequence $sequence
     */
    public function setSequence(\Zeega\DataBundle\Entity\Sequence $sequence)
    {
        $this->sequence = $sequence;
    }

    /**
     * Get sequence
     *
     * @return Zeega\DataBundle\Entity\Sequence 
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set project
     *
     * @param Zeega\DataBundle\Entity\Project $project
     */
    public function setProject(\Zeega\DataBundle\Entity\Project $project)
    {
        $this->project = $project;
    }

    /**
     * Get project
     *
     * @return Zeega\DataBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Add layers
     *
     * @param Zeega\DataBundle\Entity\Layer $layers
     */
    public function addLayer(\Zeega\DataBundle\Entity\Layer $layers)
    {
        $this->layers[] = $layers;
    }

    /**
     * Get layers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLayers()
    {
        return $this->layers;
    }
    /**
     * @var integer $sequence_index
     */
    private $sequence_index;


    /**
     * Set sequence_index
     *
     * @param integer $sequenceIndex
     */
    public function setSequenceIndex($sequenceIndex)
    {
        $this->sequence_index = $sequenceIndex;
    }

    /**
     * Get sequence_index
     *
     * @return integer 
     */
    public function getSequenceIndex()
    {
        return $this->sequence_index;
    }
}