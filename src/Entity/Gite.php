<?php

namespace App\Entity;

use App\Repository\GiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


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
     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Votre titre doit etre de minimum 5 characters",
     *      maxMessage = "Votre titre doit etre de maximum 50 characters"
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(
     *      min = 50,
     *      max = 1000,
     *      minMessage = "Votre titre doit etre de minimum 50 characters",
     *      maxMessage = "Votre titre doit etre de maximum 1000 characters"
     * )
     */
    private $description;

    /**
     * @Assert\Email(
     *     message = "l'email '{{ value }}' n'est pas un email valide"
     * )
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
     * @Assert\Range(
     *          min=30,
     *          max=500,
     *          minMessage="La surface minimal doit etre de  {{ min }} m²",
     *          maxMessage="La surface maximal doit etre de  {{ max }} m²"
     * )
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive(
     *          message="le nombre de chambre ne peut etre négatif"
     * )
     */
    private $numberOfBedroom;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive(
     *          message="le nombre de lit ne peut etre négatif"
     * )
     */
    private $numberOfBed;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Pets;

    /**
     * @ORM\ManyToMany(targetEntity=Equipement::class, inversedBy="gites")
     */
    private $equipements;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    public function __construct()
    {
        $this->equipements = new ArrayCollection();
    }

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

    public function isPets(): ?bool
    {
        return $this->Pets;
    }

    public function setPets(?bool $Pets): self
    {
        $this->Pets = $Pets;

        return $this;
    }

    /**
     * @return Collection<int, equipement>
     */
    public function getEquipements(): Collection
    {
        return $this->equipements;
    }

    public function addEquipement(equipement $equipement): self
    {
        if (!$this->equipements->contains($equipement)) {
            $this->equipements[] = $equipement;
        }

        return $this;
    }

    public function removeEquipement(equipement $equipement): self
    {
        $this->equipements->removeElement($equipement);

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}