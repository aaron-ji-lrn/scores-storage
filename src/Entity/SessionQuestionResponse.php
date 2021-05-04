<?php

namespace App\Entity;

use App\Repository\SessionQuestionResponseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionQuestionResponseRepository::class)
 * @ORM\Table(name="session_question_responses")
 */
class SessionQuestionResponse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(type="string", length=36)
     */
    private $response_id;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $question_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $response_revision;

    /**
     * @ORM\OneToMany(targetEntity=ResponseScore::class, mappedBy="sessionQuestionResponse")
     * @ORM\JoinColumn(name="response_id", referencedColumnName="response_id")
     */
    private $responseScores;

    /**
     * @ORM\OneToOne(targetEntity=SessionQuestion::class, mappedBy="sessionQuestionResponses", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="question_id", referencedColumnName="question_id")
     */
    private $sessionQuestion;

    public function __construct()
    {
        $this->responseScores = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestionId(): ?string
    {
        return $this->question_id;
    }

    public function setQuestionId(string $question_id): self
    {
        $this->question_id = $question_id;

        return $this;
    }

    public function getResponseId(): ?string
    {
        return $this->response_id;
    }

    public function setResponseId(?string $response_id): self
    {
        $this->response_id = $response_id;

        return $this;
    }

    public function getResponseRevision(): ?int
    {
        return $this->response_revision;
    }

    public function setResponseRevision(?int $response_revision): self
    {
        $this->response_revision = $response_revision;

        return $this;
    }

    /**
     * @return Collection|ResponseScore[]
     */
    public function getResponseScores(): Collection
    {
        return $this->responseScores;
    }

    public function addResponseScore(ResponseScore $responseScore): self
    {
        if (!$this->responseScores->contains($responseScore)) {
            $this->responseScores[] = $responseScore;
            $responseScore->setSessionQuestionResponse($this);
        }

        return $this;
    }

    public function removeResponseScore(ResponseScore $responseScore): self
    {
        if ($this->responseScores->removeElement($responseScore)) {
            // set the owning side to null (unless already changed)
            if ($responseScore->getSessionQuestionResponse() === $this) {
                $responseScore->setSessionQuestionResponse(null);
            }
        }

        return $this;
    }

    public function getSessionQuestion(): ?SessionQuestion
    {
        return $this->sessionQuestion;
    }

    public function setSessionQuestion(?SessionQuestion $sessionQuestion): self
    {
        // unset the owning side of the relation if necessary
        if ($sessionQuestion === null && $this->sessionQuestion !== null) {
            $this->sessionQuestion->setSessionQuestionResponses(null);
        }

        // set the owning side of the relation if necessary
        if ($sessionQuestion !== null && $sessionQuestion->getSessionQuestionResponses() !== $this) {
            $sessionQuestion->setSessionQuestionResponses($this);
        }

        $this->sessionQuestion = $sessionQuestion;

        return $this;
    }
}
