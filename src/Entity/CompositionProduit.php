<?php

namespace App\Entity;

use App\Repository\CompositionProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompositionProduitRepository::class)]
class CompositionProduit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $produitId = null;

    #[ORM\Column]
    private ?int $MatiereId = null;

    #[ORM\Column(length: 255)]
    private ?string $quantiterUtiliser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduitId(): ?int
    {
        return $this->produitId;
    }

    public function setProduitId(int $produitId): static
    {
        $this->produitId = $produitId;

        return $this;
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

    public function getQuantiterUtiliser(): ?string
    {
        return $this->quantiterUtiliser;
    }

    public function setQuantiterUtiliser(string $quantiterUtiliser): static
    {
        $this->quantiterUtiliser = $quantiterUtiliser;

        return $this;
    }
}
