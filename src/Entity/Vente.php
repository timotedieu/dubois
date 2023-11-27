<?php

namespace App\Entity;

use App\Repository\VenteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VenteRepository::class)]
class Vente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $venteId = null;

    #[ORM\Column(length: 255)]
    private ?string $produit = null;

    #[ORM\Column]
    private ?int $produitId = null;

    #[ORM\Column(length: 255)]
    private ?string $nomProduit = null;

    #[ORM\Column(length: 255)]
    private ?string $datevente = null;

    #[ORM\Column(length: 255)]
    private ?string $quantiter = null;

    #[ORM\Column(length: 255)]
    private ?string $prixtotal = null;

    #[ORM\Column]
    private ?int $clientId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVenteId(): ?int
    {
        return $this->venteId;
    }

    public function setVenteId(int $venteId): static
    {
        $this->venteId = $venteId;

        return $this;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): static
    {
        $this->produit = $produit;

        return $this;
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

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $nomProduit): static
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getDatevente(): ?string
    {
        return $this->datevente;
    }

    public function setDatevente(string $datevente): static
    {
        $this->datevente = $datevente;

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

    public function getPrixtotal(): ?string
    {
        return $this->prixtotal;
    }

    public function setPrixtotal(string $prixtotal): static
    {
        $this->prixtotal = $prixtotal;

        return $this;
    }

    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    public function setClientId(int $clientId): static
    {
        $this->clientId = $clientId;

        return $this;
    }
}
