<?php

namespace App\Entity;

use App\Repository\GiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GiteRepository::class)
 */
class Gite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $contact;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $scheduleContact;

    /**
     * @ORM\Column(type="text")
     */
    private $localisation;

    /**
     * @ORM\Column(type="float")
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberOfBedroom;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberOfBed;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipement;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Pets;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getScheduleContact(): ?string
    {
        return $this->scheduleContact;
    }

    public function setScheduleContact(?string $scheduleContact): self
    {
        $this->scheduleContact = $scheduleContact;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getNumberOfBedroom(): ?float
    {
        return $this->numberOfBedroom;
    }

    public function setNumberOfBedroom(float $numberOfBedroom): self
    {
        $this->numberOfBedroom = $numberOfBedroom;

        return $this;
    }

    public function getNumberOfBed(): ?int
    {
        return $this->numberOfBed;
    }

    public function setNumberOfBed(int $numberOfBed): self
    {
        $this->numberOfBed = $numberOfBed;

        return $this;
    }

    public function getEquipement(): ?string
    {
        return $this->equipement;
    }

    public function setEquipement(?string $equipement): self
    {
        $this->equipement = $equipement;

        return $this;
    }

    public function isPets(): ?bool
    {
        return $this->Pets;
    }

    public function setPets(?bool $Pets): self
    {
        $this->Pets = $Pets;

        return $this;
    }
}