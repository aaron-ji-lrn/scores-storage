<?php

namespace App\Entity;

use App\Repository\ResponseScoresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResponseScoresRepository::class)
 */
class ResponseScores
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
    private $response_id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $score;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $max_score;

    /**
     * @ORM\Column(type="string", length=36, nullable=true)
     */
    private $grader;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @ORM\Column(type="string", length=36, nullable=true)
     */
    private $slot_index;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tag;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dt_created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dt_updated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResponseId(): ?string
    {
        return $this->response_id;
    }

    public function setResponseId(string $response_id): self
    {
        $this->response_id = $response_id;

        return $this;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(?string $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getMaxScore(): ?string
    {
        return $this->max_score;
    }

    public function setMaxScore(?string $max_score): self
    {
        $this->max_score = $max_score;

        return $this;
    }

    public function getGrader(): ?string
    {
        return $this->grader;
    }

    public function setGrader(?string $grader): self
    {
        $this->grader = $grader;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getSlotIndex(): ?string
    {
        return $this->slot_index;
    }

    public function setSlotIndex(?string $slot_index): self
    {
        $this->slot_index = $slot_index;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(?string $tag): self
    {
        $this->tag = $tag;

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
}
