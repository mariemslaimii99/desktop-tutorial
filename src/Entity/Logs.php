<?php

namespace App\Entity;

use App\Repository\LogsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LogsRepository::class)
 */
class Logs
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
    private $logname;

    /**
     * @ORM\Column(type="datetime")
     */
    private $logdate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogname(): ?string
    {
        return $this->logname;
    }

    public function setLogname(string $logname): self
    {
        $this->logname = $logname;

        return $this;
    }

    public function getLogdate(): ?\DateTimeInterface
    {
        return $this->logdate;
    }

    public function setLogdate(\DateTimeInterface $logdate): self
    {
        $this->logdate = $logdate;

        return $this;
    }
}
