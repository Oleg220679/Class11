<?php
// src/AppBundle/Entity/Article.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="ShortDesk", type="text")
     */
    private $shortDesk;

    /**
     * @var string
     *
     * @ORM\Column(name="FullDesk", type="text")
     */
    private $fullDesk;

    /**
     * @var integer
     *
     * @ORM\Column(name="Timestamp", type="integer")
     */
    private $timestamp;


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
     * Set title
     *
     * @param string $title
     *
     * @return Article.
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
     * Set shortDesk
     *
     * @param string $shortDesk
     *
     * @return Article.
     */
    public function setShortDesk($shortDesk)
    {
        $this->shortDesk = $shortDesk;

        return $this;
    }

    /**
     * Get shortDesk
     *
     * @return string
     */
    public function getShortDesk()
    {
        return $this->shortDesk;
    }

    /**
     * Set fullDesk
     *
     * @param string $fullDesk
     *
     * @return Article.
     */
    public function setFullDesk($fullDesk)
    {
        $this->fullDesk = $fullDesk;

        return $this;
    }

    /**
     * Get fullDesk
     *
     * @return string
     */
    public function getFullDesk()
    {
        return $this->fullDesk;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     *
     * @return Article.
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
