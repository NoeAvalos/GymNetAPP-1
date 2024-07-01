<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PaymentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
#[ApiResource]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $amount = null;

    #[ORM\Column(length: 50)]
    private ?string $paymentMethod = null;

    #[ORM\Column(length: 8)]
    private ?string $paymentDate = null;

    #[ORM\Column(length: 1, nullable: true)]
    private ?string $File = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(string $paymentDate): static
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->File;
    }

    public function setFile(?string $File): static
    {
        $this->File = $File;

        return $this;
    }
}
