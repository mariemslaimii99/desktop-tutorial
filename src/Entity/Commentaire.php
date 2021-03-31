<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $contenu;
    /**
     * @ORM\ManyToOne(targetEntity=Experience::class, inversedBy="id")
     * @ORM\Column(type="integer")
     */
    private $idExperience;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $idClient;

    /**
     * @ORM\ManyToOne(targetEntity=Experience::class)
     * @ORM\JoinColumn(nullable=false )
     */
    private $relation;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getIdExperience(): ?string
    {
        return $this->idExperience;
    }

    public function setIdExperience(string $idExperience): self
    {
        $this->idExperience = $idExperience;

        return $this;
    }

    public function getIdClient(): ?string
    {
        return $this->idClient;
    }

    public function setIdClient(string $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getRelation(): ?Experience
    {
        return $this->relation;
    }

    public function setRelation(?Experience $relation): self
    {
        $this->relation = $relation;

        return $this;
    }



}
