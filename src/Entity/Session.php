<?php

namespace App\Entity;

use App\Repository\SessionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionRepository::class)
 * @ORM\Table(name="sessions")
 */
class Session
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(type="string", length=36)
     */
    private $session_id;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $user_id;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $activity_id;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $activity_template_id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $score;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $max_score;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $max_score_of_unmarked;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $max_score_of_attempted;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dt_created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dt_updated;

    /**
     * @ORM\OneToMany(targetEntity=SessionItem::class, mappedBy="session")
     * @ORM\JoinColumn(name="session_id", referencedColumnName="session_id")
     */
    private $sessionItems;

    /**
     * @ORM\OneToMany(targetEntity=SessionQuestion::class, mappedBy="session")
     * @ORM\JoinColumn(name="session_id", referencedColumnName="session_id")
     */
    private $sessionQuestions;

    public function __construct()
    {
        $this->sessionItems = new ArrayCollection();
        $this->sessionQuestions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserId(): ?string
    {
        return $this->user_id;
    }

    public function setUserId(string $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getActivityId(): ?string
    {
        return $this->activity_id;
    }

    public function setActivityId(string $activity_id): self
    {
        $this->activity_id = $activity_id;

        return $this;
    }

    public function getActivityTemplateId(): ?string
    {
        return $this->activity_template_id;
    }

    public function setActivityTemplateId(string $activity_template_id): self
    {
        $this->activity_template_id = $activity_template_id;

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

    public function getMaxScoreOfUnmarked(): ?string
    {
        return $this->max_score_of_unmarked;
    }

    public function setMaxScoreOfUnmarked(?string $max_score_of_unmarked): self
    {
        $this->max_score_of_unmarked = $max_score_of_unmarked;

        return $this;
    }

    public function getMaxScoreOfAttempted(): ?string
    {
        return $this->max_score_of_attempted;
    }

    public function setMaxScoreOfAttempted(?string $max_score_of_attempted): self
    {
        $this->max_score_of_attempted = $max_score_of_attempted;

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
     * @return Collection|SessionItem[]
     */
    public function getSessionItems(): Collection
    {
        return $this->sessionItems;
    }

    public function addSessionItem(SessionItem $sessionItem): self
    {
        if (!$this->sessionItems->contains($sessionItem)) {
            $this->sessionItems[] = $sessionItem;
            $sessionItem->setSession($this);
        }

        return $this;
    }

    public function removeSessionItem(SessionItem $sessionItem): self
    {
        if ($this->sessionItems->removeElement($sessionItem)) {
            // set the owning side to null (unless already changed)
            if ($sessionItem->getSession() === $this) {
                $sessionItem->setSession(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SessionQuestion[]
     */
    public function getSessionQuestions(): Collection
    {
        return $this->sessionQuestions;
    }

    public function addSessionQuestion(SessionQuestion $sessionQuestion): self
    {
        if (!$this->sessionQuestions->contains($sessionQuestion)) {
            $this->sessionQuestions[] = $sessionQuestion;
            $sessionQuestion->setSession($this);
        }

        return $this;
    }

    public function removeSessionQuestion(SessionQuestion $sessionQuestion): self
    {
        if ($this->sessionQuestions->removeElement($sessionQuestion)) {
            // set the owning side to null (unless already changed)
            if ($sessionQuestion->getSession() === $this) {
                $sessionQuestion->setSession(null);
            }
        }

        return $this;
    }
}
