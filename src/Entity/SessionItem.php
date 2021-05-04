<?php

namespace App\Entity;

use App\Repository\SessionItemRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionItemRepository::class)
 * @ORM\Table(name="session_items")
 */
class SessionItem
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(type="string", length=36)
     */
    private $item_id;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $session_id;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $item_reference;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $item_pool_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $organisation_id;

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
     * @ORM\ManyToOne(targetEntity=Session::class, inversedBy="sessionItems")
     * @ORM\JoinColumn(name="session_id", referencedColumnName="session_id", nullable=false)
     */
    private $session;

    /**
     * @ORM\OneToMany(targetEntity=SessionQuestion::class, mappedBy="sessionItem")
     * @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     */
    private $sessionQuestions;

    public function __construct()
    {
        $this->sessionQuestions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSessionId(): ?string
    {
        return $this->session_id;
    }

    public function setSessionId(string $session_id): self
    {
        $this->session_id = $session_id;

        return $this;
    }

    public function getItemReference(): ?string
    {
        return $this->item_reference;
    }

    public function setItemReference(string $item_reference): self
    {
        $this->item_reference = $item_reference;

        return $this;
    }

    public function getItemPoolId(): ?int
    {
        return $this->item_pool_id;
    }

    public function setItemPoolId(?int $item_pool_id): self
    {
        $this->item_pool_id = $item_pool_id;

        return $this;
    }

    public function getOrganisationId(): ?int
    {
        return $this->organisation_id;
    }

    public function setOrganisationId(int $organisation_id): self
    {
        $this->organisation_id = $organisation_id;

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

    public function getSession(): ?Session
    {
        return $this->session;
    }

    public function setSession(?Session $session): self
    {
        $this->session = $session;

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
            $sessionQuestion->setSessionItem($this);
        }

        return $this;
    }

    public function removeSessionQuestion(SessionQuestion $sessionQuestion): self
    {
        if ($this->sessionQuestions->removeElement($sessionQuestion)) {
            // set the owning side to null (unless already changed)
            if ($sessionQuestion->getSessionItem() === $this) {
                $sessionQuestion->setSessionItem(null);
            }
        }

        return $this;
    }
}
