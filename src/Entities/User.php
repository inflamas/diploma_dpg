<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */


class User {
    
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    /**
     *@ORM\Column(type="string", length=100, unique=true)
     */
    private $userName;
    
    /**
     * @ORM\Column(type="string", length=70)
     */
    private $password;
    
    
    
    
    
    function getId() {
        return $this->id;
    }

    function getUserName() {
        return $this->userName;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setPassword($password) {
        $this->password = $password;
    }


    
}