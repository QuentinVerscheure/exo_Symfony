<?php

namespace App\Entity;


class GiteSearch
{

    private $searchLocalisation;
     /**
     * @var int|null
     */ 
    private $minsurface;
     /**
     * @var int|null
     */ 
    private $minnumberOfBedroom;
     /**
     * @var int|null
     */ 
    private $minnumberOfBed;
     /**
     * @var bool|null
     */ 
    private $isOkPets;


    /**
     * Get the value of searchLocalisation
     */ 
    public function getSearchLocalisation()
    {
        return $this->searchLocalisation;
    }

    /**
     * Set the value of searchLocalisation
     *
     * @return  self
     */ 
    public function setSearchLocalisation($searchLocalisation)
    {
        $this->searchLocalisation = $searchLocalisation;

        return $this;
    }

    /**
     * Get the value of minsurface
     */ 
    public function getMinsurface(): ?int
    {
        return $this->minsurface;
    }

    /**
     * Set the value of minsurface
     *
     * @return  self
     */ 
    public function setMinsurface($minsurface)
    {
        $this->minsurface = $minsurface;

        return $this;
    }

    /**
     * Get the value of minnumberOfBedroom
     */ 
    public function getMinnumberOfBedroom(): ?int
    {
        return $this->minnumberOfBedroom;
    }

    /**
     * Set the value of minnumberOfBedroom
     *
     * @return  self
     */ 
    public function setMinnumberOfBedroom($minnumberOfBedroom)
    {
        $this->minnumberOfBedroom = $minnumberOfBedroom;

        return $this;
    }

    /**
     * Get the value of minnumberOfBed
     */ 
    public function getMinnumberOfBed(): ?int
    {
        return $this->minnumberOfBed;
    }

    /**
     * Set the value of minnumberOfBed
     *
     * @return  self
     */ 
    public function setMinnumberOfBed($minnumberOfBed)
    {
        $this->minnumberOfBed = $minnumberOfBed;

        return $this;
    }

    /**
     * Get the value of isOkPets
     */ 
    public function getIsOkPets(): ?bool
    {
        return $this->isOkPets;
    }

    /**
     * Set the value of isOkPets
     *
     * @return  self
     */ 
    public function setIsOkPets($isOkPets)
    {
        $this->isOkPets = $isOkPets;

        return $this;
    }
}