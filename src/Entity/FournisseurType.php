<?php

namespace App\Entity;

use App\Repository\FournisseurTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurTypeRepository::class)]
class FournisseurType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $fournisseurId = null;

    #[ORM\Column]
    private ?int $typeId = null;

    #[ORM\OneToMany(mappedBy: 'fournisseurType', targetEntity: Fournisseur::class, orphanRemoval: true)]
    private Collection $fournisseurs;

    #[ORM\OneToMany(mappedBy: 'fournisseurType', targetEntity: TypeFournisseur::class)]
    private Collection $typeFournisseurs;

    public function __construct()
    {
        $this->fournisseurs = new ArrayCollection();
        $this->typeFournisseurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFournisseurId(): ?int
    {
        return $this->fournisseurId;
    }

    public function setFournisseurId(int $fournisseurId): static
    {
        $this->fournisseurId = $fournisseurId;

        return $this;
    }

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    public function setTypeId(int $typeId): static
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return Collection<int, Fournisseur>
     */
    public function getFournisseurs(): Collection
    {
        return $this->fournisseurs;
    }

    public function addFournisseur(Fournisseur $fournisseur): static
    {
        if (!$this->fournisseurs->contains($fournisseur)) {
            $this->fournisseurs->add($fournisseur);
            $fournisseur->setFournisseurType($this);
        }

        return $this;
    }

    public function removeFournisseur(Fournisseur $fournisseur): static
    {
        if ($this->fournisseurs->removeElement($fournisseur)) {
            // set the owning side to null (unless already changed)
            if ($fournisseur->getFournisseurType() === $this) {
                $fournisseur->setFournisseurType(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TypeFournisseur>
     */
    public function getTypeFournisseurs(): Collection
    {
        return $this->typeFournisseurs;
    }

    public function addTypeFournisseur(TypeFournisseur $typeFournisseur): static
    {
        if (!$this->typeFournisseurs->contains($typeFournisseur)) {
            $this->typeFournisseurs->add($typeFournisseur);
            $typeFournisseur->setFournisseurType($this);
        }

        return $this;
    }

    public function removeTypeFournisseur(TypeFournisseur $typeFournisseur): static
    {
        if ($this->typeFournisseurs->removeElement($typeFournisseur)) {
            // set the owning side to null (unless already changed)
            if ($typeFournisseur->getFournisseurType() === $this) {
                $typeFournisseur->setFournisseurType(null);
            }
        }

        return $this;
    }
}
