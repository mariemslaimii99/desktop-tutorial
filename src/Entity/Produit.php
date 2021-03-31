<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use PhpParser\Node\Scalar\String_;
/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $nomP;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Positive
     */
    private $prix;

    /**
     * @ORM\OneToMany(targetEntity=Commande::class, mappedBy="produit")
     */
    private $commandes;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="please upload image")
     * @Assert\File(mimeTypes={"image/jpeg"})
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class)
     */
    private $categorie;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomP(): ?string
    {
        return $this->nomP;
    }

    public function setNomP(string $nomP): self
    {
        $this->nomP = $nomP;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage( $image)
    {
        $this->image = $image;

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

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function __toString():string
    {
        return $this->categorie;
    }
    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommandes(Commande $commandes): self
    {
        if (!$this->commandes->contains($commandes)) {
            $this->commandes[] = $commandes;
            $commandes->setProduit($this);
        }

        return $this;
    }

    public function removeCommandes(Commande $commandes): self
    {
        if ($this->commandes->removeElement($commandes)) {
            // set the owning side to null (unless already changed)
            if ($commandes->getProduit() === $this) {
                $commandes->setProduit(null);
            }
        }

        return $this;
    }
    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }
}
