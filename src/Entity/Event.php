<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Endroit;
use PhpParser\Node\Scalar\String_;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
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
     *      min = 4,
     *      max = 20,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */
    private $NomEvent;
    /**
     * @ORM\ManyToOne(targetEntity=Endroit::class, inversedBy="event")
     */
    private $nom_endroit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive
     */
    private $nbPlaceMax;

    /**
     * @ORM\Column(type="string", length=255)


     */
    private $LieuDepart;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateDepart;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvent(): ?string
    {
        return $this->NomEvent;
    }

    public function setNomEvent(string $NomEvent): self
    {
        $this->NomEvent = $NomEvent;

        return $this;
    }



    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getNbPlaceMax(): ?int
    {
        return $this->nbPlaceMax;
    }

    public function setNbPlaceMax(int $nbPlaceMax): self
    {
        $this->nbPlaceMax = $nbPlaceMax;

        return $this;
    }

    public function getLieuDepart(): ?string
    {
        return $this->LieuDepart;
    }

    public function setLieuDepart(string $LieuDepart): self
    {
        $this->LieuDepart = $LieuDepart;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->DateDepart;
    }

    public function setDateDepart(\DateTimeInterface $DateDepart): self
    {
        $this->DateDepart = $DateDepart;

        return $this;
    }

    public function getNomEndroit(): ?Endroit
    {
        return $this->nom_endroit;
    }

    public function setNomEndroit(?Endroit $nom_endroit): self
    {
        $this->nom_endroit = $nom_endroit;

        return $this;
    }

    public function __toString() : string
    {
        return $this->nom_endroit;
    }
}