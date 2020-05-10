<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User{
    /** 
     * @ORM\Id 
     * @ORM\Column(type = "integer") 
     * @ORM\GeneratedValue 
     */

    protected $id;


    /**
     * @ORM\Column(type="string") 
     */
    protected $name;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $password;

    /** 
     * @ORM\Column(type="boolean") 
     */
    protected $status;

    public function setName($name){
        $this->name=$name;
    }

    public function setPassword($pass){
        $this->password=$pass;
    }
    public function setStatus($isAdmin){
        $this->status=$isAdmin;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }

    public function getPassword(){
        return $this->password;
    }
    public function getStatus(){
        return $this->status;
    }
}
?>