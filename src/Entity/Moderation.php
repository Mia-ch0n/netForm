<?php

namespace App\Entity;

use App\Repository\ModerationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModerationRepository::class)]
class Moderation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $message = null;

    #[ORM\Column(length: 255)]
    private ?string $moderator = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateWarning = null;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getModerator(): ?string
    {
        return $this->moderator;
    }

    public function setModerator(string $moderator): static
    {
        $this->moderator = $moderator;

        return $this;
    }

    public function getDateWarning(): ?string
    {
        return $this->dateWarning;
    }

    public function setDateWarning(string $dateWarning): static
    {
        $this->dateWarning = $dateWarning;

        return $this;
    }
}
