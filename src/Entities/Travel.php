<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity  
 * @ORM\Table(name= "travels") 
 */
class Travel {

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, unique=true) // NECESARIO USAR UNIQUE?
     */
    private $title;

    /**
     * @ORM\Column(type="datetime", length=50) 
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime", length=50)
     */
    private $endDate;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2) //ESTA BN PARA VALORES MONETARIOS?
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=120) 
     */
    private $preview;

    /**
     * @ORM\Column(type="string", length=1000) 
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=120) 
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=120) 
     */
    private $thumbnail;

    /**
     * @ORM\OneToMany(targetEntity="Entities\Booking", mappedBy="travel") 
     */
    private $bookings;

    /**
     * @ORM\ManyToOne(targetEntity="Entities\Region", inversedBy="travel") 
     */
    private $region;

    /**
     * @ORM\ManyToOne(targetEntity="Entities\Category", inversedBy="travel") 
     */
    private $categories;

    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getStarDate() {
        return $this->startDate;
    }

    function getEndDate() {
        return $this->endDate;
    }

    function getPrice() {
        return $this->price;
    }

    function getPreview() {
        return $this->preview;
    }

    function getDescription() {
        return $this->description;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setStarDate($starDate) {
        $this->startDate = $starDate;
    }

    function setEndDate($endDate) {
        $this->endDate = $endDate;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setPreview($preview) {
        $this->preview = $preview;
    }

    function setDescription($description) {
        $this->description = $description;
    }
    function getImage() {
        return $this->image;
    }

    function getThumbnail() {
        return $this->thumbnail;
    }

    function getBookings() {
        return $this->bookings;
    }

    function getRegion() {
        return $this->region;
    }

    function getCategories() {
        return $this->categories;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setThumbnail($thumbnail) {
        $this->thumbnail = $thumbnail;
    }

    function setBookings($bookings) {
        $this->bookings = $bookings;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setCategories($categories) {
        $this->categories = $categories;
    }


}
