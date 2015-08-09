<?php

namespace Entities; // Esto es un package mayuscula

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bookings")
 */

class Booking {
    /**
     * @ORM\Id() 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
    * @ORM\Column(type="smallint") 
    */
    private $numberOfPersons;
    
    /**
    * @ORM\Column(type="datetime") 
    */
    private $bookingDate;
    
    /**
    * @ORM\Column(type="string", length=30) 
    */
    private $formOfAdress;
    
    /**
    * @ORM\Column(type="string", length=60) 
    */
    private $firstName;
    
    /**
    * @ORM\Column(type="string", length=60) 
    */
    private $lastName;
    
    /**
    * @ORM\Column(type="date") 
    */
    private $dateOfBirth;

    /**
    * @ORM\Column(type="string", length=100) 
    */
    private $street;

    /**
    * @ORM\Column(type="integer") // für z.B Hausnummer 112b????
    */
    private $houseNumber;
    
    /**
    * @ORM\Column(type="integer") 
    */
    private $postcode;
    
    /**
    * @ORM\Column(type="string", length=100) 
    */
    private $city;
    
    /**
    * @ORM\Column(type="string", length=100) 
    */
    private $phone;
    
    /**
    * @ORM\Column(type="string", length=100) 
    */
    private $email;
    
    
    /**
    * @ORM\ManyToOne(targetEntity="Entities\Travel", inversedBy="booking") 
    */
    private $travels;


    
    
    function getId() {
        return $this->id;
    }

    function getNumberOfPersons() {
        return $this->numberOfPersons;
    }

    function getBookingDate() {
        return $this->bookingDate;
    }

    function getFormOfAdress() {
        return $this->formOfAdress;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    function getStreet() {
        return $this->street;
    }

    function getHouseNumber() {
        return $this->houseNumber;
    }

    function getPostcode() {
        return $this->postcode;
    }

    function getCity() {
        return $this->city;
    }

    function getPhone() {
        return $this->phone;
    }

    function getEmail() {
        return $this->email;
    }

    function getTravels() {
        return $this->travels;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumberOfPersons($numberOfPersons) {
        $this->numberOfPersons = $numberOfPersons;
    }

    function setBookingDate($bookingDate) {
        $this->bookingDate = $bookingDate;
    }

    function setFormOfAdress($formOfAdress) {
        $this->formOfAdress = $formOfAdress;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setDateOfBirth($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }

    function setStreet($street) {
        $this->street = $street;
    }

    function setHouseNumber($houseNumber) {
        $this->houseNumber = $houseNumber;
    }

    function setPostcode($postcode) {
        $this->postcode = $postcode;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTravels($travels) {
        $this->travels = $travels;
    }


    
    
}
