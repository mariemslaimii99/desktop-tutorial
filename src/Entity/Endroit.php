<?php

namespace App\Entity;
use App\Entity\Event;
use App\Repository\EndroitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EndroitRepository::class)
 */
class Endroit
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
    private $nom_endroit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Event::class, mappedBy="nom_endroit")
     */
    private $event;

    public function __construct()
    {
        $this->event = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEndroit(): ?string
    {
        return $this->nom_endroit;
    }

    public function setNomEndroit(string $nom_endroit): self
    {
        $this->nom_endroit = $nom_endroit;

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

    /**
     * @return Collection|Event[]
     */
    public function getEvent(): Collection
    {
        return $this->event;
    }

    public function addEvent(Event $event): self
    {
        if (!$this->event->contains($event)) {
            $this->event[] = $event;
            $event->setNomEndroit($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): self
    {
        if ($this->event->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getNomEndroit() === $this) {
                $event->setNomEndroit(null);
            }
        }

        return $this;
    }

    public function __toString() : string
    {
        return $this->nom_endroit;
    }
}
