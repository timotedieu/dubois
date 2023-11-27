<?php

namespace App\Entity;

use App\Repository\MatierePremiereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatierePremiereRepository::class)]
class MatierePremiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $MatiereId = null;

    #[ORM\Column(length: 255)]
    private ?string $typeBois = null;

    #[ORM\Column(length: 255)]
    private ?string $quantiter = null;

    #[ORM\Column]
    private ?int $fournisseurId = null;

    #[ORM\Column(length: 255)]
    private ?string $prixUnitaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatiereId(): ?int
    {
        return $this->MatiereId;
    }

    public function setMatiereId(int $MatiereId): static
    {
        $this->MatiereId = $MatiereId;

        return $this;
    }

    public function getTypeBois(): ?string
    {
        return $this->typeBois;
    }

    public function setTypeBois(string $typeBois): static
    {
        $this->typeBois = $typeBois;

        return $this;
    }

    public function getQuantiter(): ?string
    {
        return $this->quantiter;
    }

    public function setQuantiter(string $quantiter): static
    {
        $this->quantiter = $quantiter;

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
