<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Validator\Constraints as AppAssert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PageRepository")
 *
 * @AppAssert\UniqueUrl
 */
class Page
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=50)
	 *
     * @Assert\Regex("/^[a-z0-9-]+$/")
	 * @Assert\NotBlank()
	 * @Assert\Length(max = 50)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
	 *
	 * @Assert\NotBlank()
	 * @Assert\Length(max = 50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
	 *
	 * @Assert\NotBlank()
	 * @Assert\Length(max = 255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
	 *
	 * @Assert\NotBlank()
	 * @Assert\Length(max = 255)
     */
    private $picture;

    /**
     * @var int
     *
     * @ORM\Column(name="sequence", type="integer")
     */
    private $sequence = 99;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
	 *
	 * @Assert\NotBlank()
     */
    private $content;

    /**
     * @var int
     *
	 * @ORM\ManyToOne(targetEntity="Footer")
	 * @ORM\JoinColumn(name="footer_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $footer;

	
	/**
	 * @var int
	 *
     * @ORM\OneToMany(targetEntity="Page", mappedBy="parent", cascade={"remove"})
	 * @ORM\OrderBy({"sequence" = "ASC"})
     */
    private $children;
	
	/**
	 * @var int
	 *
     * @ORM\ManyToOne(targetEntity="Page", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;
	
	/**
     * @ORM\OneToOne(targetEntity="Description", mappedBy="page", cascade={"remove", "persist"}))
     */
    private $description;
	
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
     * Set slug
     *
     * @param string $slug
     * @return Page
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Page
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Page
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Page
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     * @return Page
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return integer 
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Page
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set footer
     *
     * @param \AppBundle\Entity\Footer $footer
     * @return Page
     */
    public function setFooter(\AppBundle\Entity\Footer $footer = null)
    {
        $this->footer = $footer;

        return $this;
    }

    /**
     * Get footer
     *
     * @return \AppBundle\Entity\Footer 
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * Add children
     *
     * @param \AppBundle\Entity\Page $children
     * @return Page
     */
    public function addChild(\AppBundle\Entity\Page $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \AppBundle\Entity\Page $children
     */
    public function removeChild(\AppBundle\Entity\Page $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \AppBundle\Entity\Page $parent
     * @return Page
     */
    public function setParent(\AppBundle\Entity\Page $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\Page 
     */
    public function getParent()
    {
        return $this->parent;
    }

   

    /**
     * Set description
     *
     * @param \AppBundle\Entity\Description $description
     * @return Page
     */
    public function setDescription(\AppBundle\Entity\Description $description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return \AppBundle\Entity\Description 
     */
    public function getDescription()
    {
        return $this->description;
    }
	
	public function __toString()
	{
		return $this->getName();
	}
}