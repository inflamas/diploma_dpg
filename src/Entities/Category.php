<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */
class Category {

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100, unique=true) 
     */
    private $name;
    
    /**
     *@ORM\OneToMany(targetEntity="Entities\Travel", mappedBy="category") 
     */
    private $travels;
    
    
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getTravels() {
        return $this->travels;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setTravels($travels) {
        $this->travels = $travels;
    }
}
