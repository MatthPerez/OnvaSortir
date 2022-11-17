<?php

class Members
{
  private $id;
  private $nom;
  private $password;
  private $status;
  private $adresse;
  private $mail;
  private $tel;
  private $genre;
  private $dpt;
  private $ville;
  private $photo;
  private $birth;
  private $inscription;

  public function __construct(
    $id,
    $nom,
    $password,
    $status,
    $adresse,
    $mail,
    $tel,
    $genre,
    $dpt,
    $ville,
    $photo,
    $birth,
    $inscription
  ) {
    $this->id = $id;
    $this->nom = $nom;
    $this->password = $password;
    $this->status = $status;
    $this->adresse = $adresse;
    $this->mail = $mail;
    $this->tel = $tel;
    $this->genre = $genre;
    $this->dpt = $dpt;
    $this->ville = $ville;
    $this->photo = $photo;
    $this->birth = $birth;
    $this->inscription = $inscription;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function getNom()
  {
    return $this->nom;
  }

  public function setNom($nom)
  {
    $this->nom = $nom;
    return $this;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->password = $password;
    return $this;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
    return $this;
  }


  public function getAdresse()
  {
    return $this->adresse;
  }

  public function setAdresse($adresse)
  {
    $this->adresse = $adresse;
    return $this;
  }

  public function getMail()
  {
    return $this->mail;
  }

  public function setMail($mail)
  {
    $this->mail = $mail;
    return $this;
  }

  public function getTel()
  {
    return $this->tel;
  }

  public function setTel($tel)
  {
    $this->tel = $tel;
    return $this;
  }

  public function getGenre()
  {
    return $this->genre;
  }

  public function setGenre($genre)
  {
    $this->genre = $genre;
    return $this;
  }

  public function getDpt()
  {
    return $this->dpt;
  }

  public function setDpt($dpt)
  {
    $this->dpt = $dpt;
    return $this;
  }

  public function getVille()
  {
    return $this->ville;
  }

  public function setVille($ville)
  {
    $this->ville = $ville;
    return $this;
  }

  public function getPhoto()
  {
    return $this->photo;
  }

  public function setPhoto($photo)
  {
    $this->photo = $photo;
    return $this;
  }

  public function getBirth()
  {
    return $this->birth;
  }

  public function setBirth($birth)
  {
    $this->birth = $birth;
    return $this;
  }

  public function getInscription()
  {
    return $this->inscription;
  }

  public function setInscription($inscription)
  {
    $this->inscription = $inscription;
    return $this;
  }
}
