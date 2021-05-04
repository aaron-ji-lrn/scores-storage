<?php

namespace App\Entity;

use App\Repository\SessionQuestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionQuestionRepository::class)
 * @ORM\Table(name="session_questions")
 */
class SessionQuestion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $question_id;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $session_id;

    /**
     * @ORM\Column(type="string", length=36, nullable=true)
     */
    private $item_id;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $question_reference;

    /**
     * @ORM\OneToOne(targetEntity=SessionQuestionResponse::class, inversedBy="sessionQuestion", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="question_id", referencedColumnName="question_id")
     */
    private $sessionQuestionResponse;

    /**
     * @ORM\ManyToOne(targetEntity=SessionItem::class, inversedBy="sessionQuestions")
     * @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     */
    private $sessionItem;

    /**
     * @ORM\ManyToOne(targetEntity=Session::class, inversedBy="sessionQuestions")
     * @ORM\JoinColumn(name="session_id", referencedColumnName="session_id", nullable=false)
     */
    private $session;

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

    public function getSessionId(): ?string
    {
        return $this->session_id;
    }

    public function setSessionId(string $session_id): self
    {
        $this->session_id = $session_id;

        return $this;
    }

    public function getItemId(): ?string
    {
        return $this->item_id;
    }

    public function setItemId(string $item_id): self
    {
        $this->item_id = $item_id;

        return $this;
    }

    public function getQuestionReference(): ?string
    {
        return $this->question_reference;
    }

    public function setQuestionReference(string $question_reference): self
    {
        $this->question_reference = $question_reference;

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

    public function getSessionItem(): ?SessionItem
    {
        return $this->sessionItem;
    }

    public function setSessionItem(?SessionItem $sessionItem): self
    {
        $this->sessionItem = $sessionItem;

        return $this;
    }

    public function getSession(): ?Session
    {
        return $this->session;
    }

    public function setSession(?Session $session): self
    {
        $this->session = $session;

        return $this;
    }
}
