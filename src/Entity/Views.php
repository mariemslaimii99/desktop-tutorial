<?php

namespace App\Entity;

use App\Repository\ViewsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ViewsRepository::class)
 */
class Views
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
    private $routename;

    /**
     * @ORM\Column(type="datetime")
     */
    private $visitdate;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoutename(): ?string
    {
        return $this->routename;
    }

    public function setRoutename(string $routename): self
    {
        $this->routename = $routename;

        return $this;
    }

    public function getVisitdate(): ?\DateTimeInterface
    {
        return $this->visitdate;
    }

    public function setVisitdate(\DateTimeInterface $visitdate): self
    {
        $this->visitdate = $visitdate;

        return $this;
    }


}
