<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pages")
 */
class Page
{

    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /** 
     * @ORM\Column(type="string", length=45, nullable=false)
     */

    protected $title;
    /** 
     * @ORM\Column(type="string", nullable=false) 
     */
    protected $content;

    /** 
     * @ORM\Column(type="integer", nullable=false, options={"default": 0}) 
     */
    protected $restrict_delete = 0;

    public function getID()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getRestrict_delete()
    {
        return $this->restrict_delete;
    }
}
?>