<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RatingRepository::class)
 */
class Rating
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Idclient;

    /**
     * @ORM\Column(type="integer")
     */
    private $Idexperience;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdclient(): ?int
    {
        return $this->Idclient;
    }

    public function setIdclient(int $Idclient): self
    {
        $this->Idclient = $Idclient;

        return $this;
    }

    public function getIdexperience(): ?int
    {
        return $this->Idexperience;
    }

    public function setIdexperience(int $Idexperience): self
    {
        $this->Idexperience = $Idexperience;

        return $this;
    }
}
