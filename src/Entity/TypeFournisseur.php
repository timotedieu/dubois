<?php

namespace App\Entity;

use App\Repository\TypeFournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeFournisseurRepository::class)]
class TypeFournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $typeId = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptio = null;

    #[ORM\ManyToOne(inversedBy: 'typeFournisseurs')]
    private ?FournisseurType $fournisseurType = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescriptio(): ?string
    {
        return $this->descriptio;
    }

    public function setDescriptio(string $descriptio): static
    {
        $this->descriptio = $descriptio;

        return $this;
    }

    public function getFournisseurType(): ?FournisseurType
    {
        return $this->fournisseurType;
    }

    public function setFournisseurType(?FournisseurType $fournisseurType): static
    {
        $this->fournisseurType = $fournisseurType;

        return $this;
    }
}
