<?php

namespace App\Entity;

use App\Repository\LigneCommandeFournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LigneCommandeFournisseurRepository::class)]
class LigneCommandeFournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $comandeId = null;

    #[ORM\Column]
    private ?int $fournisseurId = null;

    #[ORM\Column]
    private ?int $matiereId = null;

    #[ORM\Column(length: 255)]
    private ?string $quantiterCommande = null;

    #[ORM\Column(length: 255)]
    private ?string $prixUnitaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComandeId(): ?int
    {
        return $this->comandeId;
    }

    public function setComandeId(int $comandeId): static
    {
        $this->comandeId = $comandeId;

        return $this;
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

    public function getMatiereId(): ?int
    {
        return $this->matiereId;
    }

    public function setMatiereId(int $matiereId): static
    {
        $this->matiereId = $matiereId;

        return $this;
    }

    public function getQuantiterCommande(): ?string
    {
        return $this->quantiterCommande;
    }

    public function setQuantiterCommande(string $quantiterCommande): static
    {
        $this->quantiterCommande = $quantiterCommande;

        return $this;
    }

    public function getPrixUnitaire(): ?string
    {
        return $this->prixUnitaire;
    }

    public function setPrixUnitaire(string $prixUnitaire): static
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }
}
