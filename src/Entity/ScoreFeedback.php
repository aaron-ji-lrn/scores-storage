<?php

namespace App\Entity;

use App\Repository\ScoreFeedbackRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScoreFeedbackRepository::class)
 */
class ScoreFeedback
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $score_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $feedback_id;

    /**
     * @ORM\OneToOne(targetEntity=Feedback::class, mappedBy="ScoreFeedback", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="feedback_id", referencedColumnName="id")
     */
    private $feedback;

    /**
     * @ORM\ManyToOne(targetEntity=ResponseScore::class, inversedBy="ScoreFeedback")
     * @ORM\JoinColumn(name="score_id", referencedColumnName="id", nullable=false)
     */
    private $responseScore;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScoreId(): ?int
    {
        return $this->score_id;
    }

    public function setScoreId(int $score_id): self
    {
        $this->score_id = $score_id;

        return $this;
    }

    public function getFeedbackId(): ?int
    {
        return $this->feedback_id;
    }

    public function setFeedbackId(int $feedback_id): self
    {
        $this->feedback_id = $feedback_id;

        return $this;
    }

    public function getFeedback(): ?Feedback
    {
        return $this->feedback;
    }

    public function setFeedback(Feedback $feedback): self
    {
        // set the owning side of the relation if necessary
        if ($feedback->getScoreFeedback() !== $this) {
            $feedback->setScoreFeedback($this);
        }

        $this->feedback = $feedback;

        return $this;
    }

    public function getResponseScore(): ?ResponseScore
    {
        return $this->responseScore;
    }

    public function setResponseScore(?ResponseScore $responseScore): self
    {
        $this->responseScore = $responseScore;

        return $this;
    }
}
