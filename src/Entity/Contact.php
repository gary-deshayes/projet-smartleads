<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code_customer;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_created_plug;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_update_plug;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $decision_level;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $birth_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $job;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $mobile_phone;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $email_prechecked;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $email_checked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_linkedin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $operation_source;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentary;

    /**
     * @ORM\Column(type="boolean")
     */
    private $opt_in_newsletter;

    /**
     * @ORM\Column(type="boolean")
     */
    private $opt_in_offer_commercial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company_function;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company_service;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="contacts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeCustomer(): ?string
    {
        return $this->code_customer;
    }

    public function setCodeCustomer(string $code_customer): self
    {
        $this->code_customer = $code_customer;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDateCreatedPlug(): ?\DateTimeInterface
    {
        return $this->date_created_plug;
    }

    public function setDateCreatedPlug(\DateTimeInterface $date_created_plug): self
    {
        $this->date_created_plug = $date_created_plug;

        return $this;
    }

    public function getDateUpdatePlug(): ?\DateTimeInterface
    {
        return $this->date_update_plug;
    }

    public function setDateUpdatePlug(\DateTimeInterface $date_update_plug): self
    {
        $this->date_update_plug = $date_update_plug;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDecisionLevel(): ?int
    {
        return $this->decision_level;
    }

    public function setDecisionLevel(?int $decision_level): self
    {
        $this->decision_level = $decision_level;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birth_date;
    }

    public function setBirthDate(?\DateTimeInterface $birth_date): self
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(?string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobile_phone;
    }

    public function setMobilePhone(?string $mobile_phone): self
    {
        $this->mobile_phone = $mobile_phone;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmailPrechecked(): ?bool
    {
        return $this->email_prechecked;
    }

    public function setEmailPrechecked(?bool $email_prechecked): self
    {
        $this->email_prechecked = $email_prechecked;

        return $this;
    }

    public function getEmailChecked(): ?bool
    {
        return $this->email_checked;
    }

    public function setEmailChecked(?bool $email_checked): self
    {
        $this->email_checked = $email_checked;

        return $this;
    }

    public function getUrlLinkedin(): ?string
    {
        return $this->url_linkedin;
    }

    public function setUrlLinkedin(?string $url_linkedin): self
    {
        $this->url_linkedin = $url_linkedin;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getOperationSource(): ?string
    {
        return $this->operation_source;
    }

    public function setOperationSource(?string $operation_source): self
    {
        $this->operation_source = $operation_source;

        return $this;
    }

    public function getCommentary(): ?string
    {
        return $this->commentary;
    }

    public function setCommentary(?string $commentary): self
    {
        $this->commentary = $commentary;

        return $this;
    }

    public function getOptInNewsletter(): ?bool
    {
        return $this->opt_in_newsletter;
    }

    public function setOptInNewsletter(bool $opt_in_newsletter): self
    {
        $this->opt_in_newsletter = $opt_in_newsletter;

        return $this;
    }

    public function getOptInOfferCommercial(): ?bool
    {
        return $this->opt_in_offer_commercial;
    }

    public function setOptInOfferCommercial(bool $opt_in_offer_commercial): self
    {
        $this->opt_in_offer_commercial = $opt_in_offer_commercial;

        return $this;
    }

    public function getCompanyFunction(): ?string
    {
        return $this->company_function;
    }

    public function setCompanyFunction(string $company_function): self
    {
        $this->company_function = $company_function;

        return $this;
    }

    public function getCompanyService(): ?string
    {
        return $this->company_service;
    }

    public function setCompanyService(string $company_service): self
    {
        $this->company_service = $company_service;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }
}
