<?php

namespace App\Entity;

use App\Repository\FeedbackRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FeedbackRepository::class)
 */
class Feedback
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $type;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dt_created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dt_updated;

    /**
     * @ORM\OneToOne(targetEntity=ScoreFeedback::class, inversedBy="feedback", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="id", referencedColumnName="feedback_id", nullable=false)
     */
    private $scoreFeedback;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getDtCreated(): ?\DateTimeInterface
    {
        return $this->dt_created;
    }

    public function setDtCreated(\DateTimeInterface $dt_created): self
    {
        $this->dt_created = $dt_created;

        return $this;
    }

    public function getDtUpdated(): ?\DateTimeInterface
    {
        return $this->dt_updated;
    }

    public function setDtUpdated(?\DateTimeInterface $dt_updated): self
    {
        $this->dt_updated = $dt_updated;

        return $this;
    }

    public function getScoreFeedback(): ?ScoreFeedback
    {
        return $this->scoreFeedback;
    }

    public function setScoreFeedback(ScoreFeedback $scoreFeedback): self
    {
        $this->scoreFeedback = $scoreFeedback;

        return $this;
    }
}
