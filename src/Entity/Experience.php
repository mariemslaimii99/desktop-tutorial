<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ExperienceRepository::class)
 */
class Experience
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Your Title must be at least {{ limit }} characters long",
     *      maxMessage = "Your  Title cannot be longer than {{ limit }} characters"
     * )
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="integer", length=1)
     *
     */
    private $Note;

    /**
     * @ORM\Column(type="integer", length=11)
     */
    private $Points;

    /**
     * @ORM\Column(type="integer", length=11)
     */
    private $Id_client;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\File(mimeTypes={"image/jpeg"})
     */
    private $Image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $endroit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->Note;
    }

    public function setNote(int $Note): self
    {
        $this->Note = $Note;

        return $this;
    }

    public function getPoints(): ?string
    {
        return $this->Points;
    }

    public function setPoints(string $Points): self
    {
        $this->Points = $Points;

        return $this;
    }

    public function getIdClient(): ?string
    {
        return $this->Id_client;
    }

    public function setIdClient(string $Id_client): self
    {
        $this->Id_client = $Id_client;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getImage()
    {
        return $this->Image;
    }

    public function setImage( $Image)
    {
        $this->Image = $Image;

        return $this;
    }

    public function getEndroit(): ?string
    {
        return $this->endroit;
    }

    public function setEndroit(string $endroit): self
    {
        $this->endroit = $endroit;

        return $this;
    }
}
