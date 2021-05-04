<?php

namespace App\Entity;

use App\Repository\ResponseScoreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResponseScoreRepository::class)
 * @ORM\Table(name="response_scores")
 */
class ResponseScore
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
     * @ORM\Column(type="string", length=255)
     */
    private $source;

    /**
     * @ORM\Column(type="string", length=36, nullable=true)
     */
    private $slot_idx;

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

    /**
     * @ORM\OneToMany(targetEntity=ScoreFeedback::class, mappedBy="responseScore")
     * @ORM\JoinColumn(name="id", referencedColumnName="score_id")
     */
    private $scoreFeedback;

    /**
     * @ORM\OneToOne(targetEntity=ResponsePrimaryScore::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="id", referencedColumnName="score_id", nullable=false)
     */
    private $responsePrimaryScore;

    /**
     * @ORM\ManyToOne(targetEntity=SessionQuestionResponse::class, inversedBy="responseScores")
     * @ORM\JoinColumn(name="response_id", referencedColumnName="response_id", nullable=false)
     */
    private $sessionQuestionResponse;

    public function __construct()
    {
        $this->scoreFeedback = new ArrayCollection();
    }

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

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getSlotIdx(): ?string
    {
        return $this->slot_idx;
    }

    public function setSlotIdx(?string $slot_idx): self
    {
        $this->slot_idx = $slot_idx;

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

    /**
     * @return Collection|ScoreFeedback[]
     */
    public function getScoreFeedback(): Collection
    {
        return $this->scoreFeedback;
    }

    public function addScoreFeedback(ScoreFeedback $scoreFeedback): self
    {
        if (!$this->scoreFeedback->contains($scoreFeedback)) {
            $this->scoreFeedback[] = $scoreFeedback;
            $scoreFeedback->setResponseScore($this);
        }

        return $this;
    }

    public function removeScoreFeedback(ScoreFeedback $scoreFeedback): self
    {
        if ($this->scoreFeedback->removeElement($scoreFeedback)) {
            // set the owning side to null (unless already changed)
            if ($scoreFeedback->getResponseScore() === $this) {
                $scoreFeedback->setResponseScore(null);
            }
        }

        return $this;
    }

    public function getResponsePrimaryScore(): ?ResponsePrimaryScore
    {
        return $this->responsePrimaryScore;
    }

    public function setResponsePrimaryScore(ResponsePrimaryScore $responsePrimaryScore): self
    {
        $this->responsePrimaryScore = $responsePrimaryScore;

        return $this;
    }

    public function getSessionQuestionResponse(): ?SessionQuestionResponse
    {
        return $this->sessionQuestionResponse;
    }

    public function setSessionQuestionResponse(?SessionQuestionResponse $sessionQuestionResponse): self
    {
        $this->sessionQuestionResponse = $sessionQuestionResponse;

        return $this;
    }
}
