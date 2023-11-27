<?php

namespace App\Entity;

use App\Repository\CommandeFournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeFournisseurRepository::class)]
class CommandeFournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ComandeId = null;

    #[ORM\Column(length: 255)]
    private ?string $dateComande = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComandeId(): ?int
    {
        return $this->ComandeId;
    }

    public function setComandeId(int $ComandeId): static
    {
        $this->ComandeId = $ComandeId;

        return $this;
    }

    public function getDateComande(): ?string
    {
        return $this->dateComande;
    }

    public function setDateComande(string $dateComande): static
    {
        $this->dateComande = $dateComande;

        return $this;
    }
}
