<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pages")
 */
class Page{
    /** 
     * @ORM\Id 
     * @ORM\Column(type = "integer") 
     * @ORM\GeneratedValue 
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $textas;

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getTextas(){
        return $this->textas;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setTextas($text){
        $this->textas = $text;
    }
}